<?php
include "connection.php";
$Id = $_GET['id'];
$qry="select * from usertable WHERE id='$Id'";
$run=mysqli_query($db,$qry);
$data=mysqli_fetch_assoc($run);
$to_email =$data['email'];
$subject = "HomeWork";
$body = "Hi, Dear user your work has been completed now you can download your work from our website thehomeworkwriters.com.";

$Qry="select * from admin";
$Run=mysqli_query($db,$Qry);
$Data=mysqli_fetch_assoc($Run);
$from=$Data['email'];
$headers = "From:".$from;
if (mail($to_email, $subject, $body, $headers)) 
{
    echo "<script>Email sent successfully
    window.location='inProcessOrder.php.php';
    </script>";
}
 else
{
    echo "<script>Email sending failed....
    window.location='inProcessOrder.php';
    </script>";
}
 ?>
