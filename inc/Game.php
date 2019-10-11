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
        $keyboard = '';
    
        $keyboard .= '<form action="play.php" method="POST">';
        $keyboard .= '<div id="qwerty" class="section">';
        $keyboard .= '<div class="keyrow">';
        $keyboard .= $this->keyedLetter('q');
        $keyboard .= $this->keyedLetter('w');
        $keyboard .= $this->keyedLetter('e');
        $keyboard .= $this->keyedLetter('r');
        $keyboard .= $this->keyedLetter('t');
        $keyboard .= $this->keyedLetter('y');
        $keyboard .= $this->keyedLetter('u');
        $keyboard .= $this->keyedLetter('i');
        $keyboard .= $this->keyedLetter('o');
        $keyboard .= $this->keyedLetter('p');
        $keyboard .= '</div>';

        $keyboard .= '<div class="keyrow">';
        $keyboard .= $this->keyedLetter('a');
        $keyboard .= $this->keyedLetter('s');
        $keyboard .= $this->keyedLetter('d');
        $keyboard .= $this->keyedLetter('f');
        $keyboard .= $this->keyedLetter('g');
        $keyboard .= $this->keyedLetter('h');
        $keyboard .= $this->keyedLetter('j');
        $keyboard .= $this->keyedLetter('k');
        $keyboard .= $this->keyedLetter('l');
        $keyboard .= '</div>';

        $keyboard .= '<div class="keyrow">';
        $keyboard .= $this->keyedLetter('z');
        $keyboard .= $this->keyedLetter('x');
        $keyboard .= $this->keyedLetter('c');
        $keyboard .= $this->keyedLetter('v');
        $keyboard .= $this->keyedLetter('b');
        $keyboard .= $this->keyedLetter('n');
        $keyboard .= $this->keyedLetter('m');
        $keyboard .= '</div>';
        $keyboard .= '</div>';
        $keyboard .= '</form>';

        return $keyboard;
    }

    public function displayScore()
    {
        $score = '';
        for ($i=1; $i <= $this->phrase->numberLost(); $i++) {
            $score .= '<li class="tries"><img src="images/lostHeart.png" height="35px" width="30px"></li>';
        }
        for ($i = 1; $i <= ($this->lives - $this->phrase->numberLost()); $i++) {
            $score .= '<li class="tries"><img src="images/liveHeart.png" height="35px" width="30px"></li>';
        }
        return $score;
    }

    public function keyedLetter($letter)
    {
        if (!in_array($letter, $this->phrase->selected)) {
            return "<button name='key' value='$letter'>$letter</button>";
        } elseif ($this->phrase->checkLetter($letter)) {
            return "<button name='key' value='$letter' class='correct' disabled>$letter</button>";
        } else {
            return "<button name='key' value='$letter' class='incorrect' disabled>$letter</button>";
        }
    }
}
