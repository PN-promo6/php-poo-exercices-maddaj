<?php

use exo\AdvancedString;
use exo\Point;

require_once('autoload.php');

$intString = new AdvancedString("Je suis moi même");
echo $intString->bold();
echo $intString->italic();
echo $intString->underline();
echo $intString->upperCase();

$p1 = new Point(3, 5);
$p2 = new Point(7, 1);

echo "P1 : " . $p1;
echo "P2 : " . $p2;
