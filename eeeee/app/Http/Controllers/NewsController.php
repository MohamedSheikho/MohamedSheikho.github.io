<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    public function ServiceNews(){
        return view('News.ServicesNews');
    }
    public function JobsChances(){
        return view('News.JobsChances');
    }
    public function gold(){
        return view('News.gold');
    }
    public function Tenders(){
        return view('News.Tenders');
    }
    public function Meteorological(){
        return view('News.Metorelogical');
    }
}
