<?php

function isFirstLetterUpperCase(string $str): void
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase");
    } else {
        echo("String's first character is not uppercase");
    }
}

isFirstLetterUpperCase('Codegym');
echo "<br>";
isFirstLetterUpperCase('cdegym');