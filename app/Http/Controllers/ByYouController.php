<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Challenge;

class ByYouController extends Controller
{
	public function show(){

    	return view('by-you');
    }

    public function getByYou(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    	$result = Challenge::join('ChallengedUser','Challenge.ID','=','ChallengedUser.ChallengeID')
    							->join('Template', 'Challenge.TemplateID', '=', 'Template.ID')
    							->join('User', 'ChallengedUser.UserID', '=', 'User.ID')
    							->select('Template.Title','Template.Description','Template.Category','Challenge.BountyAmount','Challenge.Paid', 'Challenge.ID' ,'ChallengedUser.Status','ChallengedUser.ProofDescription','ChallengedUser.ProofLink', 'User.Name')
    							->where('Challenge.ChallengerID', '=', $_SESSION['user']);
    	return $result->get();
    }

}
