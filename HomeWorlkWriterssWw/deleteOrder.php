<?php
   include ("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Order</title>
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
   <center>          <form class="form-inline" style="margin-top:20px;" method="post" action="deleteOrder.php">
            
               <input class="form-control mr-sm-2 Hinput" style="width:500px;" type="search" placeholder="Search order by id" aria-label="Search" name="pname">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color:red;border-radius:8px;" name="submit">Search</button> 
                </form> </center>
              </nav><a class="btn" style="background-color:black;color:white;height:25px;width:70px;padding-top:2px;margin-left:10px;margin-top:10px" href="admindash.php">go back</a>
            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Order Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Order Type</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Topic</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Urgency</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">No of Pages</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Academic level</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Description</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:orangered;color:white;">Delete</th>
            </tr>
                  <?php
                      if(isset($_POST['submit'])){
                        $NAME=$_POST['pname'];
                        $qry="select * from orderdone where id LIKE '%$NAME%'";
                        $run=mysqli_query($db,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='7' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Product Found<td></tr>";
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                              <tr>
                              <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['id'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['type'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['topic'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['urgency'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['No_of_page'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['academic_level'] ?></td>
                    <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><?php echo $data['description'] ?></td>
                                 <td style="border:1px solid black;background-color:white;padding:10px;text-align:center;"><a href="deletedata.php?id=<?php echo $data['id']?>">Delete</a></td>
                              </tr>
                              <?php
                            }
                        }

                      }

                  ?>
            </table>
</body>
</html>