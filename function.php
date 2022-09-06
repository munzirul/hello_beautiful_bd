<?php

$a = 5;

function sum() { 
    $a = 6; 
    global $a; 
    echo $a;
}