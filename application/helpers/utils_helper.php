<?php
function dump($obj, $die = true){
	echo "<pre>";
	var_dump($obj);
	if($die){
		die();
	}
}