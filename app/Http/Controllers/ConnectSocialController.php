<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConnectSocialController extends Controller
{
    $facebook = new Facebook(Config::get('facebook'));
}
