<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function optimize()
    {
        Artisan::call('optimize');
        return back();
    }

    public function hospital()
    {
        return view('admin.hospital.hospital');
    }
    public function register(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'latitude' => ['required', 'string', 'max:255'],
            'longitude' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data['role'] = 'hospital';
        User::create($data);
        return redirect()->route('admin.hospital.index')->with('message', 'Successfully added');
    }

    public function hospitalTable()
    {
        $hospitals = User::where('role','hospital')->get();
        return view('admin.hospital.index', compact('hospitals'));
    }

    public function hospitalShow($id)
    {
        $hospital = User::findOrFail($id);
        return view('admin.hospital.show', compact('hospital'));
    }
    public function hospitalEdit($id)
    {
        $hospital = User::findOrFail($id);
        return view('admin.hospital.edit', compact('hospital'));
    }
    public function hospitalDestroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('message', 'Successfully deleted');
    }
}
