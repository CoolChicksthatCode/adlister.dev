
<!--Page for user account home-->
<div class="container">

	<?php $user = Auth::user(); 

	$ads = Ads::userItems();
	

	?>

	<section id="account">

		<div class="row">

			<h1 class="section-title">Welcome, <?= $user->username ?> </h1>

			<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
				<div class="alert alert-danger">
					<p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
				</div>
				<?php unset($_SESSION['ERROR_MESSAGE']); ?>
			<?php endif; ?>
			<?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
				<div class="alert alert-success">
					<p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
				</div>
				<?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
			<?php endif; ?>

			<div class="col-md-6 col-md-offset-3">
				<div id="user-details">
				<br>
					<h3>Account Details</h3>
					<p>Name: <?= $user->name ?></p>
					<p>Email: <?= $user->email ?></p>
					<p>Username: <?= $user->username ?></p>
					
				</div>
				<a href="/users/edit?id=<?=$user->id ?>"><button>Edit Profile</button></a>

			</div>
		</div>
	</section>

	<section id="user-items">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div id="account-items">
				<br>
					<h3>Items for Sale</h3>

					 <?php foreach($ads as $ad): ?>
						<div class="col-md-3" align="center">
							<img src="/img/<?=$ad->image ?>" width="100" height="100">
							<a href="/items/show?id=<?=$ad->id;?>"><h5> <?= Input::escape($ad->itemName) ?></h5></a>
							

						</div>
					<?php endforeach; ?>
					
				</div>
			</div>	
		</div>

			<div class="row">

				<a href="/items/create"><button>Create New Ad</button></a>
			</div>	

	</section>
				

</div>



	