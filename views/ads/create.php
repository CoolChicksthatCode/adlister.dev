<!--Page for creating new advertisement listings-->
<?php

function addAnItem() 
{
	$itemName = Input::get('itemName');
	$price = Input::get('price');
	$description = Input::get('description');
	$sellerName = Input::get('sellerName');
	$username = Input::get('username');
	$imageUrl = Input::get('imageUrl');

	var_dump($itemName);
	var_dump($price);

	if (empty($_POST)) {
		var_dump("The field is empty.");
	} else if (!empty($_POST)) {
		Model::insert();
	}
}


?>


<form action ="adlister.dev/items/create" method="post">
	<br>
	<div class="col-md-6 col-md-offset-3">
		<h2>Add a new item here!</h2>
		<!-- Name -->
	  	<div class="form-group">
	    	<label for="itemName">Name</label>
	    	<input type="itemName" class="form-control" id="itemName" placeholder="Name of the Item">
	  	</div>
	  	<!-- Price -->
	  	<div class="form-group">
	    	<label for="price">Price</label>
	   		<input type="price" class="form-control" id="price" placeholder="Price of the Item ($)">
	  	</div>
	  	<!-- Description -->
		<div class="form-group">
	   		<label for="description">Item Description</label>
	    	<br>
	    	<textarea class="form-control col-md-6-offset-3" id="description" placeholder="Descibe the item you are listing for sale" rows="3"></textarea>
	  	</div>
	  	<!-- Seller Info -->
	  	<div class="form-group">
	    	<label for="sellerName">Seller Info</label>
	   		<input type="sellerName" class="form-control" id="sellerName" placeholder="Seller Info">
	  	</div>
	  	<!-- Photo File Input -->
		<div class="form-group">
	    	<label for="fileinput">Example file input</label>
	    	<input type="fileinput" class="form-control-file" id="fileinput">
	  	</div>
	  	<!-- Submit Button -->
		<button type="button" class="btn btn-default">Post Item</button>
	</div>
</form>
