<?php
    // EMAIL Notification Script
    $email = $name = '';
	$errors = array('name' => '', 'email' => '');

	if(isset($_POST['submit'])){
		
		// check name
		if(empty($_POST['name'])){
			$errors['name'] = 'A name is required';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['name'] = 'Name must be letters and spaces only';
			}
		}

        // check email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required';
        } else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Email must be a valid email address';
            }
        }

        //--------------Send Email------------------------

        $to = $client_email;

        $email_subject = "Convid-Screening Submission";

        $email_body = "
            Hi $name, <br><br>

            Please take your time to fill out the SalonEverywhere Pre-Appointment COVID Screening Tool.
            <br><br>
            <a href='https://{{ context.location.host }}/pages/'>Covid Screener</a>
            <br><br>
            Thank you!";

        $headers = "From: no-reply@example.com\n";

        $headers .= "Reply-To: no-reply@example.com";

        mail( $to, $email_subject, $email_body, $headers);

        //-----------Redirect to the 'thank you' page----------

        header('Location: confirm.html');

	} // end POST check
?>
