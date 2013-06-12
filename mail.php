<?php

include_once('assets/inc/Connect.class.php');
$obj=new connect();
?>
<?php
$search=$obj->conn->prepare("SELECT * FROM civil_register");
$search->execute();
$searchinfo=$search->fetch();
echo $searchinfo['username'];
?>