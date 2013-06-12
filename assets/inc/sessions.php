<?php
//echo $_COOKIE['applink'];

include_once 'config.var.php';
//require_once("Connect.class.php"); // required class to connect the database

$loadedUserName = $_SESSION['username'];
$loadedAccessLevel = $_SESSION['accesslevel'];
$lm_unique = $_SESSION['lm_unique'];
$GLOBALS['userpath'] =  $userpath = $_SESSION['userpath'];
// http://localhost/cms/
define('SITE_BASE_PATH','http://localhost/github/infradaily');



if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['login'])) {

require_once("Connect.class.php"); // required class to connect the database
$RunConnect = new Connect(); // Creating a new object
global $loadedUserName;
$postedUserName=$_POST['username']; // taking user nmae directly from guest input field : username
$postedPassword=md5($_POST['password']); // taking user nmae directly from guest input field : password
$stmt = $RunConnect->conn->prepare("SELECT * FROM lm_users WHERE username=? AND password=? AND lm_status = 1 LIMIT 1"); // selecting single record
$stmt->execute(array($postedUserName,$postedPassword)); // taking 
$stmt= $stmt->fetch(); // fetching the signle record

if ($stmt) {
$loadedUserName = $_SESSION['username'] = $stmt['username'];
$lm_unique = $_SESSION['lm_unique'] = $stmt['lm_unique'];
$loadedAccessLevel = $_SESSION['accesslevel'] = $stmt['accesslevel'];
if ( 1 == $loadedAccessLevel ) {
		$_SESSION['userpath'] = "Location:".SITE_BASE_PATH."manage/dashboard.php";
	}elseif (2 == $loadedAccessLevel ) {
		$_SESSION['userpath'] = "Location:".SITE_BASE_PATH."manage/dashboard.php";
	}elseif (99 == $loadedAccessLevel ) {
		$_SESSION['userpath'] = "Location:".SITE_BASE_PATH;
	}elseif ( 3 == $loadedAccessLevel ) {
		$_SESSION['userpath'] = "Location:".SITE_BASE_PATH."manage/dashboard.php";
	}elseif (5 == $loadedAccessLevel ) {
		$_SESSION['userpath'] = "Location:".SITE_BASE_PATH."/leelam/opendata/";
	}else{
		$_SESSION['userpath'] = "Location:".SITE_BASE_PATH."login.php";
	}
		$userpath = $_SESSION['userpath'];
	
		header($userpath);
	
}else{
	$loadingError = TRUE;
}
}
$GLOBALS['loadedAccessLevel'] = $loadedAccessLevel; // init $loadedAccessLevel as Global
function userPath(){
	if ($GLOBALS['loadedAccessLevel'] != '') {

	header($GLOBALS['userpath']);
	}
}
function userNull(){
	header("Location:".SITE_BASE_PATH."login.php");
}


	?>
