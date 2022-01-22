<?php include 'connection.php';?>
<?php
session_start();
// $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
// initializing variables
// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $mail = mysqli_real_escape_string($db, $_POST['mail']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE name='$mail' AND password='$password'";
  $result = mysqli_query($db, $user_check_query);
  $row= mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0)
  {
       echo "skdfjk";    
    header('location:admindash.php');
  }
  else
  {
    echo "<script>window.alert('Sorry you not login')
    </script>"; 
  }
}
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/login_style.css">
	<title>Admin Login Form</title>
	<style>
		/* set entire body that is webpage */
body{
	background: #eef1f2;
	padding-top: 20vh;	
}
/* set form background colour*/
form{
	background: white;
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
          <form style="margin-top:40px;" class="form-container" action="AdminLoginForm.php" method="post" class="Form" name="LoginPage">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold">Admin Login Form </h4>
			  <label for="InputName1">Name</label>
			   <input type="text" class="form-control" id="InputComName" aria-describeby="nameHelp" placeholder="Enter your name" name="mail" required>
			</div>
			<div class="form-group">
			  <label for="InputPassword1">Password</label>
			  <input type="password" class="form-control" id="InputPassword1" placeholder="Enter your Password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
	
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