<?php
   
   include('connection.php');
   $id=$_GET['id'];
   $qry="DELETE FROM `usertable` WHERE  `id`='$id'";
   $chk=mysqli_query($db,$qry);
   if($chk==1)
   {
       echo "<script>window.alert('UserAccount is deleted')
       window.location='deleteOrder.php';
       </script>";
   }
   else
   {
       echo "<script>window.alert('UserAccount is not delete')
       window.location='deleteOrder.php';
       </script>";
   }
?>