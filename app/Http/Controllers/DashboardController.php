<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function show()
    {
    	//$user = User::all();
    	$challenges = User::where('id', array(2))->get();
    	return view('dashboard.dashboard')
    	->with('challenges', $challenges);
    
    }

}
