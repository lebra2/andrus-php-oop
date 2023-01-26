<?php

$names = ['Mina', 'Saneraleksmander', 'Nimi3', 'Nimi4', 'santehnik', 'Nimi6', 'Nimi121212'];

$lessthanfive = array_filter($names, function($name){
    return strlen($name) <= 5;
});

function upper($element){
    return strtoupper($element);
}

$caps = array_map('upper', $names);

var_dump($lessthanfive);
var_dump($caps);

