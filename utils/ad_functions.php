<?php

require_once "../models/Model.php";
require_once "../models/User.php";
require_once "../utils/Auth.php";
require_once "../utils/Input.php";

// function addAnItem() 
// {
// 	if (!empty($_POST)){
// 		$itemName = Input::get('itemName');
// 		$price = Input::get('price');
// 		$description = Input::get('description');
// 		$sellerName = Input::get('sellerName');
// 		$username = Input::get('username');
// 		// $imageUrl = Input::get('imageUrl');

// 		$ad = new ad();
// 		$ad->itemName = $itemName;
// 		$ad->price = $price;
// 		$ad->description = $description;
// 		$ad->sellerName = $sellerName;
// 		$ad->description = $description;
// 		$ad->insert();
// 	}
// }
// 	var_dump($_POST);

	// if (empty($_POST)) {
	// 	var_dump("The field is empty.");
	// } else if (!empty($_POST)) {
	// 	addAnItem();
	// }