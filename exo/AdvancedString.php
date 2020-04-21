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
        echo "<b>" . $this->internalString . "</b></br>";
    }

    public function italic()
    {
        echo "<i>" . $this->internalString . "</i></br>";
    }

    public function underline()
    {
        echo '<p style="text-decoration:underline">' . $this->internalString . '</p></br>';
    }

    public function upperCase()
    {
        echo strtoupper($this->internalString);
    }
}

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "($this->x,$this->y)";
    }

    public function distance($otherPoint)
    {
        $distanceX = $otherPoint->x - $this->x;
        $distanceY = $otherPoint->y - $this->y;
        return sqrt(pow($distanceX, 2) +  pow($distanceY, 2));
    }
}
