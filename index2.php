<?php

$names = ['Mina', 'Saneraleksmander', 'Nimi3', 'Nimi4', 'santehnik', 'Nimi6', 'Nimi121212'];

var_dump(array_filter($names, function($name){
    return strlen($name) <= 5;
}));