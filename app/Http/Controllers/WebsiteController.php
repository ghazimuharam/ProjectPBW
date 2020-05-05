<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
class WebsiteController extends Controller
{
    public function index(){
        $website = Website::first();
        return view('welcome', ['website' => $website]);
    }
}
