<?php

?>
<?php
include "connection.php";
session_start();
$Id = $_GET['id'];
$qry="select * from orderpending where o_p_id='$Id'";
$run=mysqli_query($db,$qry);
?>
 <script>
        function back()
        {
            var msg = '<?php echo $Id ?>';
    window.location = "userdash.php?id=" + msg;
        }
  
        </script>
    <a class="btn" style="background-color:black;color:white;margin-left:10px;height:25px;width:70px;font-size:14px;padding-top:0px;margin-top:10px" onclick="back()">go back</a>

<h1 style="text-align:center;font-family:initial">Information Of your Orders</h1>
<table align="center" style="margin-top:10px;width:70%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Order Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Order Type</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Topic</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Urgency</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">No of Pages</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Academic level</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Description</th>
            </tr>

<?php
if(!$run)
{
    echo "<tr><td colspan='7' style='border:1px solid black;padding:10px;text-align:center;background-color:white;'>No order found</td></td>";
}
else
{
   while($data=mysqli_fetch_assoc($run))
   {  
       ?>
   <tr>
       <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['id'] ?></td>
       <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['type'] ?></td>
       <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['topic'] ?></td>
       <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['urgency'] ?></td>
       <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['No_of_page'] ?></td>
       <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['academic_level'] ?></td>
       <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['description'] ?></td>
   </tr>
 
   <?php
}

?>

<?php
}


?>
<html>
    <head>
       <title>Order Information</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/dashstyle.css">
        <!-- Fav icon -->
        <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
     
      
      </style>
    </head>
    <body >
            
    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
    </html>