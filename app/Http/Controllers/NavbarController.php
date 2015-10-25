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
        
        if($request['register'] != 0 and !isset($_SESSION['user'])){
            //checks the passwords match
            $match = false;
            if($request['password'] == $request['passwordConfirm']){
                $match = true;
            }
            
            if($match == true){
                //creates user
                $user = new User;
                $user->create(array('Email'=> $request['email'], 'Name' => $request['name'], 'Password' => $request['password']));

                //logs user straight in
                $result = User::select("ID","Name")->whereRaw('Email="'.$request['email'].'" and password="'.$request['password'].'"')->get();
                if( !empty( $result ) )
                {
                    foreach($result as $i){
                        $_SESSION['user'] = $i->ID;
                        $_SESSION['name'] = $i->Name;
                    }
                }
            } else {
                $_SESSION['error']=1; 
            }
        }
        
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