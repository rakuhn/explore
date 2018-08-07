<section>
	<div class="secondHeader">
		<h2>Journal</h2>
	</div>
</section>
<div class="flex-row">
	<div class="paragraph">
		<h4>Journal</h4>
		<?php foreach($entryResults as $result) { ?>
				<hr>
					<h5><?php print_r($result['date']) ?></h5>
					<p><?php print_r($result['entry']) ?></p>
					<form "<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" method="post" role="form">
						<input type="hidden" name="edit" value="<?php echo $result['id']?>">
							<button type="submit">Edit</button>
						<input type="hidden" name="delete" value="<?php echo $result['id']?>">
							<button type="submit">Delete</button>
					</form>
		<?php } ?>
	</div>
	<div id="quoteBox">
		<h4>Explore on</h4>
		<?php exploreQuote(); ?>
	</div>
</div>
<form "<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" method="post" role="form" class="paragraph">
	<div>
		<label>What's on your mind?</label><br>
     <textarea name="entry" class="form-text"></textarea><br>
     <button type="submit">Add</button>
	</div>
</form>
