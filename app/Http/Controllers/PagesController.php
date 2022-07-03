<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'Welcome to Laravel Blog!!';
        return view('pages.index') ->with ('title', $title);
    }

    public function about(){
        $title= "About Us";
        return view('pages.about')-> with ('title', $title);
    }

    public function services(){
        $data= array(
            'title'=>'Services!!',
            'services' =>['Front-End','Back-End','Full-Stack']
        );
        return view('pages.services')-> with ($data);
    }
    public function chart1(){
        $data= array(
            'title'=>'Services!!',
            'services' =>['Front-End','Back-End','Full-Stack']
        );
        return view('pages.chart1')-> with ($data);
    }
    public function chart2(){
        $data= array(
            'title'=>'Services!!',
            'services' =>['Front-End','Back-End','Full-Stack']
        );
        return view('pages.chart2')-> with ($data);
    }
}
