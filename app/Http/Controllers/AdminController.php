<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function dashboard()
    {
        $booking = Booking::all();
        $user = User::all();
        return view('admin/dashboard')->with(array('booking'=> $booking, 'user' => $user));
    }

    public function create()

    {
        return view('admin/create-schedule');
    }

    public function schedule()
    {
        $schedule = Schedule::all();
        return view('admin/schedule')->with(['schedule' => $schedule]);
    }

    public function store(Request $request)
    {
        $data = new Schedule();
        $data->country = $request->country;
        $data->travelDate = $request->travelDate;
        $data->travelTime = $request->travelTime;
        $data->ArrivalDate = $request->arrivalDate;
        $data->Arrivaltime = $request->arrivalTime;
        $data->availableFlight = $request->avaliableFlight;
        $data->cost = $request->cost;
        $data->noofstops = $request->stops;
        $data->save();  

        if($data->save()){
            return redirect('admin/schedule');
        }else{
            return back()->with("Not Successful");
        }
    }

    public function editSchedule($id)
    {
        $data = Schedule::where('id', '=', $id)->first();
        return view('admin/edit-schedule')->with(['data'=> $data]);
    }

    

    public function edit($id, Request $request)
    {
        $data = Schedule::where('id','=',$id)->first();
        $data->country = $request->country;
        $data->travelDate = $request->travelDate;
        $data->travelTime = $request->travelTime;
        $data->ArrivalDate = $request->arrivalDate;
        $data->Arrivaltime = $request->arrivalTime;
        $data->availableFlight = $request->avaliableFlight;
        $data->cost = $request->cost;
        $data->noofstops = $request->stops;
        $data->save();

        if($data->save()){
            return redirect('admin/schedule');
        }else{
            return back()->with("Not Successful");
        }
    }

    public function delete($id)
    {
       $data = Schedule::where('id', '=', $id)->delete();
      
       return back(); 
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Admin::where($credentials)) {
            return redirect('admin/dashboard');
        } else {
            return back()->with('message', 'Invalid credentials');
        }
    }

    public function signin()
    {
        return view('admin/login');
    }

    public function booking()
    {
        $data = Booking::all();
        return view('admin/booking')->with(['data'=>$data]);
    }

    public function user()
    {
        $data = User::all();
        return view('admin/user')->with(['data' => $data]);
    }

    
    

}
