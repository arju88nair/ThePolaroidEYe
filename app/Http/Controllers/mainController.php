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
}