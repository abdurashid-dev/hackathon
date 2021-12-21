<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = new Order();
        $data->complaint = $request->complaint;
        $data->phone = $request->phone;
        $data->date = $request->date;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->condition = $request->condition;
        $data->save();
        return response()->json([
           'status'=>200,
           'message'=>'Success',
           'data'=> $data
        ]);

    }

    public function update(Request $request)
    {
        $order = Order::findOrFail($request->id);
        $doctor = Doctor::with('hospital')->findOrFail($request->doctor_id);
        $order->doctor_id = $doctor->id;
        $order->hospital_id = $doctor->hospital->id;
        $order->arrived_at = $request->arrived_at;
        $order->finished_at = $request->finished_at;
        $order->save();
        return response()->json([
            'status'=>200,
            'message'=>'Success'
        ]);
    }
}
