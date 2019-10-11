<?php

session_start();

if (isset($_POST['start'])) {
    unset($_SESSION['selected']);
    unset($_SESSION['phrase']);
}

if (isset($_SESSION['selected']) && isset($_POST['key'])) {
    $_SESSION['selected'][] = $_POST['key'];
} else {
    $_SESSION['selected'] = [];
}

include 'inc/Phrase.php';
include 'inc/Game.php';

$phrase = new Phrase($_SESSION['phrase'], $_SESSION['selected']);
$_SESSION['phrase'] = $phrase->currentPhrase;
$game = new Game($phrase);

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
<?php if ($game->checkForLose() == true){ ?>
    <style>
        body {
            background: #f5785f;
        }
        .header {
            color: white;
        }
    </style>
    <?php echo $game->gameOver();
    } else if ($game->checkForWin() == true) { ?>
        <style>
            body {
                background: #78CF82;
            }
            .header {
                color: white;
            }
        </style>
    <?php echo $game->gameOver();
    } else { ?>
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
    <?php } ?>
</div>

<?php

require 'inc/footer.php';