<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class NavbarController extends Controller
{
    public function login (Request $request){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        //'.bcrypt($request['password']).'
        $result = User::select("ID","Name")->whereRaw('Email="'.$request['email'].'" and password="'.$request['password'].'"')->get();
        if( !empty( $result ) )
        {
            foreach($result as $i){
                $_SESSION['user'] = $i->ID;
                $_SESSION['name'] = $i->Name;
            }
        }
        
        
        
        $_SESSION['logged'] = 1;
        return view('home');
    }
    
    public function logout (){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        return view('home');
    }
}