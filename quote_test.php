<?php 

	/* ==========================  Define variables ========================== */

	#Your e-mail address
	define("__TO__", "admin@adventsteel.com");

	#Message subject
	define("__SUBJECT__", "examples.com = From:");

	#Success message
	define('__SUCCESS_MESSAGE__', "Your message has been sent. Thank you!");

	#Error message 
	define('__ERROR_MESSAGE__', "Error, your message hasn't been sent");

	#Messege when one or more fields are empty
	define('__MESSAGE_EMPTY_FILDS__', "Please fill out  all fields");

	/* ========================  End Define variables ======================== */

	//Send mail function
	function send_mail($to,$subject,$message,$headers){
		if(@mail($to,$subject,$message,$headers)){
			//echo json_encode(array('info' => 'success', 'msg' => __SUCCESS_MESSAGE__));
			//echo $message;
			header('Location: thank_you2.html');
			exit();
		} else {
			echo json_encode(array('info' => 'error', 'msg' => __ERROR_MESSAGE__));
		}
	}
		// personal info
		$name 	 = $_POST['full-name'];
		$address = $_POST['address'];
		$mail = $_POST['mail'];
		$tel = $_POST['tel'];
		//project basic
		$owner_name = $_POST['owner-name'];
		$owner_address = $_POST['owner-address'];
		$building_code = $_POST['building-code'];
		// building shape
		$frame_type = $_POST['frame-type'];
		$width = $_POST['width'];
		$length = $_POST['length'];
		$roof_slope = $_POST['roof-slope'];
		$sidewall = $_POST['sidewall'];
		$endwall_c = $_POST['endwall-c'];
		$endwall_d = $_POST['endwall-d'];
		//covering and trim
		$roof_type = $_POST['roof-type'];
		$roof_color = $_POST['roof-color'];
		$wall_type = $_POST['wall-type'];
		$wall_color = $_POST['wall-color'];
		$trim_type = $_POST['trim-type'];
		$trim_color = $_POST['trim-color'];
		//grit condition
		$grit_type = $_POST['grit-type'];
		$grit_type2 = $_POST['grit-type2'];
		$base_fixture_indicate_trim_color = $_POST['base-fixture-indicate-trim-color'];
		$base_trim_type = $_POST['base-trim-type'];
		$comment = $_POST['comment'];
		
 
			$to = __TO__;
			$subject = __SUBJECT__ . ' ' . $name;
			$message = '
			<html>
			<head>
			  <title> thank you!</title>
			<style>
				.header{
				width: 500px;
					margin: 0 auto;
					
				}
			</style>
			</head>
			<body>
			
			<div class="header">
			<p> Thank you for contact with us</p>
			<p> This is your information you got</p>
			</div>
			
			  <table style="border-collapse:collapse;border-spacing:0; width: 500px; font-family: console; font-size: 14px; margin: 0 auto;" border="1">
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Name:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $name .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $mail .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Phone:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $tel .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $owner_name .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $owner_address .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $building_code .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $frame_type .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $width .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $length .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $roof_slope .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $sidewall .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $endwall_c .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $endwall_d .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $roof_type .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $roof_color .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $wall_type .'</td>
				</tr>
				
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $wall_color .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $trim_type .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $trim_color .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th> 
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $grit_type.'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $grit_type2 .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $base_fixture_indicate_trim_color .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $base_trim_type .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Description:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'.  $comment .'</td>
				</tr>
			
			  </table>
			</body>
			</html>
			';

			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$headers .= 'From: ' . $mail . "\r\n";

			send_mail($to,$subject,$message,$headers);
			
			//echo $message;
		
	
 ?>