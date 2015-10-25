<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    //
    public function show(){
    	return view('home');

    }
    public function saveUser(Request $request){


   		$id = $request['id'];
    	$name = $request['name'];
    //	$friend = $request['friends'][0]['name'];
    //		$return_array  = array();
    //	for($i=0; $i < sizeof($request['friends']); $i++) {
      //  	//$return_array[i] = $request['friends'][i]['name'];

        //	array_push($return_array, $request['friends'][$i]['name']);
    	//}
    	
		//$userExist = 'hi';
		//$userExist = User::where(array('FB', '=', $id))->get();
		//return $userExist;
		//if($userExist != null){
		//}else{
    	//return $name;
		$user = new User;
		$user->create(array('Name' => $name, 'FB' => $id));
		//}

    }


}
