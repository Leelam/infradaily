
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
              <h1>Quality Assurance</h1>
      </div>
      </div>
     </div>
  </header>



        <div class="container">
          <div class="row-fluid">
        <div class="span9">
         <p>As an operator in the construction, one has to manage all quality, health & safety and environmental aspects of construction works, from design to completion. </p>
         <p>Every organization wants to show responsibility by making sure that its facilities, equipment, products and services comply with quality, health & safety, environmental and social responsibility imperatives, whether they are:</p>
         <p><b>-regulatory: </b>imposed by applicable codes or regulations which condition the “license to operate”,</p>
         <p><b>-voluntary:</b> based on sector specific requirements or recognized international standards,</p>
        <p><b>-proprietary:</b> based on client's own schemes, standards or requirements.</p>
        <p>This portal enables you to enlist and identify as a Quality Assurance experts, who will enable the clients to do so and they are able to carry out inspections of client's facilities, equipment and products, and audits of your systems and processes against practically any referential basis. In a number of cases, inspections and audits will ultimately enable clients to grant a certification from the Certifying Agency to any organisation.
</p>
<p><b>Associated Quality Assurance Experts are:</b></p>
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


   