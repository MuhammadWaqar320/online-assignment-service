<?php
include "connection.php";
?>
<html>
    <head>
       <title>Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/dashstyle.css">
        <!-- Fav icon -->
        <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
       .Hinput
       {
         border:1px solid red;
       }
       .example_b
       {
         background-color:white;
       }
       .example_b:hover
       {
         background-color:peru;
       }
       .one
       {
        background-color:rgb(70, 102, 114);
        color:white;
       }
       .one:hover
       {
          background-color:black;
          color:white;
       }
       @media(max-width:600px){
            .hello2{
                 margin-right:50px;
                 display:none;
            }
            .hello1{
                 margin-right:30px;
                 display:none;
            }
            .hello3{
                 margin-right:100px;
                 margin-left:30px;
                 display:none;
            }
       }
      
      </style>
    </head>
    <body class="bgimg">
         <div class="main">
         
                <!-----------Navigation Bar------------->
               
                <nav class="navbar navbar-danger " style="background-color:rgb(75, 35, 75);height: 77px;border-radius: 0px;">
                 <form class="form-inline"  method="post" action="dbSearch.php"><a style="float: left;margin-left: 20px;color: black;" class="btn bg-danger">Logout</a>
              
                  <h1 style="color: white;font-family: initial;text-align: center;font-weight: bold;">ADMIN PANEL</h1>
                   
                    </form>
                  </nav>
                
                  
           <div class="row rowsty" style="margin-top:0px; height:560px;">
                <div class="col-sm-3 sm4style" style="background-color:rgb(70, 102, 114);height:auto;margin-bottom:20px;padding-bottom:20px;">
                <?php
                $query="SELECT img from admin where id='1'";
                $execute=mysqli_query($db,$query);
                $array=mysqli_fetch_assoc($execute);
                ?>
           <center>     <h2 style="color:white">Admin Profile</h2>
                <?php
                echo '<img height="150px" width="150px" style="border:1px solid silver;border-radius:50%" src="data:;base64,'.base64_encode( $array['img'] ).' "/>';

                ?>
                </center>
    <center>              <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;width:250px; padding-left:45px;margin-top:20px;" href="admindash.php" target="_blank" rel="nofollow noopener">Admin DashBoard</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;" href="adminProfile.php" target="_blank" rel="nofollow noopener">Change Profile</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;" href="AllUser.php" target="_blank" rel="nofollow noopener">Registered Users</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;" href="inProcessOrder.php" target="_blank" rel="nofollow noopener">In Process Order</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;" href="doneOrder.php" target="_blank" rel="nofollow noopener">Completed Order</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;" href="addpage.php" target="_blank" rel="nofollow noopener">Add Page</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;" href="allpage.php" target="_blank" rel="nofollow noopener">All Pages</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;" href="deleteAccount.php" target="_blank" rel="nofollow noopener">Delete User Account</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;" href="deleteOrder.php" target="_blank" rel="nofollow noopener">Delete Order</a>
                  </div>
                
                       
          
                </div>
                <?php
$cus = "SELECT * FROM usertable";
$pro = "SELECT * FROM orderdone";
$ord = "SELECT * FROM orderpending";
$user = mysqli_query($db, $cus);
$orderdone= mysqli_query($db, $pro);
$orderpending= mysqli_query($db, $ord);
$u=0;
while($userC = mysqli_fetch_assoc($user))
{
 $u++;
}
$d=0;
while($userO=mysqli_fetch_assoc($orderdone))
{
    $d++;
     
}
 $p=0;
while($userP = mysqli_fetch_assoc($orderpending))
 {
     $p++;
      
 }
?>
    </center>
                <div class="col-sm-8 sm4style">
                     <div class="row" style="margin-left: 40px;">
                     
    
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <div class="col-sm-3 one hello1" style="height: 150px;border:1px solid white;margin-right:38px;margin-left:70px;">
                            <h3 style="margin-top:40px;padding-top:8px;text-align:center">Total users</h3>
                            <p style="text-align:center;padding-bottom:10px;font-weight:bold;font-size:25px;padding-top:5px"><?php echo $u  ?></p>
                   </div>
                   <div class="col-sm-3 one hello2" style="border:1px solid white;height: 150px;">
                  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                
                      <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                   <h3 style="margin-top:40px;padding-top:8px;text-align:center">In Process Order</h3>
                  <p style="text-align:center;padding-bottom:10px;font-weight:bold;font-size:25px;padding-top:5px"><?php echo $p  ?></p>
                   </div>
                     
                   <div class="col-sm-3 one hello3" style="margin-left:38px;border:1px solid white;height: 150px;">
                            <h3 style="margin-top:40px;padding-top:8px;text-align:center">Done Order</h3>
                            <p style="text-align:center;padding-bottom:10px;font-weight:bold;font-size:25px;padding-top:5px"><?php echo $d ?></p>
                   </div>
            
         </div>
                       <!---------------slider--------------------->
             <div class="row">
               <img src="img/ch.jpg" style="margin-top:10px;margin-left: 10px;height: 677px;width: 100%;" class="img-fluid">
             </div>      
    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
    </html>