#!/usr/bin/php
<?php

while (42)
{
    echo "Entrez un nombre: ";
    $line = trim(fgets(STDIN));
    if (feof(STDIN) == TRUE)
       exit(0);
    if (is_numeric($line) == FALSE)
        echo "\n'$line' n'est pas un chiffre\n";
    else if (($line % 2) == 0)
        echo "\nLe chiffre $line est Pair\n";
    else
        echo "\nLe chiffre $line est Impair\n";
}
?>