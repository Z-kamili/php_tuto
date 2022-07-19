<?php 

function printChar($s)
{
        return $s;
}

function scanChar($s) {

    $ordz = ord('Z');

    for($ord = ord('A') ; $ord <= $ordz ; $ord++ ) {

        $chr = chr($ord);


        if($s == printChar($chr))
         return $chr;

    }

    return '?';


}
$art = printChar('Y');
$c = scanChar($art);
echo 'corresponds to: ' . $c;

?>