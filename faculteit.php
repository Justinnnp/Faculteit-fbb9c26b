<?php
    $vraag = readLine("Van welk getal wil je de faculteit weten? ");
    $a = 1;
    for($i = 1; $i <= $vraag - 1; $i ++) {
        $a *= ($i + 1);
    }
    echo("De faculteit van " . $vraag . " is " . $a);



?>