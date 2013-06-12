<?php /*
Author : Gopala Krishna
File : home.php
Description: landing page
***********************************/
?>
<?php 
include 'head.php';
include 'header.php';

?>


<!-- REAL CONTENT 
****************************************-->
  <header class="page-header">
    <div class="container">
      <div class="row-fluid">
      <div class="span12">
              <h1>Registration/Sign in</h1>
      </div>
      </div>
     </div>
  </header>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="container">
        	<div class="row-fluid">
            	<div class="span12">
                	<div class="span6">
                    	<div class="area">
                            <form class="form-horizontal" name="sigin" method="post" action="login.php">
                                <div class="heading">
                                    <h4 class="form-heading">Sign In</h4>
                                </div>
                      
                                <div class="control-group">
                                    <label class="control-label" for="inputUsername">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputUsername" placeholder="E.g. ashwinhegde" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="Min. 8 Characters" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox"> Keep me signed in   ¦
                                            <a href="#" class="btn btn-link">Forgot my password</a>
                                        </label>
                                        <button type="submit" class="btn btn-success">Sign In</button>
                                        <button type="button" class="btn">Help</button>
                                    </div>
                                </div>	
                            </form>	
						</div>                           
                    </div>
                    <div class="span6">
                    	<div class="area">
                            <form class="form-horizontal" method="POST" name="form" action="registrationdb.php">
                            	<div class="heading">
                                    <h4 class="form-heading">Sign Up</h4>
                                </div>
<div class="control-group">
	<label class="control-label" for="firstname">First Name</label>
	<div class="controls">
		<input type="text" name="fname" placeholder="mahesh" required>
	</div>
</div>
<div class="control-group">
	<label class="control-label" for="lastname">Last Name</label>
	<div class="controls">
		<input type="text" name="lname" placeholder="chimmiri" required>
	</div>
</div>
<div class="control-group">
	<label class="control-label" for="username">Username</label>
	<div class="controls">
		<input type="text" name="username" placeholder="maheshnaughty" required>
	</div>
</div>
<div class="control-group">
	<label class="control-label" for="email" >Email</label>
	<div class="controls">
		<input type="email" name="email" placeholder="mahesh@leelam.com" required>
	</div>
</div>
<div class="control-group">
	<label class="control-label" for="phonenumber">Phone Number</label>
	<div class="controls">
		<input type="number" name="phone" placeholder="8121542630" required>
	</div>
</div>
<div class="control-group">
	<label class="control-label" for="designation">Functional Area</label>
	<div class="controls">
		<select name="accesslevel" required>
			<option value="0">Select Functional Area</option>
<option value="1">Execution Team</option>
<option value="2">Suppl Chain Management</option>
<option value="3">Human Resources</option>
<option value="4">Plant And Machinery</option>
		</select>
	</div>
</div>
<div class="control-group">
    <div class="controls">
      
      <button type="submit" class="btn btn-primary" name="sub">Submit</button>
    </div>
  </div>
</form>


						</div>                            
                    </div>
                </div>
            	
            </div>
        </div>
		</div>
		
	</div>
</div>



<!-- Testimonials -->



    </div>

</div>



<!-- END REAL CONTENT 
	***********************************************-->


	<?php
	include 'footer.php';

	?>