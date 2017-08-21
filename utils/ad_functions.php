<?php

require_once "../models/Model.php";
require_once "../models/User.php";
require_once "../models/Ad.php";
require_once "../utils/Auth.php";
require_once "../utils/Input.php";

function addAnItem() 
{
	if (!empty($_POST)){
		$itemName = Input::get('itemName');
		$price = Input::get('price');
		$description = Input::get('description');
		$sellerName = Input::get('sellerName');
		$username = Input::get('username');
		// $imageUrl = Input::get('imageUrl');

		$ad = new Ads();
		$ad->itemName = $itemName;
		$ad->price = $price;
		$ad->description = $description;
		$ad->sellerName = $sellerName;
		$ad->username = $username;
		$ad->save();
	}
}

function rerouteAdIfNotLoggedIn()
{
    if (!Auth::check())
    {
        header('Location: /login');
    }
}

function checkIfUserIdEntered()
{
    if (!Input::has('id'))
    {
        $_SESSION['ERROR_MESSAGE'] = 'User account not found. Please try again.';
        header('Location: /items');
        die();
    }
}
function editInputIfExisits()
{
    // checks for POST information and if user can edit specified account
    if (hasInput('POST') && Input::get('id') == Auth::id())
    {
        $user = User::find(Input::get('id'));
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->save();
        $_SESSION['SUCCESS_MESSAGE'] = 'Account successfully updated';
        header('Location: /users/account?id=' . $user->id);
        die();
    }
}
	