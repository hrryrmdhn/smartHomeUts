<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index(){
        $devices = Device::all();
        return view('index', compact('devices'));
    }

    public function toggle($id){
        $device = Device::find($id);
        $device->state = !$device->state;
        $device->save();

        return response()->json(['state' => $device->state]);
    }
}
