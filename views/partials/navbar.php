
<div class='navbar'>
	<ul>

			<li><a class="active" href="/">Home</a></li>
			<li><a href="/ads">Items</a></li>
		
		<?php if (Auth::check()) : ?>
			<li><a href="/users/account?id=<?= Auth::id(); ?>">Account</a></li>
			<li><a href="/logout">Logout</a></li>
			<li><a href="/items/create">Post Ad</a></li>


		<?php else: ?>
			<li><a href="/login">Login</a></li>
			<li><a href="/users/create">Signup</a></li>
		<?php endif ?>

		


	
	</ul>
</div>	

