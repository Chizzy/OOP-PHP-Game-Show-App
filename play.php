<?php

session_start();
if (!isset($_SESSION['selected'])) {
    $_SESSION['selected'] = [];
}
if (isset($_POST['key'])) {
    $_SESSION['selected'][] = $_POST['key'];
}
$_SESSION['phrase'] = 'start small';

include 'inc/Phrase.php';
include 'inc/Game.php';

$phrase = new Phrase($_SESSION['phrase'], $_SESSION['selected']);
$game =new Game($phrase);
var_dump($game);

require 'inc/header.php';

?>
<style>
    .correct {
    background: var(--color-win);
    border-radius: 5px;
    font-size: var(--font-size-medium);
    color: #FFFFFF;
    }

    .incorrect {
    background: var(--color-lose);
    color: #FFFFFF;
    }
</style>

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