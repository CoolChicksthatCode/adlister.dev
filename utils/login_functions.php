<?php 
require_once 'Auth.php';
require_once 'Input.php';


//Is the user logged in? Auth::check returns boolean. If user logged in redirects to user account page 
function userLoggedIn()
{
	if(Auth::check()) {
		// Log::info('');
		header('Location: /account');
	}
}

function userNotLoggedIn()
{
	if(!Auth::check()){
		header('Location: /login');
	}
}

function attemptLogin()
{
	$username = Input::get('email_user');
	$password = Input::get('password');
	$userId = Auth::id(); 

	if(!empty($_POST) && Auth::attempt($username, $password)){

		header('Location: /');
		die();


	}

}












 ?>