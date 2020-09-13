				<?php
         $to = "kayes.hasan121@gmail.com@gmail.com";
         $from = $_POST['email']; // this is the sender's Email address
		$fname = $_POST['name'];
		$subject = "Form submission";
		$message = $fname. $from . " wrote the following:" . "\n\n" .$_POST['phone'] . $_POST['message'];
         $header = "abc@subdomain.com";
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>