<?php

$region = $_POST['region'];

$shoe = $_POST['shoe'];

$size = $_POST['size'];

$site = $_POST['site'];

$customshoe = $_POST['id'];

if($shoe == "null") {
	$stylecode = $customshoe;
} else {
	$stylecode = $shoe;
}

if($site == "Adidas") {

	if ($region == "GB") {
		$TLD = ".co.uk";
	} else {
		$TLD = ".com";
	}

	echo "http://www.adidas" . $TLD . "/on/demandware.store/Sites-adidas-" . $region . "-Site/en_" . $region . "/Cart-MiniAddProduct?pid=%20" . $stylecode . "_" . $size . "&pid=%20" . $stylecode . "_%20" . $size;
} else if($site == "Pacsun") {
	echo $site;
} else {
	if($region == "GB") {
		$RC = "UK";


	if($size == "570") {
		$okinisize = "008";
	} else if($size == "590") {
		$okinisize = "004";
	} else if($size == "610") {
		$okinisize = "005";
	} else if($size == "630") {
		$okinisize = "007";
	} else if($size == "650") {
		$okinisize = "009";
	} else if($size == "670") {
		$okinisize = "001";
	} else if($size == "690") {
		$okinisize = "003";
	} else {
		$okinisize = "005";
	}

	echo "https://www.oki-ni.com/on/demandware.store/Sites-Okini" . $RC . "-Site/en/Cart-AddProduct?pid=" . $stylecode . "-" . $okinisize . "&format=ajax";
	} else {
		echo "Oki-ni is not in the U.S. at this time";
	}

}

// /on/demandware.store/Sites-OkiniUK-Site/en/Cart-AddProduct?pid=033416&format=ajax

?>