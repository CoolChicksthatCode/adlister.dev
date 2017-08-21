<!--Page for creating new advertisement listings-->
<?php
require_once "../models/Model.php";
require_once "../models/User.php";
require_once "../models/Ad.php";
require_once "../utils/Auth.php";
require_once "../utils/Input.php";

// var_dump($_POST);

?>




<form method="POST" >
	<br>
	<div class="col-md-6 col-md-offset-3">
		<h2>Add a new item here!</h2>
		<!-- Name -->
	  	<div class="form-group">
	    	<label for="itemName">Name</label>
	    	<input type="itemName" name='itemName' class="form-control" id="itemName" placeholder="Name of the Item">
	  	</div>
	  	<!-- Price -->
	  	<div class="form-group">
	    	<label for="price">Price</label>
	   		<input type="price" name='price' class="form-control" id="price" placeholder="Price of the Item ($)">
	  	</div>
	  	<!-- Description -->
		<div class="form-group">
	   		<label for="description">Item Description</label>
	    	<br>
	    	<textarea class="form-control col-md-6-offset-3" id="description" name="description" placeholder="Descibe the item you are listing for sale" rows="3"></textarea>
	  	</div>
	  	<!-- Seller Info -->
	  	<div class="form-group">
	    	<label for="sellerName">Seller Info</label>
	   		<input type="sellerName" class="form-control" id="sellerName" name="sellerName" placeholder="Seller Info">
	  	</div>
	  	<!-- Username -->
	  	<div class="form-group">
	    	<label for="username">Username</label>
	   		<input type="username" class="form-control" id="username" name="username" placeholder="username">
	  	</div>
	  	<!-- File Photo Input -->
	  	<!-- <div class="form-group">
    		<label for="InputFile">File input</label>
    		<input type="file" id="InputFile">
    	</div> -->
		<input type="submit" class="btn btn-default">
  		</div>
	</div>
</form>
