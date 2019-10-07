<?php

include 'inc/Phrase.php';
include 'inc/Game.php';

$phrase = new Phrase();
$game =new Game();
var_dump($phrase);
var_dump($game);

require 'inc/header.php';

?>

<div class="main-container">
    <div id="banner" class="section">
        <h2 class="header">Phrase Hunter</h2>
    </div>
</div>

<?php

require 'inc/footer.php';