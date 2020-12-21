<?php

    $errors=[];

     if(isset($_POST['submit'])){
        
        //Checking for errors
	    for($i = 0; $i < 14; $i++){
            if(empty($_POST['n'. ($i+1)])){
                $errors[$i]=$i+1;  
               // echo $errors[$i] . '<br />';
            }     
        }

        $e = count($erros);

        if(array_filter($errors)){
			echo "There are $e empty fields in the form ";
		} else {
			//Redirects to success page
			header('Location: thankyou.html'); 
		}

	} // end POST check*/

?>


