<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        if(Auth::check()){
            $data = new Booking();
            $data->email = $request->email;
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
            $data->userid = Auth::id();
            $total = ($request->noofadult * 150) + ($request->noofchildren * 50);
            $data->cost = $total;
            $data->save();
        }else{
            $data = new Booking();
            $data->email = $request->email;
            $data->current = $request->current;
            $data->destination = $request->dest;
            $data->leaving = $request->depart;
            $data->returning = $request->returning;
            $data->noofadult = $request->noofadult;
            $data->noofchildren = $request->noofchildren;
            $data->adultcost = 200;
            $data->childrencost = 100;
            $data->typeofclass = $request->class;
            $data->typeoftrip = $request->tripoftype;
            $data->ip = $request->ip();
            $data->cost =300;
           
            
            $data->save();
        }
       

       
        
        return redirect('cost');
       
        
        
    }

    public function cost(Request $request)
    {
        $sch = Schedule::all();
        $ip = $request->ip();
        if(Auth::check()){
            $data = Booking::where('userid','=',$request->id)->first();
            if($data !=null){
                return view('cost')->with(array('data'=> $data, 'sch'=>$sch));
            }else{
                return redirect()->back()->with('success','No records found');
            }
            
        }else{
            $data = Booking::where('ip','=',$ip)->first();
            if($data !=null){
                return view('cost')->with(array('data'=> $data, 'sch'=>$sch));
            }else{
                return redirect()->back()->with('success','No records found');
            }
        }
        
        
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

    public function available()
    {
        $sch = Schedule::all();
        if($sch !=null){
            return view('available-flight')->with(['sch'=>$sch]);
        }else{
            return view('available-flight')->with("No Flights Available");
        }
    }

    public function signin()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('welcome');
        } else {
            return back()->with('message', 'Invalid credentials');
        }
    }
    public function signup()
    {
        return view('signup');
    }
    public function register(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country'=> $request->country,
            'password' => Hash::make($request->password),
        ]);

        return redirect('signin');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('welcome');
    }

}
