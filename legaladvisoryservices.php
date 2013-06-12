
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
  <header class="page-header">
    <div class="container">
      <div class="row-fluid">
      <div class="span12">
              <h1>Legal Advisory Services</h1>
      </div>
      </div>
     </div>
  </header>



        <div class="container">
          <div class="row-fluid">
        <div class="span9">
          <p>Arbitration in a mode for settlement of disputes between the parties. It has a social purpose to fulfill. Today, it has urgency when there has been an explosion of litigation in the courts of Law. The judicial system prevalent in courts is governed by procedural Laws. Many provisions are very technical and have become synonymous with technicalities and obstructions leading to delays.</p>
          <p>This enlisted legal experts over here will offer complete assistance to clients on various legal matters pertaining to corporate & commercial sectors.These experts are well aware of the rules & regulations and laws framed by Government of India. 
</p>
<p>These associate lawyers have outstanding knowledge and experience in drafting various kind of agreements involving different transaction. Our legal experts help in drafting various kinds of agreements such as non-disclosure agreements, vendor contracts, supply agreements and office leases. Agreement is every promise and every set of promises forming the consideration for each other and a promise is defined as an amplified proposal.

</p>
<p><b>Associated legal experts:</b></p>
<?php
$Execution=$obj->conn->prepare("SELECT * FROM civil_scm");
$Execution->execute();
                    echo "   <table class='table table-bordered'>";
echo "<th>s.no</th>";
echo "<th>Name ";
echo "<th>Expertise</th>";
echo "<th>Location</th>";
echo "<th>Contact Details</th>";
echo "<th>Profile</th>";

while($Executionteam=$Execution->fetch()){
?>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

</tr>
                       <?php
}
echo "</table>";
?>   
            </div>
            <div class="span3">
<?php  
include_once 'servicessidebar.php';
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


   