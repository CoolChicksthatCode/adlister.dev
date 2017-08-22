<!--Page for single advertisement -->
<?php
require_once "../models/Model.php";
require_once "../models/User.php";
require_once "../models/Ad.php";
require_once "../utils/Auth.php";
require_once "../utils/Input.php";

$id= Input::get('id');
$ad = Ads::find($id);

var_dump($id);

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

			<a href="/items/edit"><button>Delete Item</button></a>

		<?php endif ?>
		


	</div>
<div>







