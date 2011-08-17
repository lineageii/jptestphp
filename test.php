<?php

function customError($errno, $errstr) {
	echo "<b>Error:</b> [$errno] $errstr</br>";
    die();
}

set_error_handler(customError);

$test=2;
if($test>1){
	trigger_error("must be 1 ");
}



?>