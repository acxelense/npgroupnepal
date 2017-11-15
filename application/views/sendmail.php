<?php 

$name= $_post('full_name');
		$to= $_post('email');
		$phone= $_post('phone');
		$txt= $_post('message');
				
 = $email;
$subject = "My subject";
 
$headers = $name . "\r\n" .
"CC: bhusanbhusal@gmail.com";

$status = mail($to,$subject,$txt,$headers);

			
			if($status)	
			{
					echo json_encode(array('successMsg' => 'Message sent sucessfully.'));
			}
			else
			{
				echo json_encode(array('errorMsg' => 'Oops!!,Something went wrong!!'));
			}
?>
				