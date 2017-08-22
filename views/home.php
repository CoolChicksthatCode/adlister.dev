<?php 
	$ads = Ads::displayFeaturedAds();


 ?>
<div class="container">

	<section id="welcome">

		<div class="row">

			<div class="col-xs-12">

				<h1 class="text-center">Welcome To Adlister</h1>

			</div>

		</div>

		<div>

		<!-- <img src= "/img/logo.png" width="250" height="250" > -->

		</div>

	</section>

	<section id="features">

		<div class="row">

			<h3 class="section-title">Featured Items</h3>
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
		</div>

	</section>

</div>