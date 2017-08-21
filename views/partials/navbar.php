
<div class='navbar'>
	<ul>
		<li><a class="active" href="/">Home</a></li>
		<li><a href="/ads">Items</a></li>
		<li><a href="/login">Login</a></li>
		<li><a href="/signup">Signup</a></li>
		
		<?php if (Auth::check()) : ?>
			<li><a href="/users/account?id=<?= Auth::id(); ?>">Account</a></li>
			<li><a href="/logout">Logout</a></li>
		<?php endif ?>

	
	</ul>
</div>	

