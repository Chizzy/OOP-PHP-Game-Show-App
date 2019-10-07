<?php

class Phrase
{
    private $currentPhrase;
    private $selected;

    public function __construct($phrase = null, $selected = [])
    {
        if (!empty($phrase) || !empty($selected)) {
            $this->currentPhrase = $phrase;
            $this->selected = $selected;
        }
        if (!isset($phrase)) {
            $this->currentPhrase = 'dream big';
        }
    }
}
