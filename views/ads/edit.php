<?php
require_once "../models/Model.php";
require_once "../models/User.php";
require_once "../models/Ad.php";
require_once "../utils/Auth.php";
require_once "../utils/Input.php";
$user = Auth::user(); 
$id = $user->id;

$itemId= Input::get('id');
$ad = Ads::find($itemId);


?>


<!--Page that includes the form to edit an existing ad-->
<div class = "container">
<form method="POST" action="">
	<br>
	<div class="col-md-6 col-md-offset-3">
		<h2>Edit item!</h2>
		<!-- Name -->
	  	<div class="form-group">
	    	<label for="name">Name</label>
	    	<input type="name" name="name" class="form-control" id="name" value="<?= $ad->itemName; ?>" placeholder="Name of the Item">
	  	</div>
	  	<!-- Price -->
	  	<div class="form-group">
	    	<label for="price">Price</label>
	   		<input type="price" name="price" class="form-control" id="price" value="<?= $ad->price;?>" placeholder="Price of the Item ($)">
	  	</div>
	  	<!-- Seller Info -->
	<!--   	<div class="form-group">
	    	<label for="sellerinfo">Seller Info</label>
	   		<input type="sellerinfo" class="form-control" id="exampleFormControlInput3" placeholder="Seller Info">
	  	</div> -->
	  	<!-- Description -->
		<div class="form-group">
	   		<label for="description">Item Description</label>
	    	<br>
	    	<textarea class="form-control col-md-6-offset-3" name="description" id="description" rows="3"><?= $ad->description ?></textarea>
	  	</div>
	  	<!-- Photo File Input -->
		<div class="form-group">
	    	<label for="fileinput">Example file input</label>
	    	<input type="file" class="form-control-file" id="fileinput">
	  	</div>
	  	<!-- Update Item Button -->
		<button type="submit" class="btn btn-default">Update Item</button>
	</div>
</form>

</div>