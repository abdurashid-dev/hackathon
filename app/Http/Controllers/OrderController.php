<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
    }
}
