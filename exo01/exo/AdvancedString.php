<?php

namespace exo;

class AdvancedString
{
    private $internalString;

    public function __construct($internalString)
    {
        $this->internalString = $internalString;
    }

    public function bold()
    {
        echo '<b>' . $this->internalString . '</b>';
    }
    public function italic()
    {
        echo '<i>' . $this->internalString . '</i>';
    }
    public function underline()
    {
        echo '<style="text-decoration: underline;">' . $this->internalString . '</style>';
    }
    public function upperCase()
    {
        echo strtoupper($this->internalString);
    }
}
