<?php

class Phrase
{
    public $currentPhrase;
    public $selected =[];
    public $phrases = [
        'Boldness be my friend',
        'Leave no stone unturned',
        'Broken crayons still color',
        'The adventure begins',
        'Dream without fear',
        'Love without limits'
    ];

    public function __construct($phrase = null, $selected = null)
    {
        if (!empty($phrase)) {
            $this->currentPhrase = $phrase;
        } else {
            $randIndex = array_rand($this->phrases);
            $this->currentPhrase = $this->phrases[$randIndex];
        }
        if (!empty($selected)) {
            $this->selected = $selected;
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

    public function getLetterArray()
    {
        return array_unique(str_split(str_replace(' ', '', strtolower($this->currentPhrase))));
    }

    public function checkLetter($letter)
    {
        
        return in_array($letter, $this->getLetterArray());
    }

    public function numberLost()
    {
        $diff = array_diff($this->selected, $this->getLetterArray());
        return count($diff);
    }
}
