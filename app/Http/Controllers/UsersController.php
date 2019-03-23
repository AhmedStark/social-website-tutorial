<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Validator;

class UsersController extends Controller
{
    public function index(){
        $users=User::paginate(10);
        return view('admin.users.index',compact('users'));
    }
    

    public function create(){
        return view ('admin.users.create');
    }

    public function store(Request $r){
       
        
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'DOB' => 'required',
            'password' => 'required|min:8',
            
        ];
        
        $validatedData = Validator::make($r->all(),$rules);
        if($validatedData->fails()){
            return redirect('/user/create');
        }


        User::create($r->all());
        
    }

    public function login(){
        return view ('admin.users.login');
    }
    public function loginCheck(Request $r){
        
        $rules = [
            
            'email' => 'required|email',
            
            'password' => 'required|min:8',
            
        ];
        $validatedData = Validator::make($r->all(),$rules);
        if($validatedData->fails()){
            return 1;    
        }
        else{

            $userdata = array(
                'email'     => $r->email,
                'password'  => $r->password
            );

            if (Auth::attempt($userdata)) {
                echo 'btb is a cunt';
            }
            else{
                return 2;
            }



        }

    }

    
}
