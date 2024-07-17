<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\FeatureLogo;
use App\Models\Testimonials;
use App\Models\Blog;
use App\Models\OurWork;
use App\Models\Media;
use App\Models\IbuCare;
use Illuminate\Support\Facades\Log;
use App\Mail\EnquiryMail; 
use Exception;

use Auth;
use Session;
use DB;
use Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
class FrontHomeController extends Controller
{
    public function home(){
        $data['testimonials_list'] = Testimonials::select('id', 'name' ,'profile_image', 'testimonials_content')->inRandomOrder()->limit(20)->get();
        $data['feature_logo_list'] = FeatureLogo::orderBy('id','DESC')->get();
        $data['blog_list'] = Blog::select('id', 'title' ,'slug', 'blog_description')->inRandomOrder()->limit(3)->get();
	    return view('frontend.index', compact('data'));
    }
    
    public function aboutUs(){
	    return view('frontend.pages.about-us');
    }
    public function workPage(){
        $data['our_work_list'] = OurWork::orderBy('id','DESC')->get();    
	    return view('frontend.pages.work', compact('data'));
    }

    public function workDetailsPage($slug){
        $our_work = OurWork::where('slug', $slug)->firstOrFail();    
	    return view('frontend.pages.work-details', compact('our_work'));
    }

    public function mediaPage(){
        $data['media_list'] = Media::orderBy('id','DESC')->simplePaginate(50);    
	    return view('frontend.pages.media', compact('data'));
    }
    public function blogPage(){
        $data['blog_list'] = Blog::select('id', 'title' ,'slug', 'blog_description')->get();
	    return view('frontend.pages.blog', compact('data'));
    }
    public function blogDetailsPage($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.blog-details' , compact('blog'));
	    
    }
    public function contactUsPage(){
	    return view('frontend.pages.contact-us');
    }
    public function ourFoundation(){
	    return view('frontend.pages.our-foundation');
    }
    public function ibuCare(){
        $data['ibucare_list'] = IbuCare::orderBy('id','DESC')->get(); 
	    return view('frontend.pages.ibu-care', compact('data'));
    }

    public function ibuCareDetails($slug){
        $data['ibucare_list'] = IbuCare::orderBy('id','DESC')->get();
        $ibucare = IbuCare::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.ibu-care-details' , compact('ibucare', 'data'));
	    
    }

    public function homeEnquirySubmit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|digits:10',
            
        ]);
        
        try {
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile_number' => $request->input('mobile_number'),
                'message' => $request->input('message'),
            ];
            
            Mail::to('drkshilpireddy@gmail.com') // Replace with your recipient email address
                ->send(new EnquiryMail($data));
            Log::info('Email sent successfully to drkshilpireddy@gmail.com');
        } catch (Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }
        if ($request->input('contact_us_page')){
            return redirect('contact-us')->with('success','Enquiry send successfully, Our team contact you shortly.');
        }else{
            return redirect('/#contact-form')->with('success','Enquiry send successfully, Our team contact you shortly.');
        }
    }
    
    
    
}
