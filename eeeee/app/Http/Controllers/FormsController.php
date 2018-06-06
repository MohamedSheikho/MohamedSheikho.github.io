<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormsController extends Controller
{
    //

    public function addForums(){
        return view('Forums.addForums');
    }
    public function Cultural_Forum(){
        return view('Forums.Cultural_Forum');
    }
    public function Scientific_Forum(){
        return view('Forums.Scientific_Forum');
    }
    public function Economic_Forum(){
        return view('Forums.Economic_Forum');
    }
    public function Sports_Forum(){
        return view('Forums.Sports_Forum');
    }
}
