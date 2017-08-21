<!--Page for user account home-->
<div class="container">

	<section id="account">

		<div class="row">
			<?php $user = Auth::user();?>

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
				<div id="use-details">
				<br>
					<h3>Account Details</h3>
 					<p>Name: <?= $user->name ?></p>
					<p>Email: <?= $user->email ?></p>
					<p>Username: <?= $user->username ?></p>
					
				</div>

			</div>
		</div>
	</section>
</div>



	