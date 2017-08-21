
// Page for an index of advertisements
//  $id = Input::get('id');
// $name = Input::get('itemName');
// $description = Input::get('description');
// $sellerName = Input::get('sellerName');
// $imageUrl = Input::get('imageUrl');

// Ad::displayFeaturedAds();

// foreach($items as $item): 
<!--Page for an index of advertisements-->
<?php
require_once "../models/Model.php";
require_once "../models/User.php";
require_once "../models/Ad.php";
require_once "../utils/Auth.php";
require_once "../utils/Input.php";

$ads = Ads::all();

?>

<h2 class="text-center">All items for sale</h2>
<br>
<div class="container">
	<div class="row">
		<?php foreach($ads as $ad): ?>
		<div class="col-md-4">
		<img src="/img/placeholder.png" width="250" height="250">
		<a href="/items/show?id=<?=$ad->id;?>"><h5> Item Name: <?= Input::escape($ad->itemName) ?></h5></a>
		<h5> Item Description: <?= Input::escape($ad->description) ?></h5>
		</div>
		<?php endforeach; ?>
	<div>
<div>




	

</div>
</div>
<!-- <img src="/img/placeholder.png" width="275" height="275"> -->