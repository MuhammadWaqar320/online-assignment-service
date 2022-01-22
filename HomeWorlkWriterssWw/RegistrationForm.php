<?php
include "connection.php";
// session_start();
// initializing variables
// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
// REGISTER USER
if (isset($_POST['submit'])) {

  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
 
//   $image = $_FILES['image']['name'];
//   $target = "img/".basename($image);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM usertable WHERE name='$name'";
  $user_check_query1 = "SELECT * FROM usertable WHERE email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $result1 = mysqli_query($db, $user_check_query1);
  $user = mysqli_fetch_assoc($result);
  $user1 = mysqli_fetch_assoc($result1);
  $check=0;
  $Name=$user['name'];
  $mail=$user1['email'];
    if ($user||$user1) 
    { // if user exists
      if(($Name==$name)&&($mail==$email))
      {
		echo "<script>window.alert('Sorry name and email is already exist')
		window.location='RegistrationForm.php';
		</script>";
        $check=1;
      }
      if($check==0)
      {
        if ($user['name']==$name) {
            echo "<script>window.alert('Sorry name is already exist')
		window.location='RegistrationForm.php';
		</script>";
            $check=1;
          }
         if ($user1['email']==$email) 
           {
            echo "<script>window.alert('Sorry email is already exist')
		window.location='RegistrationForm.php';
		</script>";
            $check=1;
           } 
      }
     
    }
    if($check==0)
    {
      $query = "INSERT INTO usertable(name,email,password,contact_no) 
  	 VALUES('$name','$email','$password','$phone')";
	  $ch=mysqli_query($db, $query);
	  if($ch==1)
	  {
		echo "<script>window.alert('congratulation! You are registered')
		window.location='index.php';
		</script>";
	  }
	  else
	  {
		echo "<script>window.alert('you not registered')
		window.location='RegistrationForm.php';
		</script>";
	  }

     }
  // Finally, register user if there are no errors in the form

}
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/login_style.css">
	<title>Registration Form</title>
	<style>
		/* set entire body that is webpage */
body{
	background: #eef1f2;
	padding-top: 25vh;	
}
/* set form background colour*/
form{
	background: #fff;
    margin-top:0px;
}
/* set padding and size of th form */
.form-container{
	border-radius: 10px;
	padding: 30px;
}
	</style>

</head>
<body>
	<section class="container-fluid">
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center">
		  <section class="col-12 col-sm-6 col-md-4">
			<form class="form-container" method="post" action="RegistrationForm.php">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold"> Registration </h4>
			  <label for="InputName1">Name</label>
               <input type="text" name="name" class="form-control" id="InputComName" aria-describeby="nameHelp" placeholder="Enter Your Name" required>
            <br>   	<label for="InputName1">Email</label>
			   <input type="email" class="form-control" name="email" id="InputComName" aria-describeby="nameHelp" placeholder="Enter Your Mail" required>
			</div>
			<div class="form-group">
			  <label for="InputPassword1">Contact No</label>
			  <input type="phone" class="form-control" name="phone" id="InputPassword1" placeholder="Enter contact number" required>
			</div>
			<div class="form-group">
			  <label for="InputPassword1">Password</label>
			  <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Enter Password" required>
			</div>
			<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
			<div class="form-footer">
			  <p> Don't have an account? <a href="LoginPage.html">Sign Up</a></p>
			  
			</div>
			</form>
		  </section>
		</section>
	  </section>
	   <!-- html code -->
         	   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>