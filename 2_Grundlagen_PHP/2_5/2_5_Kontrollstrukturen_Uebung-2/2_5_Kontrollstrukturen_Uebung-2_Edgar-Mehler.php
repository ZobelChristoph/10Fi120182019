<?php
$note = "";
$eingabe = 100;

switch($eingabe)
{
    case $eingabe <= 100 && $eingabe >= 92: $note = "sehr gut";break;
    case $eingabe <= 91 && $eingabe >= 81: $note = "gut";break;
    case $eingabe <= 80 && $eingabe >= 67: $note = "befriedigend";break;
    case $eingabe <= 66 && $eingabe >= 50: $note = "ausreichend";break;
    case $eingabe <= 49 && $eingabe >= 30: $note = "mangelhaft";break;
    case $eingabe <= 29 && $eingabe >= 0: $note = "ungenügend";break;
    default: $note = "unpassende Eingabe";
}

echo $note;