<?php

namespace App\Http\Controllers;
use App\Models\image;
use Illuminate\Http\Request;
use App\Http\Requests;

class mainController extends Controller
{


    public function index(Request $request)
    {
        return image::index($request->all());
    }

    public function test(Request $request)
    {
        return image::test($request->all());
    }


    public function db(Request $request)
    {
        return image::db($request->all());
    }
}