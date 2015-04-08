<?php

$size = 30;
$h = 4;

$head = '<?xml version="1.0" standalone="no" ?>

<world gridsize="'.$size.','.$size.','.$size.'" windowSize="1800,900">
	<camera target="50,50,0" directionSpherical="30,30,100" angle="45"/>
	<spotlight target="80,10,80" directionSpherical="60,45,80" angle="60"/>

	<blockList color="128,255,128" blocksize="10.0,10.0,10.0">';

$master = '<block position="5,5,4" color="255,0,0" master="true"/>';

$line = '';

for ($i=0; $i < $size; $i++) {
	for ($ii=0; $ii < $size; $ii++) {

		if($i < 5){
		$base = ran($size);
		$line .= '<blocksLine plane="'.$i.'" line="'.$ii.'" values="'.$base.'"/>';
		}

	}
}

$fhead = "</blockList></world>";


$file = $head.$master.$line.$fhead;

file_put_contents("test.xml", $file);

function ran($size){
	$base = "";
	for ($i=0; $i < $size; $i++) { 
		$base .= rand(0,1);
	}
	return $base;
}

?>
