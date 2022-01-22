<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>All pages</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Registration.css">
  <link rel="stylesheet" type="text/css" href="cssExternal.csss">
	<link rel="stylesheet" type="text/css" href="dashstyle.css">
 	<!-- Fav icon -->
   <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   .Hinput
   {
     border:1px solid red;
   }
  </style>
</head>
<body style="background-color:rgb(188, 226, 241);">
            <!-----------Navigation Bar------------->
            <a class="btn" style="background-color:black;color:white;height:25px;width:70px;padding-top:2px;margin-left:10px;margin-top:10px" href="admindash.php">go back</a>
            <h1 style="text-align:center;font-family:initial">Information Of All Pages</h1>
            <table align="center" style="margin-top:10px;width:70%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Type</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Price</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Description</th>
            </tr>
            <?php
             $Query="SELECT * From pricepage";
             $result=mysqli_query($db,$Query);
             $check=mysqli_num_rows($result);
             if($check<=0)
             {
                 echo "<tr><td colspan='5' style='border:1px solid black;padding:10px;text-align:center;background-color:white;'>No order found</td></td>";
             }
             else
             {
                while($data=mysqli_fetch_assoc($result))
                {           
                    ?>
                <tr>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['id'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['type'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['name'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['price'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['description'] ?></td>
                </tr>
              
                <?php
             }
             
            ?>
            
            <?php
            }
           
            ?>        
            </table>
            <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>