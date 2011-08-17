<?php
require_once '../includes.php';
require_once BASE.'/server/model/Userinfo.php';
require_once BASE.'/server/model/base/DAO.php';


$ksid = $_COOKIE['ksid'];
$imageFileName = $_POST['imageFileName'];

// save image to db
$userinfoDao = DAO::getDAO('UserinfoDAO');
$userinfoDao->update('ksimgsrc = :ksimgsrc WHERE id = :ksid', array(':ksimgsrc'=>$imageFileName, ':ksid' => $ksid) );

header("Location:../index.php");
?>