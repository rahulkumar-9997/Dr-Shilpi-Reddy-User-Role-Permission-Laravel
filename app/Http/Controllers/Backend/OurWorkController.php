<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OurWork;
use App\Models\OurWorkImage;
use Image;
use Illuminate\Support\Facades\Auth;
use DB;
class OurWorkController extends Controller
{
    
    public function index(){
        //DB::enableQueryLog();
        $data['our_work_list'] = OurWork::orderBy('id','DESC')->get();        
        // $data['our_work_list'] = OurWork::join('our_works_image', 'our_works.id', '=', 'our_works_image.our_work_id')
        
        // ->get(['our_works.heading_name', 'our_works.slug', 'our_works.our_work_content', 'our_works_image.id', 'our_works_image.our_work_image']); 
         //dd($data);
        return view('backend.our-work.index' , compact('data'));
    }

    public function showOurWorkForm(){
        return view('backend.our-work.add');
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        // $product = OurWork::create([
        //     "heading_name" => "Laravel 8 Image Upload",
        //     "our_work_content" => "Laravel 8 Image Upload",
        //     "user_id" => $user_id,
        // ]);
        // dd($product);
        $this->validate($request, [
            'our_work_heading_name' => 'required',
            'work_content' => 'required',
            'work_multiple_image' => 'required',
            
        ]);
        $input['heading_name'] = $request->input('our_work_heading_name');
        $input['our_work_content'] = $request->input('work_content');
        $input['user_id'] = $user_id;

        $our_work_add = OurWork::create($input);
        if ($our_work_add){
            if ($request->hasFile('work_multiple_image')){
                $files = $request->file('work_multiple_image');
                foreach ($files as $file) {
                    $image = $file;
                    $filenameWithExt = $image->getClientOriginalName();  
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $image->getClientOriginalExtension();
                    $image_file_name = $filename.'_'.time().'.'.$extension;
    
                    $destinationPath = public_path('/our-work/thumb');
                    $img = Image::make($image->getRealPath());
                    $img->resize(300, 200, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath.'/'.$image_file_name);
            
                    $destinationPath = public_path('our-work/main-img');
    
                    $image->move($destinationPath, $image_file_name);
                    $work_img_input['our_work_image'] = $image_file_name;
                    $work_img_input['our_work_id'] = $our_work_add->id;
                    
                    $image_upload = OurWorkImage::create($work_img_input);
                }
                if ($image_upload){
                    return redirect('manage-our-work')->with('success','Our work data save successfully');
                }else{
                    return redirect()->back()->with('error','Somthings went wrong please try again !.');
                }
            }
        }
        return redirect()->back()->with('error','Somthings went wrong please try again !');
    }

    public function edit($id){
        $our_work = OurWork::find($id);
        return view('backend.our-work.edit' , compact('our_work'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'our_work_heading_name' => 'required',
            'work_content' => 'required',
                        
        ]);
       
        $our_work_row = OurWork::find($request->our_work_hidden_id);
        $input['heading_name'] = $request->input('our_work_heading_name');
        $input['our_work_content'] = $request->input('work_content');
        $our_work_update = $our_work_row->update($input);

        if ($request->hasFile('work_multiple_image')){
            $files = $request->file('work_multiple_image');
            foreach ($files as $file) {
                $image = $file;
                $filenameWithExt = $image->getClientOriginalName();  
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $image_file_name = $filename.'_'.time().'.'.$extension;

                $destinationPath = public_path('/our-work/thumb');
                $img = Image::make($image->getRealPath());
                $img->resize(300, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$image_file_name);
                $destinationPath = public_path('our-work/main-img');
                $image->move($destinationPath, $image_file_name);
                $work_img_input['our_work_image'] = $image_file_name;
                $work_img_input['our_work_id'] = $request->our_work_hidden_id;
                $image_upload = OurWorkImage::create($work_img_input);
            }
        }
        if ($our_work_update){
            return redirect('manage-our-work')->with('success','Our work data updated successfully');
        }else{
            return redirect()->back()->with('error','Somthings went wrong please try again !.');
        }
             
    }

    public function delete($id){
        $our_work_row = OurWork::find($id);
        $our_work_image_row = OurWorkImage::where('our_work_id',$our_work_row->id)->get();;
        if(count($our_work_image_row)>0){
            return redirect()->back()->with('error','Please delete first (our work multiple images) !.');
        }else{
            $our_work_row->delete();
            return redirect('manage-our-work')->with('success','Our work deleted successfully !');
        }
    }

    public function deleteMultipleImage($multiple_image_id, $our_work_id){
        $our_work_image = OurWorkImage::find($multiple_image_id);
        /*Unlink image*/
        $destination_path_thumb = public_path('/our-work/thumb/');
        $destination_path_main_img_ = public_path('/our-work/main-img/');
        $file_old_thumb = $destination_path_thumb.$our_work_image->our_work_image;
        $file_old_main = $destination_path_main_img_.$our_work_image->our_work_image;
        unlink($file_old_thumb);
        unlink($file_old_main);
        /*Unlink image*/
        $our_work_image->delete();
        return redirect('manage-our-work/edit/'.$our_work_id.'')->with('success','Our work images deleted successfully !');
    }
}






    

