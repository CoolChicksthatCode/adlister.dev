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

<div class = "container">
	<form method="POST" action="">
		<div class="col-md-6 col-md-offset-3">
			<h2>Are you sure you want to delete <br> <?=$ad->itemName; ?>?</h2>
			<button name="delete" value="<?=$ad->id ?>" type="submit" class="btn btn-default">DELETE Item</button>

			<?php 
				if(isset($_POST['delete']))
				{
					$ad->delete(); 

					header('Location: /users/account?=<?=$id?>');
					die();
				}
			?>

		</div>
	</form>
</div>



