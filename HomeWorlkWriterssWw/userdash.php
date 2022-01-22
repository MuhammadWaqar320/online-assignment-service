<?php
include "connection.php";
session_start();
$id=$_GET['id']; //Get value
$qry="select * from usertable where id='$id'";
$run=mysqli_query($db,$qry);
$data=mysqli_fetch_assoc($run);
$name=$data['name'];

$Qry="select * from orderpending where o_p_id='$id'";
$Run=mysqli_query($db,$Qry);
$Data=mysqli_fetch_assoc($Run);
$count1=0;
while($Data=mysqli_fetch_assoc($Run))
{
  $count1++;
}
$QQry="select * from upload where user_id='$id'";
$RRun=mysqli_query($db,$QQry);
$count2=0;
while($DData=mysqli_fetch_assoc($RRun))
{
  $count2++;
}
?>
<html>
    <head>
       <title>User Panel</title>
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
         .one{
           margin-right:90px;
         }
       }
      
      </style>
    </head>
    <body class="bgimg">
         <div class="main">
         
                <!-----------Navigation Bar------------->
               
                <nav class="navbar navbar-danger " style="background-color:rgb(75, 35, 75);height: 77px;border-radius: 0px;">
                 <form class="form-inline"  method="post" action="dbSearch.php"><a style="float: left;margin-left: 20px;color: black;" class="btn bg-danger">Logout</a>
              
                  <h1 style="color: white;font-family: initial;text-align: center;font-weight: bold;">Well Come <?php echo $name; ?> </h1>
                   
                    </form>
                  </nav>          
           <div class="row rowsty" style="margin-top:0px; height:560px;">
                <div class="col-sm-3 sm4style" style="background-color:rgb(70, 102, 114);height:580px;margin-bottom:20px;padding-bottom:20px;">
               
           
                </center>
    <center>     
    <h1 style="color:white;margin-top:20px;font-family:initial">Profile</h1>  
    <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;width:250px; padding-left:45px;margin-top:10px;" href="userdash.php?id=<?php echo $id?>" target="_blank" rel="nofollow noopener">User DashBoard</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;"  href="changeuserpro.php?id=<?php echo $id?>" target="_blank" rel="nofollow noopener">Change Profile</a>
                  </div>
        
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;"  href="viewuserpro.php?id=<?php echo $id?>" target="_blank" rel="nofollow noopener">View Profile</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;"  href="orderinfo.php?id=<?php echo $id?>"  target="_blank" rel="nofollow noopener">Order Information</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;"  href="LoginOrder.php"  target="_blank" rel="nofollow noopener">New Order </a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:15px;;width:250px; padding-left:45px;"  href="download.php?id=<?php echo $id?>" target="_blank" rel="nofollow noopener">Download Your work</a>
                  </div>
                
                       
          
                </div>
        
    </center>
                <div class="col-sm-8 sm4style">
                     <div class="row" style="margin-left: 40px;">
                     <center>
                   <div class="col-sm-5 one" style="border:1px solid white;height: 150px;margin-left:40px">
                  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                
                      <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                   <h3 style="margin-top:40px;padding-top:8px;text-align:center">In Process Order</h3>
                  <p style="text-align:center;padding-bottom:10px;font-weight:bold;font-size:25px;padding-top:5px"><?php echo $count1  ?></p>
                   </div>
                     
                   <div class="col-sm-5 one" style="margin-left:38px;border:1px solid white;height: 150px;">
                            <h3 style="margin-top:40px;padding-top:8px;text-align:center">Uploaded Work</h3>
                            <p style="text-align:center;padding-bottom:10px;font-weight:bold;font-size:25px;padding-top:5px"><?php echo $count2 ?></p>
                   </div>
                   </center>
            
         </div>
                       <!---------------slider--------------------->
             <div class="row">
               <img src="img/ch.jpg" style="margin-top:10px;margin-left: 10px;height: 420px;width: 100%;" class="img-fluid">
             </div>      
    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
    </html>