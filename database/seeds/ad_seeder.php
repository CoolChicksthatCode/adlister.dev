<?php

require_once __DIR__ . '/../../models/Ad.php';
require_once __DIR__ . '/../db_connect.php';

$dbc->exec("TRUNCATE ads");
	
	$ad = new Ads();
	$ad->itemName = "Shirt";
	$ad->price = 9.99;
	$ad->description = "This shirt is gorgeous!";
	$ad->sellerName = "Finn Mertens";
	$ad->username = "finn_the_human";
	$ad->userId = 1;
	$ad->image = "shirt.jpg";
	$ad->save();

	$ad = new Ads();
	$ad->itemName = "Cat";
	$ad->price = 19.99;
	$ad->description = "This cat is awesome!";
	$ad->sellerName = "Jake";
	$ad->username = "jake_the_dog";
	$ad->userId = 2;
	$ad->image = "cat.jpg";
	$ad->save();

	$ad = new Ads();
	$ad->itemName = "Dog";
	$ad->price = 29.99;
	$ad->description = "This dog is a great companion!";
	$ad->sellerName = "Simon Petrikov";
	$ad->username = "ice_king";
	$ad->userId = 3;
	$ad->image = "dog.jpg";
	$ad->save();

	$ad = new Ads();
	$ad->itemName = "Phone";
	$ad->price = 59.99;
	$ad->description = "This phone is cool!";
	$ad->sellerName = "Marceline Abadeer";
	$ad->username = "marceline_abadeer";
	$ad->userId = 4;
	$ad->image = "phone.jpg";
	$ad->save();

	$ad = new Ads();
	$ad->itemName = "Water Bottle";
	$ad->price = 5.99;
	$ad->description = "This water is so good!";
	$ad->sellerName = "Finn Mertens";
	$ad->username = "finn_the_human";
	$ad->userId = 1;
	$ad->image = "bottle.jpg";
	$ad->save();


