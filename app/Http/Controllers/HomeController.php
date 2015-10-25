<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Template;
use App\Challenge;
use App\ChallengedUser;

class HomeController extends Controller
{
    private $newUser;

    public function show(){
    	return view('home');
    }
    public function saveUser(Request $request){
 
        $id = $request['id'];
        $name = $request['name'];

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if($_SESSION['logged'] == 1){
            $count = User::where('FB', [$id])->get()->count();
            if($count != 0){
                $currentUser = new User;
                $currentUser = $currentUser->where('id', [$_SESSION['user']])->update(['FB' => $id]);
            }
        }
        else { 
            $user = new User;
            $this->newUser = $user->create(array('Name' => $name, 'FB' => $id));
        }

		
    }

    public function createChallenge(Request $request){

        $userID = -1;
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if($_SESSION['logged'] == 0 || !isset($_SESSION['user'])){
            $userID = $this->newUser['id'];
        }
        else { 
            $userID = $_SESSION['user'];
        }

        $fbUser = new User;
        $fbUser = $fbUser::create(['Name' => $request['Name']]);

        $newTemplate = new Template;
        $newTemplate = $newTemplate->create([
            'Title' => $request['Title'], 
            'Description' => $request['Description'], 
            'Category' => $request['Category'], 
            'CreatorID' => $this->newUser['id'];
        ]);

        $newChallenge = new Challenge;
        $newChallenge = $newChallenge->create([
            'TemplateID'=>$newTemplate['id'], 
            'BountyAmount' => $request['BountyAmount'], 
            'CharityID' => $request['CharityID'],
            'ChallengerID' => $this->newUser['id'];
        ]);

        $newChallengedUser = new ChallengedUser;
        $newChallengedUser = $newChallengedUser->create([
            'ChallengeID' => $newChallenge['id'], 
            'UserID' => $fbUser['id'], 
            'Status' => 0
        ]);

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['user'] = 2;
        return redirect()->to('/dashboard');
    }
}
