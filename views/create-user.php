<section>
	<div class="secondHeader">
		<h2>Create a User</h2>
	</div>
</section>
<section>
	<div class="flex-row">
		<div class="paragraph">
			<h4>Create a user</h4>
			<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" method="post" role="form">
				<div>
					<label for="user-name">User name:</label>
					<input type="text" name="user-name" placeholder="User Name">
					<?php
						if (!empty($usernameTaken)) {
							echo 'username taken';
						}
					?>
					<label for="email">Email:</label>
					<input type="email" name="email" placeholder="Email">
					<label for="user-password">Password:</label>
					<input id="password" type="password" class="form-control" name="password" placeholder="Password"> 
				</div>
				<div>
					<label><input class= "password-checkbox" type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'">Show password</label>
				</div>
				<button type="submit">Let's go!</button>
			</form>
			<p>Already have a user? <a href="/login">Log in</a></p>
		</div>
		<div id="quoteBox">
			<h4>Explore on</h4>
			<?php exploreQuote(); ?>
		</div>
	</div>
</section>