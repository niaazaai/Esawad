<?php 

function makeImageFromName($name){
	$shortName = ""; 
	$names = explode(" ", $name); 
    foreach ($names as $l) {
        $shortName .= $l[0];
    }
	return $shortName; 
}