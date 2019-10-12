<?php

require 'inc/header.php';

?>
<style>
	@import url('https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap');
	h2 {
	  font-family: 'Baloo Bhai', cursive;
	  font-size: 8rem;
	  text-shadow: 4px 4px 8px #000;
	}
	.header {
      color: #4C85BE;
    }
	body {
	  background-image: url('images/constellate-pFfZDaTVdtc-unsplash.jpg');
	  background-size: cover;
		
	}
	form {
	  margin-top: -25rem;
	}
	input[type=submit] {
	  box-shadow: 4px 4px 8px #000;
	}
</style>

<div class="main-container animated bounceInDown">
	<h2 class="header animated infinite pulse slower delay-3s">TV Phrase Hunter</h2>
	<form action="play.php" method="POST">
		<input id="btn__reset" type="submit" name="start" value="Start Game" />
	</form>
</div>

<?php

require 'inc/footer.php';

?>