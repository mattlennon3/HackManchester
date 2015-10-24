<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Template;

class CreateChallengeController extends Controller
{
	/*public function show(){
		return view('header.create-challenge');
	}*/

	public function getChallenges(Request $request){
		return Template::getChallengesByCat($request['category'])->get();
	}
}
