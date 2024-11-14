<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    if(empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $receiver = "frankizuchukwu094@gmail.com";
            $subject = "from: $name<$email>";
            $body = "Name: $name\nEmail: $phone\nPhone: $website\nWebsite: $message\nMessage: $message\n\Regards, \n$name";
            $sender = "From: $email";
            if(mail($receiver, $subject, $body, $sender)){
                echo "your message has been sent";
            }else{
                echo"sorry, failed to send your message";
            }
        }else{
            echo"Enter a valid email address!";
        }
    }else{
        echo'Email and password field is required';
    }
?>