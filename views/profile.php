<section>
	<div class="secondHeader">
		<h2>Welcome, <?php print_r($_SESSION['user-name']); ?></h2>
	</div>
</section>
<div class="flex-row">
	<div class="paragraph">
		<h3>Profile</h3>
			<h4>User name: <?php print_r($_SESSION['user-name']); ?></h4>
			<form "<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" method="post" role="form">
				<input type="hidden" name="edit">
				<button type="submit">Edit</button>
			</form>
	</div>
	<div id="quoteBox">
		<h4>Explore on</h4>
		<?php exploreQuote(); ?>
	</div>
</div>