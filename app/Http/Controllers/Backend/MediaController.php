<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Image;
use Illuminate\Support\Facades\Auth;
use DB;
class MediaController extends Controller
{
    public function index(){
        $data['media_image_list'] = Media::orderBy('id','DESC')->get();        
        return view('backend.manage-media.index' , compact('data'));
    }

    public function showMediaForm(){
        return view('backend.manage-media.add');
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        $this->validate($request, [
            'image_file' => 'required',
        ]);
       
        if ($request->hasFile('image_file')){
            $files = $request->file('image_file');
            foreach ($files as $file) {
                $image = $file;
                $filenameWithExt = $image->getClientOriginalName();  
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $image_file_name = $filename.'_'.time().'.'.$extension;

                $destinationPath = public_path('/media-img/thumb');
                $img = Image::make($image->getRealPath());
                $img->resize(300, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$image_file_name);
        
                $destinationPath = public_path('media-img/main-img');

                $image->move($destinationPath, $image_file_name);
                $input['media_image'] = $image_file_name;
                $input['user_id'] = $user_id;
                
                $image_upload = Media::create($input);
            }
            if ($image_upload){
                return redirect('manage-media')->with('success','Media images uploaded successfully');
            }else{
                return redirect()->back()->with('error','Somthings went wrong please try again !.');
            }
        }
        return redirect()->back()->with('error','Somthings went wrong please try again !');
    }

    public function edit($id){
        $media_logo = Media::find($id);
        return view('backend.manage-media.edit' , compact('media_logo'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'media_title' => 'required',
        ]);
        $input['title'] = $request->media_title;
        $media_image_row = Media::find($request->media_image_id_hidden);
        if ($request->hasFile('update_image_file')){
            $image = $request->file('update_image_file');
            $filenameWithExt = $image->getClientOriginalName();  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $image_file_name = $filename.'_'.time().'.'.$extension;
            $destinationPath = public_path('/media-img/thumb');
            $destination_path_thumb = public_path('/media-img/thumb/');
            $destination_path_main_img_ = public_path('/media-img/main-img/');
            /*Unlink image*/
            $file_old_thumb = $destination_path_thumb.$media_image_row->media_img;
            $file_old_main = $destination_path_main_img_.$media_image_row->media_img;
            unlink($file_old_thumb);
            unlink($file_old_main);
            /*Unlink image*/
            $img = Image::make($image->getRealPath());
            $img->resize(300, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$image_file_name);
            $destinationPath = public_path('media-img/main-img');
            $image->move($destinationPath, $image_file_name);
            $input['media_image'] = $image_file_name;
        }
        $media_image_row_update = $media_image_row->update($input);
        if($media_image_row_update){
            return redirect('manage-media')->with('success','Media updated successfully !');
        }else{
            return redirect('manage-media/edit/'.$request->media_image_id_hidden.'')->with('error','Somthings went wrong please try again !');
        }
        return redirect('manage-media')->with('error','Somthings went wrong please try again !');
             
    }

    public function delete($id){
        $media_image_row = Media::find($id);
        /*Unlink image*/
        $destination_path_thumb = public_path('/media-img/thumb/');
        $destination_path_main_img_ = public_path('/media-img/main-img/');
        $file_old_thumb = $destination_path_thumb.$media_image_row->media_image;
        $file_old_main = $destination_path_main_img_.$media_image_row->media_image;
        unlink($file_old_thumb);
        unlink($file_old_main);
        /*Unlink image*/
        $media_image_row->delete();
        return redirect('manage-media')->with('success','Media deleted successfully !');
    }
}
