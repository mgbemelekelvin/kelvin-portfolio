<?php

namespace App\Http\Controllers;

use App\Mail\contactUs;
use App\Models\Feedback;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subscriber;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Welcome to my portfolio';
        $nav = 'home';
        $services = Service::orderBy('created_at')->get();
        $portfolios = Portfolio::orderBy('created_at')->inRandomOrder()->get();
        $testimonies = Testimony::inRandomOrder()->get();
        return view('pages.index', compact('title','nav','services','portfolios','testimonies'));
    }

    public function services()
    {
        $title = 'My Services';
        $nav = 'services';
        $services = Service::all();
        return view('pages.services', compact('title','nav','services'));
    }

    public function service($service_meta_name)
    {
        $nav = 'services';
        $service = Service::where('meta_name', $service_meta_name)->first();
        if(!$service){
            return redirect(route('PageNotFound'));
        }
        $title = $service->name;
        return view('pages.service', compact('title','nav','service'));
    }

    public function portfolios()
    {
        $title = 'My Portfolio';
        $nav = 'portfolios';
        $portfolios = Portfolio::inRandomOrder()->get();
        return view('pages.portfolios', compact('title','nav','portfolios'));
    }

    public function portfolio($portfolio_meta_name)
    {
        $nav = 'portfolios';
        $portfolio = Portfolio::where('meta_name', $portfolio_meta_name)->first();
        if(!$portfolio){
            return redirect(route('PageNotFound'));
        }
        $title = $portfolio->name;
        return view('pages.portfolio', compact('title','nav','portfolio'));
    }

    public function contact()
    {
        $title = 'Contact';
        $nav = 'contact';
        return view('pages.contact', compact('title','nav'));
    }

    public function contact_us_post(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'subject' => 'required',
            'message' => 'required',
            'phone' => 'required|regex:/^\+?[0-9]{1,}$/',
            'email' => 'required|email',
        ]);
        $new = new Feedback();
        $new->name = $request->name;
        $new->email = $request->email;
        $new->phone = $request->phone;
        $new->subject = $request->subject;
        $new->message = $request->message;
        $new->read = false;
        $new->status = true;
        $new->save();
        return back()->with('success', 'Your feedback is sent Successfully. I would get back to you soon.');
    }

    public function PageNotFound()
    {
        $title = '404';
        $nav = '404';
        return view('pages.404', compact('title','nav'));
    }

}
