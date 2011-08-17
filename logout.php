<?php
if (is_array($_COOKIE)) {  
	foreach ($_COOKIE as $key => $value) {  
		setcookie($key, $value, time() - 3600);
	}  
}
header("Location:index.php");
?>