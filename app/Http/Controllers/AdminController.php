<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\Reservation;



class AdminController extends Controller
{
    public function index()  {
        if (Auth::id()){
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                $data =Car::all();
                return view('home.index', compact('data'));
            }
            else if ($usertype == 'admin') {
                return view('admin.index');
            }
            else {
                return redirect()->back();
            }
        }
    }

    public function home() {
        $data =Car::all();
        return view ('home.index', compact('data'));
    }

    public function createcars()  {
        $data =Car::all();
        return view ('admin.createcars', compact('data'));
    }

    public function addcars(Request $request) {
        $data = new Car();
        $data->carname = $request->name;
        $data->cardescription = $request->description;
        $data->carprice = $request->price;
        $data->carluggage = $request->luggage;
        $data->cardoor = $request->door;
        $data->carpassenger = $request->passenger;

        $image = $request->images;
        if ($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->images->move('cars',$imagename);
            $data->carimage=$imagename;
        }

        $data->save();
        return redirect()->back();
    }

    public function viewcars()  {
        $data = Car::all();
        return view('admin.viewcars', compact('data'));
    }

    public function reservation() {
        $data = Reservation::all();
        return view('admin.reservation', compact('data'));
    }
}
