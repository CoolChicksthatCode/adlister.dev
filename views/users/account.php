<!--Page for user account home-->
<div class="container">

	<?php $user = Auth::user();?>

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
				<a href="/users/edit"><button>Edit Profile</button></a>


<!--  				<a href="#" data-toggle="modal" data-target="#edit-modal"><button type="button" class="btn btn-primary btn-lg">EditProfile</button></a>

				<div class="modal" id="edit-modal">
					<div class="modal-dialog">
						<div class="modal-content">

							<div class="modal-header">
								<button class="close" type="button" data-dismiss="modal">x</button>
								<h4>Edit profile</h4>
							</div>

							<div class="modal-body">
								<form method="POST" action="">
									<label for="name">User Name</label>
									<input class="form-control" type="text" name="name" input="name" placeholder="<?=$user->name ?>" autofocus >
									
									<label for="email">Email</label>
									<input class="form-control" type="email" name="email" input="email" placeholder="<?=$user->email ?>" >
									
									<label for="username">Username</label>
									<input class="form-control" type="text" name="username" input="username" placeholder="<?=$user->username ?>" >
										
									<button class="pull-right" type="submit">Submit</button>
									
								</form>	
							</div>
						</div>	
					</div>	
				</div>	 -->













			</div>
		</div>
	</section>

	<section id="user-items">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div id="account-items">
				<br>
					<h3>Items for Sale</h3>
 					<p>User Id: <?= $user->id ?></p>
					
				</div>
				<a href="/items/create"><button>Create New Ad</button></a>
			</div>		
		</div>
	</section>


</div>



	