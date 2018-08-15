<?php

function dab_prog_type($type) {

  $progtype = array(
    "none",
    "News",
    "Current Affairs",
    "Information",
    "Sport",
    "Education",
    "Drama",
    "Arts",
    "Science",
    "Talk",
    "Pop Music",
    "Rock Music",
    "Easy Listening",
    "Light Classical",
    "Classical Music",
    "Other Music",
    "Weather",
    "Finance",
    "Children\'s",
    "Factual",
    "Religion",
    "Phone In",
    "Travel",
    "Leisure",
    "Jazz and Blues",
    "Country Music",
    "National Music",
    "Oldies Music",
    "Folk Music",
    "entry 29 not used",
    "entry 30 not used",
    "entry 31 not used");

  return progtype[$type];
}

?>
