<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>All User</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Registration.css">
  <link rel="stylesheet" type="text/css" href="cssExternal.csss">
	<link rel="stylesheet" type="text/css" href="dashstyle.css">
 	<!-- Fav icon -->
   <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:rgb(188, 226, 241);">
<a class="btn" style="background-color:black;color:white;height:25px;width:70px;padding-top:2px;margin-left:10px;margin-top:10px" href="admindash.php">go back</a>
            <!-----------Navigation Bar------------->
            <h1 style="text-align:center;font-family:initial">Information Of All Registered Users</h1>

            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User Contact No</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User Email</th>
            </tr>
                  <?php
                      
                        $qry="select * from usertable";
                        $run=mysqli_query($db,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='4' style='border:1px solid black;padding:10px;text-align:center;background-color:white;'>No Product Found<td></tr>";
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                              <tr>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:white;"><?php echo $data['id']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:white;"><?php echo $data['name']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:white;"><?php echo $data['contact_no']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:white;"><?php echo $data['email']; ?></td>
                             
                              </tr>
                              <?php
                            }
                        }

        

                  ?>
            </table>
</body>
</html>