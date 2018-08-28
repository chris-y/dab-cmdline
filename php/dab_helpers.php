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

  return $progtype[$type];
}

function dab_is_plus($ascty) {
  if($ascty == 63) {
    return true;
  } else {
    return false;
  }
}

function dab_data_prog_type($ptype) {
	$type = "unknown";

	if($ptype == 0x002) {
		$type = "SlideShow";
	} else if ($ptype == 0x004) {
		$type = "TPEG";
	} else if ($ptype == 0x007) {
		$type = "SPI";
	} else if ($ptype == 0x009) {
		$type = "DMB";
	} else if ($ptype == 0x00d) {
		$type = "Filecasting";
	} else if ($ptype == 0x44a) {
		$type = "Journaline(r)";
	}
	
	return $type;
}

function dab_data_serv_type($dscty) {
	$type = "data";

	if($dscty == 5) {
		$type = "TDC";
	} else if ($dscty == 24) {
		$type = "MPEG2";
	} else if ($dscty == 60) {
		$type = "MOT";
	}
	
	return $type;
}

?>
