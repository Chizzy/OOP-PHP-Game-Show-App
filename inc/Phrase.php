<?php

class Phrase
{
    public $currentPhrase;
    public $selected;

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

    public function addPhraseToDisplay()
    {
        $characters = str_split(strtolower($this->currentPhrase));
        $phrase = '';
        foreach ($characters as $character) {
            if (in_array($character, $this->selected)) {
                $phrase .= "<li class='show'>$character</li>";
            } elseif (ctype_space($character)) {
                $phrase .= "<li class='space'>$character</li>";
            } elseif (!ctype_alpha($character)) {
                $phrase .= "<li class='hide'>$character</li>";
            } else {
                $phrase .= "<li class='hide letter'>$character</li>";
            }
        }
        return $phrase;
    }

    public function checkLetter($letter)
    {
        $phrase = array_unique(str_split(str_replace(' ', '', strtolower($this->currentPhrase))));
        return in_array($letter, $phrase);
    }
}
