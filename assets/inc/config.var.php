<?php  error_reporting(E_ERROR | E_WARNING | E_PARSE);
//error_reporting(0);
global $filename;
$exFileName = pathinfo($_SERVER["SCRIPT_NAME"]);
$filename=$exFileName['filename'];
// echo date('h A d l z F t L o y G i s u e I O T Z r U');
date_default_timezone_set('Asia/Calcutta');
// echo date('h A d l z F t L o y G i s u e I O T Z r U');
$present_year_code = date('y');

function lm_today($format){
	return date($format);
}
function lm_date_format($newformat,$datefromdb){
	
	return date($newformat, strtotime($datefromdb)); 

}

/*
for ($i=8; $present_year_code < 12; $present_year_code--) { 

echo "$present_year_code";

}*/

function year_codes($span){
	global $present_year_code;
	global $total_codes;

$total_codes = $present_year_code - 8;
echo '<select name="code" class="'.$span.'">';
echo "<option value=''>Select Branch Code </option>";
while ( $total_codes <= $present_year_code) {

	if (strlen($present_year_code) == 1) {
	$present_year_code = '0'.$present_year_code;
		echo '<option value='.$present_year_code.'>'.$present_year_code.'</option>';
	
	} else {
	echo "<option>". $present_year_code."</option>";
	
	}
	
	

	$present_year_code--;
}echo "</select>";
}

function gender_inverse($gender){

switch($gender){
	case 1:
		return $gender = array('Mr','Male');
	break;
	
	case 2:
		return $gender = array('Mrs', 'Female');
	break;
	
	case 3:
		return $gender = array('Ms', 'Female');


}


}


function lm_body_class($filename){
	global $filename;
// generating body classes for specific pages

	switch ($filename) {
		case 'sms-attendance':
			return $lm_body_class = 'validation';
			break;
		
		default:
			return $lm_body_class = 'lm_body';
			break;
	}

}

function lm_error_message($error_message){

echo '
		<!-- END User details info box -->
<div class="modal hide " id="username_password_box" style="ackground-color: #D9EDF7;color: #190E97;">
	<div class="modal-header"><button class="close" data-dismiss="modal">×</button>
		<h3>Message</h3>
	</div>
	<div class="modal-body">
	'.'<div style="text-algin:center;font-size:26px" class="well"><div style="color:red"> '. $error_message  .' </div></div>'.'
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Close</a>
	</div>
</div>
<div id="username_password_display">
	<a data-toggle="modal" data-backdrop="static" href="#username_password_box" id="upd"></a>
</div>
<!-- END User details info box -->

	';

}
function lm_success_message($success_message)
{
	echo '
		<!-- END User details info box -->
<div class="modal hide " id="username_password_box" style="ackground-color: #D9EDF7;color: #190E97;">
	<div class="modal-header"><button class="close" data-dismiss="modal">×</button>
		<h3>Message</h3>
	</div>
	<div class="modal-body">
	'.'<div style="text-algin:center;font-size:26px" class="well"><div style="color:green"> '. $success_message  .' </div></div>'.'
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Close</a>
	</div>
</div>
<div id="username_password_display">
	<a data-toggle="modal" data-backdrop="static" href="#username_password_box" id="upd"></a>
</div>
<!-- END User details info box -->

	';
}

?>
