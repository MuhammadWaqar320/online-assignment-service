<?php
   
   include('connection.php');
   $id=$_GET['id'];
   $qry="DELETE FROM `orderdone` WHERE  `id`='$id'";
   $chk=mysqli_query($db,$qry);
   if($chk==1)
   {
       echo "<script>window.alert('Order is deleted')
       window.location='deleteOrder.php';
       </script>";
   }
   else
   {
       echo "<script>window.alert('Order is not delete')
       window.location='deleteOrder.php';
       </script>";
   }
?>