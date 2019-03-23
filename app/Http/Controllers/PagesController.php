<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
    public function index(){
        if (View::exists('pages.index')){

            //return view('pages.index',['text'=>'<b>lara</b>']);

            return view('pages.index') 
            ->with('text','<b>lara</b>')
            ->with('name','Ahmed')
            ->with('d',['location'=>'NZ','planet'=>'earth']);
        }else{
            return 'no view available';
        }
        
    }

    public function profile(){
        $email=Auth::user()->email;
        return view('pages.profile')->with(['email'=>$email,'DOB'=> Auth::user()->DOB]);
    }

  
    public function blade(){
        $gender='male';
        $text='hello there';
        return view('blade.bladetest')->with(['gender'=>$gender,'text'=>$text]);
    }
}
