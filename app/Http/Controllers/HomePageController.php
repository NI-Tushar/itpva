<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function index(Request $request)
    {
        return view("Pages.home");
    } 

}
