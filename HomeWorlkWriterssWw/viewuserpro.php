<?php
include "connection.php";
session_start();
?>
<?php
$Id = $_GET['id'];
$q="SELECT * FROM usertable where id='$Id'";
$Run=mysqli_query($db,$q);
$Data=mysqli_fetch_assoc($Run);
?>

<html>
    <head>
       <title>View User Profile</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/dashstyle.css">
        <!-- Fav icon -->
        <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      
      </style>
    </head>
    <body>
        <script>
        function back()
        {
            var msg = '<?php echo $Id ?>';
    window.location = "userdash.php?id=" + msg;
        }
  
        </script>
    <a class="btn" style="background-color:black;color:white;margin-left:10px;height:25px;width:70px;font-size:14px;padding-top:0px;margin-top:10px" onclick="back()">go back</a>
           <section>
         <div style="background:skyblue;height:auto;padding:20px;width:510px;margin-top:140px;margin-left:480px;border:1px solid silver;border-radius:5px">
         <h1 style="text-align:center">Your Profile</h1>      
         <hr> 
         <h2>Name : <?php echo $Data['name'] ?></h2>
                <h2>Email : <?php echo $Data['email'] ?></h2>
                <h2>Contact No : <?php echo $Data['contact_no'] ?></h2>
                <h2>Password :<?php echo $Data['password'] ?> </h2>
            </div>

           </section>
    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
    </html>