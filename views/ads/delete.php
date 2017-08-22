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

var_dump($ad);
var_dump($_POST);




?>


<!--Page that includes the form to edit an existing ad-->
<div class = "container">
<form method="POST" action="">
	<br>
	<div class="col-md-6 col-md-offset-3">
		<h2>Are you sure you want to delete <br> <?=$ad->itemName; ?>?</h2>
<!-- 
	  	<div class="form-group">
	    	<input type="hidden" name="name" class="form-control" id="name" value="<?= $ad->itemName; ?>" placeholder="Name of the Item">
	  	</div>

	  	<div class="form-group">
	   		<input type="hidden" name="price" class="form-control" id="price" value="<?= $ad->price;?>" placeholder="Price of the Item ($)">
	  	</div>

		<div class="form-group">
	    	<br>
	    	<textarea type="hidden" class="form-control col-md-6-offset-3" name="description" id="description" rows="0"><?= $ad->description ?></textarea>
	  	</div>

		<div class="form-group">
	    	<input type="hidden" class="form-control-file" id="fileinput">
	  	</div> -->

	  	<!-- Update Item Button -->
		<button name="delete" value="<?=$ad->id ?>" type="submit" class="btn btn-default">DELETE Item</button>

		 <?php if(isset($_POST['delete'])){
			$ad->delete(); 

			header('Location: /');
			die();}
			 ?>
		
	</div>
</form>

</div>