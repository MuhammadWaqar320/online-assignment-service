<?php
$Id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/login_style.css">
	<title>change user  Profile</title>
	<style>
		/* set entire body that is webpage */
body
{
	background: #eef1f2;
}
.container-fluid{

	padding-top: 15vh;	
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
<script>
        function back()
        {
            var msg = '<?php echo $Id ?>';
    window.location = "userdash.php?id=" + msg;
        }
  
        </script>
    <a class="btn" style="background-color:black;color:white;margin-left:10px;height:25px;width:70px;font-size:14px;padding-top:0px;margin-top:10px" onclick="back()">go back</a>
	<section class="container-fluid">
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center">
		  <section class="col-12 col-sm-6 col-md-4">
			<form class="form-container" method="post" action="changeproPHP.php">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold"> Change Profile </h4>
			  <label for="InputName1">Name</label>
               <input type="text" class="form-control" id="InputComName" aria-describeby="nameHelp" name="name" placeholder="Enter Your Name" required>
            <br>   	<label for="InputName1">Email</label>
			   <input type="email" class="form-control" id="InputComName" aria-describeby="nameHelp" name="email" placeholder="Enter Your Mail" required>
			</div>
			<div class="form-group">
			  <label for="InputPassword1">Password</label>
			  <input type="password" class="form-control" id="InputPassword1" placeholder="Enter Password" name="password" required>
			</div>
            <div class="form-group">
			  <label for="InputPassword1">Contact No</label>
			  <input type="phone" class="form-control" id="InputPassword1" placeholder="Enter contact number" name="con" required>
			</div>
			<div class="form-group">
			  <input type="text" style="display:none" class="form-control" id="InputPassword1" name="id" placeholder="Enter contact number" value="<?php echo $Id ?>" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block" name="submit">Change</button>
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