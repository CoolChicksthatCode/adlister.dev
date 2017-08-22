
<!--Page for an index of advertisements-->
<?php
require_once "../models/Model.php";
require_once "../models/User.php";
require_once "../models/Ad.php";
require_once "../utils/Auth.php";
require_once "../utils/Input.php";

$ads = Ads::all();

var_dump($_SESSION);
?>

<h1 class="text-center">All items for sale</h1>
<br>
<div class="container">
	<div class="row">
		<?php foreach($ads as $ad): ?>
		<div class="col-md-4" align="center">
		<img src="/img/placeholder.png" width="250" height="250">

		<?php if(!empty($_SESSION)) : ?>
			<a href="/items/show?id=<?=$ad->id;?>"><h5> Item Name: <?= Input::escape($ad->itemName) ?></h5></a>
		<?php else: ?>			
			<h5> Item Name: <?= Input::escape($ad->itemName) ?></h5>
		<?php endif ?>

		<h5> Item Description: <?= Input::escape($ad->description) ?></h5>
		</div>
		<?php endforeach; ?>
	<div>
<div>




	

</div>
</div>
<!-- <img src="/img/placeholder.png" width="275" height="275"> -->