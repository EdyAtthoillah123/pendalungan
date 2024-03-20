<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function iot()
    {
        return view('service_iot');
    }

    public function multimedia()
    {
        return view('service_multimedia');
    }

    public function software(Request $request)
    {
        return view('service_software');
    }
}
