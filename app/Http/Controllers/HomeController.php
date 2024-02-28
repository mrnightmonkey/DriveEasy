<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Reservation;


class HomeController extends Controller
{
    public function reserve($id)  {
        $data = Car::find($id);
        return view ('home.reserve', compact('data'));
    }

    public function addreserve(Request $request, $id)  {
        $request->validate([
            'pickdate' => 'required|date',
            'dropdate'=> 'date|after:pickdate',
        ]);

        $data = new Reservation;
        $data->car_id = $id;
        $data ->name = $request->name;
        $data ->email = $request->email;

        $pickdate = $request->pickdate;
        $dropdate = $request->dropdate;

        $isReserved = Reservation::where('car_id', $id)->where('pickdate', '<=',$dropdate )->where('dropdate', '>=', $pickdate)->exists();
        if ($isReserved) {
            return redirect()->back()->with('message', 'Car Already Reserved Pleased try different date!');
        }
        else{
            $data ->pickdate = $request->pickdate;
            $data ->dropdate = $request->dropdate;
            $data->save();
            return redirect()->back()->with('message', 'Car Reserved Succesfully!');
        }

    }
}
