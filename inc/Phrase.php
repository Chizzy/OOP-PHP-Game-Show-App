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

    public function addPhraseToDisplay()
    {
        $characters = str_split(strtolower($this->currentPhrase));
        $phrase = '';
        foreach ($characters as $character) {
            if (ctype_space($character)) {
                $phrase .= "<li class='space'>$character</li>";
            } elseif (!ctype_alpha($character)) {
                $phrase .= "<li class='hide'>$character</li>";
            } else {
                $phrase .= "<li class='hide letter'>$character</li>";
            }
        }
        return $phrase;
    }
}
