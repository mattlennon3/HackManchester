<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Template;

class ViewChallengeController extends Controller
{
    public function show(){

    	return view('view-challenge');
    }

    public function returnResults(Request $request){

    	//$request[0] = 12;
    	return Template::all();

    	//$result = App\Template::join('Challenge', 'Template.ID', '=', 'Challenge.TemplateID')
    		//->where('Template.Title', 'LIKE', '%'.$request.'%')->get();
    		//return $result;

    	//return $request[0];



    	
    	//$result = App\Template::join('Challenge', 'Template.ID', '=', 'Challenge.TemplateID')
    	//	->where('Template.Title', 'LIKE', '%'.$title.'%')->get();
    	//	return $result;

    }
}
