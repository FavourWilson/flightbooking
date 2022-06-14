<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
class FlightController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }

    public function destination()
    {
        return view('destination');
    }
    public function booking()
    {
        return view('booking');
    }
    public function book(Request $request)
    {
        
        $data = new Booking();
        $data->current = $request->current;
        $data->destination = $request->dest;
        $data->leaving = $request->depart;
        $data->returning = $request->returning;
        $data->noofadult = $request->noofadult;
        $data->noofchildren = $request->noofchildren;
        $data->adultcost = $request->adultcost;
        $data->childrencost = $request->childrencost;
        $data->typeofclass = $request->class;
        $data->typeoftrip = $request->tripoftype;
        $total = ($request->noofadult * 150) + ($request->noofchildren * 50);
        $data->cost = $total;
        $data->save();

       
        
        return back();
       
        
        
    }
    public function cost(Request $request)
    {
        $id = $request->id;
        $data = Booking::where('id','=',$id)->first();
        return view('cost')->with(array('data'=> $data));
    }
    public function gallery()
    {
        return view('gallery');
    }

    public function terms()
    {
        return view('terms');
    }
    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

}
