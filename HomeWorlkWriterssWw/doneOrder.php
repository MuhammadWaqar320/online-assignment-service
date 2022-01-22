<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Done order</title>
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
            <h1 style="text-align:center;font-family:initial">Information Of All Completed Orders</h1>
            <table align="center" style="margin-top:10px;width:70%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Order Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Order Type</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User's Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User's Email</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User's Contact No</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Topic</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Urgency</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">No of Pages</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Academic level</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Description</th>
            </tr>
            <?php
             $Query="SELECT * From orderdone";
             $result=mysqli_query($db,$Query);
             $check=mysqli_num_rows($result);
             if($check<=0)
             {
                 echo "<tr><td colspan='10' style='border:1px solid black;padding:10px;text-align:center;background-color:white;'>No order found</td></td>";
             }
             else
             {
                while($data=mysqli_fetch_assoc($result))
                {
                  $Forky=$data['o_d_id'];
                  $query="SELECT * From usertable where id='$Forky'";
                  $Result=mysqli_query($db,$query);
                  $Data=mysqli_fetch_assoc($Result)
                   
                    ?>
                <tr>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['id'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['type'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $Data['name'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $Data['email'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $Data['contact_no'] ?></td>
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
            </table>
            <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>