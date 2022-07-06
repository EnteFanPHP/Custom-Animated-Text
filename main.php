<?php

system("clear");
$text = "By EnteFan"; // <- text goes here
$charLeng = strlen($text);
$print = "";
for($i = 0; $i < $charLeng; $i++) {
    $print .= $text[$i];
    echo($print);
    usleep(250000); // 1/4 of second
    system("clear");
}
echo("-------------------------\n");
echo("Finished Text: '".$text."'\n");
echo("Coded by EnteFan\n");
echo("Visit me on GitHub!\n");
echo("-------------------------\n");
