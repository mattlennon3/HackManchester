<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Charity;

class SelectCharityController extends Controller
{
    //
    public function getCharities(){
    	return Charity::all();
    }
}
