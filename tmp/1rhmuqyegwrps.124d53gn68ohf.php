    <!-- <div class="flex flex-col h-screen justify-between"> -->

<main style="height: 1000px;">
	<div class="">
		<h1>Fat Free Login</h1>
		<?php if (isset($SESSION['logged_in']) && $SESSION['logged_in']): ?>
			
				<p>Welcome <?= ($SESSION['username']) ?>!</p>
				<p>You managed to log in succesfully. Have a look at the options in the menu item with your username. </p>
				<p>
				<a class="" href="/user/update">Go to your settings</a>
				<a class="" href="/logout">Logout</a></p>
			
			<?php else: ?>
				<p>Congratulations on installing the Fat Free Login script. You are not logged in right now. </p>
				<p><a href="/login">You can login here</a>.</p>
			
		<?php endif; ?>
	</div>
</main>
