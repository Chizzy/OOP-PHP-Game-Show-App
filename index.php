<?php

require 'inc/header.php';

?>
<style>
	form {
		margin-top: -25rem;
	}
</style>

<div class="main-container">
	<h2 class="header">Phrase Hunter</h2>
	<form action="play.php" method="POST">
		<input id="btn__reset" type="submit" name="start" value="Start Game" />
	</form>
</div>

<?php

require 'inc/footer.php';

?>