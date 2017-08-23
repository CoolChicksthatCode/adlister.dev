<!--Page for single advertisement -->
<?php
require_once "../models/Model.php";
require_once "../models/User.php";
require_once "../models/Ad.php";
require_once "../utils/Auth.php";
require_once "../utils/Input.php";

$id= Input::get('id');
$ad = Ads::find($id);



$userId = $_SESSION['LOGGED_IN_ID'];
$adUserId = $ad->userId;

?>


<div class="container">
<h1> Item Name: <?= Input::escape($ad->itemName) ?></h5>
<br>
	<div class="row">
		<div class="col-md-4" align="center">
		<img src="/img/placeholder.png" width="250" height="250">
		<h5> Item Price: <?= Input::escape($ad->price) ?></h5>
		<h5> Item Description: <?= Input::escape($ad->description) ?></h5>
		<h5> Seller Name: <?= Input::escape($ad->sellerName) ?></h5>
		</div>
	<div>

	<div class="row">
		<?php if($userId == $adUserId): ?>

			<a href="/items/edit?id=<?=$ad->id;?>"><button>Edit Item</button></a>
<!-- 
			<a href="/items/delete?id=<?=$ad->id;?>"><button>DELETE Item</button></a>

 -->
			<a href="#" data-toggle="modal" data-target="#deleteModal"><button type="button" class="btn btn-primary btn-lg">Delete Item</button></a>

			<div class="modal" id="deleteModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" type="button" data-dismiss="modal">x</button>
							<h2 id="delete-text">Are you sure you want to delete <?=$ad->itemName; ?>?</h2>
						</div>
						<div class="modal-body">
							<form method="POST" action="">

								<button name="delete" value="<?=$ad->id ?>" class="pull-right" type="submit" id="submit-button">Submit</button>

								<?php 
									if(isset($_POST['delete']))
									{
										$ad->delete(); 

										$_SESSION['SUCCESS_MESSAGE'] = "Item successfully deleted.";
										header('Location: /users/account?=' . $userId);
										die();
									}
								?>
								
							</form>	
						</div>
					</div>	
				</div>	
			</div>	
		<?php endif ?>
		




	</div>
<div>







