<?php 
$array = array();
echo "> Hoeveel steden wil je toevoegen?" . PHP_EOL;
$aantal = readline();
for ($i=0; $i < $aantal; $i++) { 
    echo "> Welk land wil je toevoegen?" . PHP_EOL;
    $land = readline();
    echo "> Wat is de hoofstad?" . PHP_EOL;
    $stad = readline();
    $array[$land]=$stad;
}
echo "> Je hebt deze landen en steden:" . PHP_EOL;
foreach ($array as $land => $stad) {
    echo($land . ", " . $stad) . PHP_EOL;
}
