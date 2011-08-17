<?php
// set-cookie

// 一个月后过期
$monthAgo = time() + 3600 * 24 * 30;

$ksCnName = $_POST['ksCnName'];
$ksEnName = $_POST['ksEnName'];
$ksid = $_POST['ksid'];
setcookie("ksCnName", $ksCnName, $monthAgo);
setcookie("ksEnName", $ksEnName, $monthAgo);
setcookie("ksid", $ksid, $monthAgo);

header("Location: ../upload.php");


?>