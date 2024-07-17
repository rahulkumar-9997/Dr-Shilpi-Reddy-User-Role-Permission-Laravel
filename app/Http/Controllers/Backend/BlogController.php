<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogImages;
use Image;
use Auth;
use DB;
class BlogController extends Controller
{
    public function index(){
        $data['blog_list'] = Blog::orderBy('id','DESC')->get();        
        return view('backend.manage-blog.index' , compact('data'));
    }

    public function showBlogForm(){
        return view('backend.manage-blog.add');
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        $this->validate($request, [
            'blog_title' => 'required',
            'blog_image' => 'required',
            'blog_description' => 'required',
            
        ]);
        $input['title'] = $request->input('blog_title');
        $input['blog_description'] = $request->input('blog_description');
        $input['user_id'] = $user_id;

        $add_new_blog_row = Blog::create($input);
        if ($add_new_blog_row){
            if ($request->hasFile('blog_image')){
                $files = $request->file('blog_image');
                foreach ($files as $file) {
                    $image = $file;
                    $filenameWithExt = $image->getClientOriginalName();  
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $image->getClientOriginalExtension();
                    $image_file_name = $filename.'_'.time().'.'.$extension;
    
                    $destinationPath = public_path('/blog-img/thumb');
                    $img = Image::make($image->getRealPath());
                    $img->resize(300, 200, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath.'/'.$image_file_name);
            
                    $destinationPath = public_path('blog-img/main-img');
    
                    $image->move($destinationPath, $image_file_name);
                    $blog_image_input['blog_image'] = $image_file_name;
                    $blog_image_input['blog_id'] = $add_new_blog_row->id;
                    
                    $image_upload = BlogImages::create($blog_image_input);
                }
                if ($image_upload){
                    return redirect('manage-blog')->with('success','Blog added successfully');
                }else{
                    return redirect()->back()->with('error','Somthings went wrong please try again !.');
                }
            }
        }
        return redirect()->back()->with('error','Somthings went wrong please try again !');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('backend.manage-blog.edit' , compact('blog'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'blog_title' => 'required',
            'blog_description' => 'required',
                        
        ]);
       
        $blog_row = Blog::find($request->blog_id_hidden);
        $input['title'] = $request->input('blog_title');
        $input['blog_description'] = $request->input('blog_description');
        $update_blog_row = $blog_row->update($input);

        if ($request->hasFile('blog_image')){
            $files = $request->file('blog_image');
            foreach ($files as $file) {
                $image = $file;
                $filenameWithExt = $image->getClientOriginalName();  
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $image_file_name = $filename.'_'.time().'.'.$extension;

                $destinationPath = public_path('/blog-img/thumb');
                $img = Image::make($image->getRealPath());
                $img->resize(300, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$image_file_name);
                $destinationPath = public_path('blog-img/main-img');
                $image->move($destinationPath, $image_file_name);
                $blog_image_input['blog_image'] = $image_file_name;
                $blog_image_input['blog_id'] =$request->blog_id_hidden;
                $create_new_blog_image = BlogImages::create($blog_image_input);
            }
        }
        if ($update_blog_row){
            return redirect('manage-blog')->with('success','Blog updated successfully');
        }else{
            return redirect()->back()->with('error','Somthings went wrong please try again !.');
        }
            
    }

    public function delete($id){
        $blog_row = Blog::find($id);
        $blog_image_row = BlogImages::where('blog_id',$blog_row->id)->get();;
        if(count($blog_image_row)>0){
            return redirect()->back()->with('error','Please delete first (blog multiple images) !.');
        }else{
            $blog_row->delete();
            return redirect('manage-blog')->with('success','Blog deleted successfully !');
        }
    }

    public function deleteMultipleImage($multiple_image_id, $blog_id){
        $blog_image = BlogImages::find($multiple_image_id);
        /*Unlink image*/
        $destination_path_thumb = public_path('/blog-img/thumb/');
        $destination_path_main_img_ = public_path('/blog-img/main-img/');
        $file_old_thumb = $destination_path_thumb.$blog_image->blog_image;
        $file_old_main = $destination_path_main_img_.$blog_image->blog_image;
        unlink($file_old_thumb);
        unlink($file_old_main);
        /*Unlink image*/
        $blog_image->delete();
        return redirect('manage-blog/edit/'.$blog_id.'')->with('success','Blog images deleted successfully !');
    }
}
