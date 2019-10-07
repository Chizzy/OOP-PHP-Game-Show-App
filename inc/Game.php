<?php

class Game
{
    private $phrase;
    private $lives = 5;

    public function __construct($phrase)
    {
        $this->phrase = $phrase;
    }

    public function displayKeyboard()
    {
        $keyboard = '<form action="play.php" method="POST">
            <div id="qwerty" class="section">
                <div class="keyrow">
                    <button class="key">q</button>
                    <button class="key">w</button>
                    <button class="key">e</button>
                    <button class="key">r</button>
                    <button class="key" style="background-color: red" disabled>t</button>
                    <button class="key">y</button>
                    <button class="key">u</button>
                    <button class="key">i</button>
                    <button class="key">o</button>
                    <button class="key">p</button>
                </div>

                <div class="keyrow">
                    <button class="key">a</button>
                    <button class="key">s</button>
                    <button class="key">d</button>
                    <button class="key">f</button>
                    <button class="key">g</button>
                    <button class="key">h</button>
                    <button class="key">j</button>
                    <button class="key">k</button>
                    <button class="key">l</button>
                </div>

                <div class="keyrow">
                    <button class="key">z</button>
                    <button class="key">x</button>
                    <button class="key">c</button>
                    <button class="key">v</button>
                    <button class="key">b</button>
                    <button class="key">n</button>
                    <button class="key">m</button>
                </div>
            </div>
        </form>';

        return $keyboard;
    }

    public function displayScore()
    {
        $score = '';
        for ($i = 1; $i <= $this->lives; $i++) {
            $score .= '<li class="tries"><img src="images/liveHeart.png" height="35px" width="30px"></li>';
        }
        return $score;
    }
}
