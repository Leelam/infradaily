
<?php
include 'head.php';
include 'header.php';
include_once('assets/inc/Connect.class.php');
$obj=new connect();
?>

    <!-- NAVBAR
    ================================================== -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div id="the_real_content">
  



        <div class="container">
          <div class="row-fluid">
        <div class="span12">
        	<?php
function lm_unique_number($limitnum){
return substr(number_format(time() * rand(),0,'',''),0,$limitnum);
}
$unique=new connect();
$uniquenumber=$unique->conn->prepare("SELECT idusers FROM lm_users ");
$uniquenumber->execute();
while($uniquenumberarray=$uniquenumber->fetch()){
$i_lm_unique=lm_unique_number(8);
}

$insert=$obj->conn->exec("INSERT INTO lm_users(lm_unique,email,username,phone,accesslevel)VALUES('$i_lm_unique','$_POST[email]','$_POST[username]','$_POST[phone]','$_POST[accesslevel]')");

if($_POST['accesslevel'] == 1)
{
$insert=$obj->conn->exec("INSERT INTO civil_et(lm_unique,fname,lname,username,email,phone,designation)VALUES('$i_lm_unique','$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[accesslevel]')");	
}elseif ($_POST['accesslevel'] == 2) {
	$insert=$obj->conn->exec("INSERT INTO civil_scm(lm_unique,fname,lname,username,email,phone,designation)VALUES('$i_lm_unique','$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[accesslevel]')");
}elseif ($_POST['accesslevel'] == 3) {
	$insert=$obj->conn->exec("INSERT INTO civil_hr(lm_unique,fname,lname,username,email,phone,designation)VALUES('$i_lm_unique','$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[accesslevel]')");
}elseif ($_POST['accesslevel'] == 4) {
	$insert=$obj->conn->exec("INSERT INTO civil_pm(lm_unique,fname,lname,username,email,phone,designation)VALUES('$i_lm_unique','$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[accesslevel]')");
}
?>
        	

            </div>
            
        </div>
  </div>
</div>


    <!-- Footer
    ================================================== -->
  <?php
  include 'footer.php';
  
  ?>
    </body>
  </html>


   