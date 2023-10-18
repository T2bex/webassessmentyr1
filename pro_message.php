<?php
error_reporting(0);

$name = strtoupper($_POST ['firstname']);
$lname = strtoupper($_POST ['lastname']);
$email = strtolower($_POST ['email']);
$subject = strtoupper($_POST['subject']);
$message = $_POST['messages'];

if(!$name || !$lname || !$email)
{
    $inputerror = 'yes';
    include('contactus.php');
    exit;
}

if(!$email){
    $emailerror = 'yes';
    include('contactus.php');
    exit;
}

include('connect.php');

$query = "insert into message set firstname = '$name', lastname = '$lname', email = '$email', subject = '$subject', message_main = ''$message";

$result = mysqli_query($conn,$query);


if($result){
    $formsuccess = 'yes';
    include('contactus.php');
    
    $mailcontent = 'Dear Tobechukwu, someone just sent a message from your website '."\n\n"
                .'Firstname: '.$name."\n"
                .'Lastname: '.$lname."\n"
                .'Email: '.$email."\n"
                .'Subject: '.$subject."\n"
                .'Message: '.$message."\n";

    $to = 'tobechukwu14@yahoo.com';
    $subjects = 'Message From Your Website';
    $from = "From: noreply@Tobeassignment.com";

    mail($to,$subjects,$mailcontent,$from);
    // exit;
}

else{
    $formerror = 'yes';
    include('contactus.php');
    exit;
}
?>