<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Header;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Ourteam;
use App\Models\Services;
use App\Models\Portfolio;
use App\Models\Mydocument;
use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use App\Models\Objective;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Cache\RateLimiting\Limit;
use App\Models\Activity;

class FrontendController extends Controller
{
    public function index(){
        $about = About::all();
        $header = Header::all();
        $objectives = Objective::where('status','0')->limit(3)->get();
        $services = Services::where('status','0')->limit(3)->get();
        $ourteam = Ourteam::where('status','0')->limit(3)->get();
        $portfolio = Portfolio::where('status','0')->get();
        $message = Message::where('status','0')->get();
        $activity = Activity::where('status','0')->get();

        return view('frontend.index')
        ->with('about',$about)
        ->with('header',$header)
        ->with('objectives',$objectives)
        ->with('services', $services)
        ->with('ourteam',$ourteam)
        ->with('portfolio',$portfolio)
        ->with('message',$message)
        ->with('activity',$activity)
        ;
    }

    public function about(){
        $about = About::all();
        $objectives = Objective::where('status','0')->get();
        $ourteam = Ourteam::all();
        $services = Services::where('status','0')->get();
        $message = Message::where('status','0')->get();

        return view('frontend.about')->with('about',$about)
        ->with('objectives', $objectives)
        ->with('ourteam',$ourteam)
        ->with('services',$services)
        ->with('message',$message)
        ;
    }

    public function team(){
        $team = Ourteam::where('status','0')->get();
        return view('frontend.team')->with('team',$team);
    }
    public function message(){
        $message = Message::where('status','0')->get();
        return view('frontend.about-chairman')->with('message',$message);
    }

    public function service(){
        $objectives = Objective::where('status','0')->get(); ;
        return view('frontend.services')->with('objectives',$objectives);
    }
    public function objectives(){
        $objectives = Objective::where('status','0')->get();
        return view('frontend.objectives')->with('objectives',$objectives);
    }

    public function gallery(){
        $activity = Activity::where('status','0')->get();
        return view('frontend.gallery')->with('activity',$activity);
    }

    public function contact(){
        return view('frontend.contact');
    }


    public function mailSending(Request $request){
        $request->validate([
            'name'          =>'required|max:191',
            'email'         =>'required|email',
            'phone'         =>'required|min:7|max:20',
            'message'       =>'required|max:301'
        ]);
        $contact_data =[
            'name'          =>$request->input('name'),
            'email'         =>$request->input('email'),
            'phone'         =>$request->input('phone'),
            'message'       =>$request->input('message')

        ];

        Mail::to('admin@greenlandlaw.com.np')->send(new ContactMailable($contact_data));

        $contact =new Contact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->phone=$request->input('phone');
        $contact->message=$request->input('message');

        $contact->save();
        return redirect()->back()->with('status','Thank you for contact us. We will get back to soon.!');
    }

    public function myDocument(){
        $user_id = Auth::user()->id;
        $mydocument = Mydocument::with('user')->where('user_id',$user_id)->where('status','0')->paginate(5);
        return view('frontend.my-document')
        ->with('mydocument',$mydocument);
    }
}
