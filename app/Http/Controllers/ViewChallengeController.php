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

    	$result = Template::join('User', 'Template.CreatorID','=', 'User.ID')->
    		select('Title', 'Description', 'Category', 'User.Name');
    		
    	if($request['title']== NULL){
    		$result = $result->where('Template.Title', 'LIKE', '%'.$request['title'].'%');
    	}
    	if($request['category']== NULL){
    		$result = $result->where('Template.Category','=', $request['category']);
    	}


    	return $result->get();
    							//->join('User', 'Template.CreatorID', 'User.ID')->get();

    	//$result = App\Template::join('Challenge', 'Template.ID', '=', 'Challenge.TemplateID')
    		//->where('Template.Title', 'LIKE', '%'.$request.'%')->get();
    		//return $result;

    	//return $request[0];


    }
}
