<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Challenge;
use App\ChallengedUser;

class DashboardController extends Controller
{
    public function show()
    {
    	if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

    	$_SESSION['user'] = 1;
    	//$user = User::all();
    
    	if($_SESSION['logged'] === 1){
    	$challenges = User::where('id', array(2))->get();
    	$createChallenges = Challenge::where('ChallengerID', array($_SESSION['user']))->get();
    	$gotChallenged = ChallengedUser::where('UserID', array($_SESSION['user']))->get();
    	$amount = 0;
    	//return $createChallenges;
    	foreach ($createChallenges as $chal)
		{
    		$value = $chal['BountyAmount'];
    		$amount += $value;
		}
		//return $amount;
    	return view('dashboard.dashboard')
    	->with('challenges', $challenges)
    	->with('created', sizeof($createChallenges))
    	->with('challenged', sizeof($gotChallenged))
    	->with('total', $amount);
    }
    }

}
