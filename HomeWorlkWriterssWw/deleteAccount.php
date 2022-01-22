<?php
   include ("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User Account</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Registration.css">
  <link rel="stylesheet" type="text/css" href="cssExternal.csss">
	<link rel="stylesheet" type="text/css" href="dashstyle.css">
 	<!-- Fav icon -->
   <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:pink">

            <!-----------Navigation Bar------------->
            <nav class="navbar navbar-danger " style="background-color:rgb(75, 35, 75);height: 77px;border-radius: 0px;">
   <center>          <form class="form-inline" style="margin-top:20px;" method="post" action="deleteAccount.php">
            
               <input class="form-control mr-sm-2 Hinput" style="width:500px;" type="search" placeholder="Enter name of user for delete account" aria-label="Search" name="pname">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color:red;border-radius:8px;" name="submit">Search</button> 
                </form> </center>
              </nav><a class="btn" style="background-color:black;color:white;height:25px;width:70px;padding-top:2px;margin-left:10px;margin-top:10px" href="admindash.php">go back</a>
            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User Contact No</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">User Email</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Delete Account</th>
            </tr>
                  <?php
                      if(isset($_POST['submit'])){
                        $NAME=$_POST['pname'];
                        $qry="select * from usertable where name LIKE '%$NAME%'";
                        $run=mysqli_query($db,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='5' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Account Found<td></tr>";
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                             <tr>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:white;"><?php echo $data['id']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:white;"><?php echo $data['name']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:white;"><?php echo $data['contact_no']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:white;"><?php echo $data['email']; ?></td>
                                 <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><a href="deletedataAccount.php?id=<?php echo $data['id']?>">Delete</a></td>
                              </tr>
                              <?php
                            }
                        }

                      }

                  ?>
            </table>
</body>
</html>