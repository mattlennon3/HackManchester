<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewChallengeController extends Controller
{
    public function show(){

    	return view('view-challenge');
    }

    public function returnResults(Request $request){

    	return $request['num'];
    	
    	//$result = App\Template::join('Challenge', 'Template.ID', '=', 'Challenge.TemplateID')
    	//	->where('Template.Title', 'LIKE', '%'.$title.'%')->get();
    	//	return $result;

    }
}
