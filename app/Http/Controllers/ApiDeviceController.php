<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class ApiDeviceController extends Controller
{
    public function index(){
        return response()->json(Device::select('id', 'label', 'state')->get());
    }
}
