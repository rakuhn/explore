<section>
	<div class="secondHeader">
		<h2>Log in</h2>
	</div>
</section>
<section>
	<div class="flex-row">
		<div class="paragraph">
			<h4>Log in</h4>
			<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" method="post" role="form">
				<div>
					<label for="user-name">User name:</label>
					<input type="text" name="user-name" placeholder="User Name">
					<label for="password">Password:</label>
					<input id="password" type="password" class="form-control" name="password" placeholder="Password"> 
					<?php
						if (!empty($incorrectPassword)) {
							echo 'Incorrect password';
						}
					?>
				</div>
				<div>
					<label><input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'">Show password</label>
				</div>
				<button type="submit">Let's go!</button>
			</form>
			<p>No user? <a href="/create-user">Create a user</a></p>
		</div>
		<div id="quoteBox">
			<h4>Explore on</h4>
			<?php exploreQuote(); ?>
		</div>
	</div>
</section>