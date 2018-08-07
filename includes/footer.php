		</section>
	</body>
	<footer>
		<div>
			<p>
				&copy; 
				<?php
					$copyYear = 2016;
					$curYear = date('Y');
					echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
				?> 
				Anna
			</p>
		</div>
	</footer>
</html>