<?php
include_once("Connect.class.php");
$obj=new connect();
?>
<?php
$select=$obj->conn->prepare("SELECT * FROM short_films");
$select->execute();
$selectinfo=$select->fetch();
echo $selectinfo['sf_name'];
echo $selectinfo['sf_code'];

echo  $selectinfo['sf_img'];

?>
<div class="span3">
<img src="http://img.youtube.com/vi/1lPozjD-WJA/0.jpg">
</div>
