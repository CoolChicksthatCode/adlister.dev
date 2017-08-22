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

function editItem()
{
        $ad = Ads::find(Input::get('id'));
        if (!empty($_POST)) {

        	$adId = Auth::id();

        	$itemName = Input::get('itemname');
        	$price = Input::get('price');
			$description = Input::get('description');
			$sellerName = Input::get('sellerName');
			$username = Input::get('username');


            $ad->itemName = Input::get('name');
            $ad->price = removeMoneyCharacters(Input::get('price'));
            $ad->description = Input::get('description');
            $ad->sellerName = Input::get('sellerName');
            $ad->username = Input::get('username');
            $ad->save();

            $_SESSION['SUCCESS_MESSAGE'] = "Item successfully updated";

            header('Location: /ads');
            die();
        }
        
            
        
}
