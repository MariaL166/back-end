<?php
$string = "São Paulo";
$nova_string = preg_replace(
    array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/"),
    explode(" ", "a A e E i I o O u U n N"),
    $string
);
echo ($nova_string);