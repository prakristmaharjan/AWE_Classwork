<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return "Test Page Loaded";
    }

    public function testing(){
        return "Testing function message";
    }
}
