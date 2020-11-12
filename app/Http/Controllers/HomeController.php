<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->where('id', 1)->first();   
        
        $cms_home1 = DB::table('pages')->where('id', 1)->first();
        $cms_about1=DB::table('pages')->where('id', 6)->first();

        $products = DB::table('products')->get()->take(10);

        return view('welcome', compact('banner', 'cms_about1'));
    }

    public function about()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 1)->first();
        $cms_about1=DB::table('pages')->where('id', 6)->first();
        $cms_about2=DB::table('pages')->where('id', 7)->first();
        return view('about', compact('inner_banner', 'cms_about1', 'cms_about2'));
    }

    public function account()
    { 
        return view('account');
    }

    public function avail()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 11)->first();
        return view('avail', compact('inner_banner'));
    }

    public function contact()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 2)->first();
        $cms_contact1=DB::table('pages')->where('id', 11)->first();

        return view('contact', compact('inner_banner', 'cms_contact1'));
    }

    public function privacy()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 3)->first();
        $cms_privacy1=DB::table('pages')->where('id', 12)->first();
        $privacy_policies=DB::table('privacy_policies')->get();
        
        return view('privacy', compact('inner_banner', 'cms_privacy1', 'privacy_policies'));
    }

    public function property()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 4)->first();
        return view('property', compact('inner_banner'));
    }

    public function propertyDetail($id)
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 5)->first();
        $property_detail=DB::table('properties')->where('id', $id)->first();

        return view('property-detail', compact('inner_banner', 'property_detail'));
    }

    public function tenant_1()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 6)->first();
        $cms_tenant=DB::table('pages')->where('id', 16)->first();

        return view('tenant_1', compact('inner_banner', 'cms_tenant'));
    }

    public function tenant_2()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 7)->first();
        $cms_tenant=DB::table('pages')->where('id', 16)->first();

        return view('tenant_2', compact('inner_banner', 'cms_tenant'));
    }

    public function tenant_3()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 8)->first();
        $cms_tenant=DB::table('pages')->where('id', 16)->first();

        return view('tenant_3', compact('inner_banner', 'cms_tenant'));
    }

    public function tenant_4()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 9)->first();
        $cms_tenant=DB::table('pages')->where('id', 16)->first();

        return view('tenant_4', compact('inner_banner', 'cms_tenant'));
    }

    public function terms()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 10)->first();
        $cms_terms=DB::table('pages')->where('id', 13)->first();

        return view('terms', compact('inner_banner', 'cms_terms'));
    }

    public function vacationProperty($id)
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 12)->first();
        $location=DB::table('locations')->where('id', $id)->first();
        $properties=DB::table('properties')->where('location', $id)->get();

        return view('vacation_property', compact('inner_banner', 'location', 'properties'));
    }

    public function vacationRental()
    { 
        $inner_banner = DB::table('inner_banners')->where('id', 13)->first();
        $cms_rental1=DB::table('pages')->where('id', 14)->first();
        $cms_rental2=DB::table('pages')->where('id', 15)->first();
        $locations=DB::table('locations')->get();
        return view('vacation_rental', compact('inner_banner', 'cms_rental1', 'cms_rental2', 'locations'));
    }
    

    public function contactUsSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->name;
        $inquiry->inquiries_email = $request->email;
        $inquiry->subject = $request->subject;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $this->validate($request, [
            'email' => 'required'
        ]);

        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for subscribing. We will get back to you asap!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
   
}
