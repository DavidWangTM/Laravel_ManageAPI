<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class UserController extends BaseController
{

	public function getlogin(){
		return view('welcome');
	}

	public function login(){

	}

	public function register(){

	}
}
