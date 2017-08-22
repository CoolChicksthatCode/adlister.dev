<?php 
require_once 'Auth.php';
require_once 'Input.php';
require_once '../models/User.php';


//Is the user logged in? Auth::check returns boolean. If user logged in redirects to user account page 
function userLoggedIn()
{
	if(Auth::check()) {
		// Log::info('');
		header('Location: /users/account?id=' . Auth::id() );
		die();
	}
}

function userNotLoggedIn()
{
	if(!Auth::check()){
		header('Location: /login');
		die();
	}
}

function attemptLogin()
{
	$username = Input::get('email_user');
	$password = Input::get('password');
	$userId = Auth::id(); 

	if(!empty($_POST) && Auth::attempt($username, $password)){

		header('Location: /users/account?id=' . Auth::id() );
		die();

	}

}

function logout()
{
	Auth::logout();
	header('Location: /');
	die();
}


function userSignUp()
{
	if(!empty($_POST)){
		$name = Input::get('name');
		$email = Input::get('email');
		$username = Input::get('username');
		$password = Input:: get('password');

		$user = new User();
		$user->name = $name;
		$user->email = $email;
		$user->username = $username;
		$user->password = $password; 
		$user->save();

		Auth::attempt($user->username, Input::get('password')); 

		$_SESSION['SUCCESS_MESSAGE'] = "Account succesfully created!";

		header('Location: /users/account?id=' . $userId );
		die();
	
	}
}

function updateAccountInfo()
{
	$user = Auth::user();

	if(!empty($_POST)){

		$userId = Auth::id();
		Auth::logout();

		$name = Input::get('name');
		$email = Input::get('email');
		$username = Input::get('username');
		$password = Input::get('password');

		$user->name = $name;
		$user->email = $email;
		$user->username = $username;
		$user->password = $password;
		$user->save();

        Auth::attempt($user->username, Input::get('password')); 

		$_SESSION['SUCCESS_MESSAGE'] = "Account succesfully updated!";

		header('Location: /users/account?id=' . $userId );
		die();

	}



}






 ?>