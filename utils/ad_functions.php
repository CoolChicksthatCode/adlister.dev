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
		$userId = $_SESSION['LOGGED_IN_ID'];
		// $imageUrl = Input::get('imageUrl');

		$ad = new Ads();
		$ad->itemName = $itemName;
		$ad->price = $price;
		$ad->description = $description;
		$ad->sellerName = $sellerName;
		$ad->username = $username;
		$ad->userId = $userId;
		$ad->save();
	}
}

function editItem()
{
        $ad = Ads::find(Input::get('id'));

        var_dump($ad);

        if (!empty($_POST)) {

        	$adId = Auth::id();

        	$itemName = Input::get('name');
        	$price = Input::get('price');
			$description = Input::get('description');
			$sellerName = $ad->sellerName;
			$username = $_SESSION['IS_LOGGED_IN'];


            $ad->itemName = $itemName;
            $ad->price = $price;
            $ad->description = $description;
            $ad->sellerName = $sellerName;
            $ad->username = $username;
            $ad->userId = $_SESSION['LOGGED_IN_ID'];
            $ad->save();

            var_dump($ad);

            $_SESSION['SUCCESS_MESSAGE'] = "Item successfully updated";

            header('Location: /ads');
            die();
        }
        
            
        
}






