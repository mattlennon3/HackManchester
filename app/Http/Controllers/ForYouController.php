<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class ForYouController extends Controller
{
    //
    public function getForYou(){
    	if (session_status() == PHP_SESSION_NONE) {
    	    session_start();
    	}
        $_SESSION['user'] = 2;
    	$result = User::join('ChallengedUser', 'User.ID', '=', 'ChallengedUser.UserID')
    					->join('Challenge', 'ChallengedUser.ChallengeID', '=','Challenge.ID')
    					->join('Template', 'Challenge.TemplateID', '=', 'Template.ID')
    					->where('User.ID','=',$_SESSION['user']);
    	return $result->get();
    }
}
