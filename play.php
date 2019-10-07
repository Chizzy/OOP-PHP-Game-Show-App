<?php

include 'inc/Phrase.php';
include 'inc/Game.php';

$phrase = new Phrase();
$game =new Game($phrase);

require 'inc/header.php';

?>

<div class="main-container">
    <h2 class="header">Phrase Hunter</h2>
    <div id="phrase" class="section">
        <ul>
            <?php echo $phrase->addPhraseToDisplay(); ?>
        </ul>
    </div>
    <?php echo $game->displayKeyboard(); ?>
    <div id="scoreboard" class="section">
        <ol>
            <?php echo $game->displayScore(); ?>
        </ol>
    </div>
</div>

<?php

require 'inc/footer.php';