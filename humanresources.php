
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
              <h1>Human Resources</h1>
      </div>
      </div>
     </div>
  </header>



        <div class="container">
          <div class="row-fluid">
        <div class="span9">
        	<p>Human resource management (HRM, or simply HR) is the management of an organization's workforce, or human resources. It is responsible for the attraction, selection, training, assessment, and rewarding of employees, while also overseeing organizational leadership and culture, and ensuring compliance with employment and labor laws.</p>
        	<p>REGISTER IN THIS CAREER FORUM FROM THE BIGGEST JOB GROUP. Be a PART OF THIS platform and enable yourself get identified to the world of opportunities.  WHAT ARE YOU WAITING FOR ? REGISTER NOW AND START INTERACTING WITH THE BEST IN CLASS PEOPLE.</p>
        	<p>For an employeer , it is an opportunity to get the cream of the stream.</p>

<p><b>Available Resources:</b></p>
          <?php
$Execution=$obj->conn->prepare("SELECT * FROM civil_hr");
$Execution->execute();
                    echo "   <table class='table table-bordered'>";
echo "<th>s.no</th>";
echo "<th>Name</th>";
echo "<th>Field of Expertise</th>";
echo "<th>Years of Experience</th>";
echo "<th>Present Designation</th>";
echo "<th>Contact Details</th>";
echo "<th>Resume</th>";
while($Executionteam=$Execution->fetch()){
?>
<tr>
<td><?php echo $Executionteam['sno']; ?></td>
<td><?php echo $Executionteam['fname']; ?></td>
<td></td>
<td></td>
<td><?php echo $Executionteam['designation']; ?></td>
<td><?php echo $Executionteam['phone'];
echo "<br>";
echo $Executionteam['email'];
?>

</td>
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


   