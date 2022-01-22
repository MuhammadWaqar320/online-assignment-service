<?php
include "connection.php";
?>

<?php
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['Name']);
  $type = mysqli_real_escape_string($db, $_POST['type']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $desc = mysqli_real_escape_string($db, $_POST['desc']);
  $acade = mysqli_real_escape_string($db, $_POST['acade']); 
//   Finally, register user if there are no errors in the form
$filename = $_FILES['file']['name'];
$extension = pathinfo($filename, PATHINFO_EXTENSION);
// the physical file on a temporary uploads directory on the server
$file = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];
if(!in_array($extension, ['pdf', 'docx','txt','xls','doc','png'])) 
{
    echo "<script>window.alert('Your file extension must be .png,.pdf,.docx,doc,,txt or xls')
    window.location='addpage.php';
    </script>";
} 
elseif ($_FILES['file']['size'] > 1000000) 
{ // file shouldn't be larger than 1Megabyte
    echo "File too large!";
} 
else 
{
    // move the uploaded (temporary) file to the specified destination
    // if (move_uploaded_file($file, $destination)) {
      
        $query="INSERT INTO pricepage(name,type,price,description,page,acade) VALUES('$name','$type','$price','$desc','$filename','$acade')";
        $chk=mysqli_query($db, $query);
        if($chk==1)
        {
            echo "<script>window.alert('Page is added successfully')
            window.location='admindash.php';
            </script>";
        }
        else
        {
            echo "<script>window.alert('Page is not add')
            window.location='addpage.php';
            </script>";
        }
       
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
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="img/cssExternal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,550,700" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anony
    mous" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/fontawesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8" name="keyword" content="12workout,workout,Workout,make your body fit,21 minute challenge" />
        <div id="fb-root"></div>
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7e50a6f754400019ae07eb&product=inline-share-buttons" async="async"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/login_style.css">
	<title>AddPage</title>
	<style>
		/* set entire body that is webpage */
body{
	background:  rgb(220, 226, 238);
		
}
.LoginHome:hover
{
    color: black;
}
/* set form background colour*/
form{
	background: #fff;
}
/* set padding and size of th form */
.form-container{
	border-radius: 10px;
	padding: 30px;
}
.footerDiv {
	background-image: url("img/Fbg.jpg");
	margin-bottom: 15px;
}
.bg
{
  background-image: url("img/Timer3.jpg");
}
	</style>

</head>
<body class="bg">
<a class="btn" style="background-color:black;color:white;margin-left:10px;height:25px;width:70px;font-size:14px;padding-top:0px;margin-top:10px" href="admindash.php">go back</a>
	<section class="container-fluid" style="font-size:18px;margin-top:50px">
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center" >
		  <section class="col-12 col-sm-6 col-md-4">
			<form class="form-container" action="addpage.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <h1 class="text-center font-weight-bold" style="font-family:initial;">Add Page</h1>
			  <label for="InputName1">Name</label>
			   <input type="text" style="height:40px;font-size:14px" class="form-control" id="InputComName" aria-describeby="nameHelp" placeholder="Enter your name" name="Name"required>
			</div>
			<div class="form-group">
			 
			  <label for="InputName1">Type</label><br>
        <select name="Type" style="margin-bottom: 15px;border-radius: 5px;width: 250px;height: 40px;margin-top: 20px;">
              
              <option value="Essay" selected="">Admission/Application Essay</option>
              <option value="Article">Article</option>
              <option value="Assignment">Assignment</option>
              <option value="Book Report/Review">Book Report/Review</option>
              <option value="Case Study">Case Study</option>
              <option value="Coursework">Coursework</option>
              <option value="Dissertation">Dissertation</option>
              <option value="Dissertation Chapter - Abstract">Dissertation Chapter - Abstract</option>
              <option value="Introduction Chapter">Dissertation Chapter - Introduction Chapter</option>
              <option value="Literature Review">Dissertation Chapter - Literature Review</option>
              <option value="Methodology">Dissertation Chapter - Methodology</option>
              <option value="Results">Dissertation Chapter - Results</option>
              <option value="Discussion" >Dissertation Chapter - Discussion</option>
              <option value="Editing">Editing</option>
              <option value="Lab Report">Lab Report</option>
              <option value="Math Problem">Math Problem</option>
              <option value="Multiple Choice Questions">Multiple Choice Questions</option>
              <option value="Presentation">PowerPoint Presentation</option>
                            </select><br>
                            <select name="level" style="margin-bottom: 15px;border-radius: 5px;width: 250px;height: 40px;"> 
                            <option value="College">College</option>
                                    <option value="High">High School</option>
                                    <option value="UnderGraduate">UnderGraduate</option>
                                    <option value="Master">Master</option>
                                    <option value="PhD" selected="">PhD</option>
                            
                            </select> <br>
           </div>
            <!-- --------- -->
           
            <!-- --------- -->
            <div class="form-group">
			  <label for="InputName1">Price</label>
			   <input type="text" style="height:40px;font-size:14px" class="form-control" id="InputComName" aria-describeby="nameHelp" placeholder="Enter price of page" name="price"required>
            </div>
            <label for="InputJobName1">Description</label>
            <textarea type="textarea" style="height:40px;font-size:14px" class="form-control" id="InputJobName" aria-describeby="nameHelp" placeholder="Enter Description" name="desc"required> </textarea>
            </div><br>
          
		

			<label>Page</label>
			<div class="input-group" style="border:1px solid silver; border-radius:5px;padding-left:10px;padding-bottom:2px;height:50px;margin-bottom:20px">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="file">
                </span>
            </span>
            
        </div>
            
        </div>
          <br>
			<button type="submit" class="btn btn-primary btn-block" name="submit" style="height:40px;font-size:18px">Add Page</button>
			
			</form>
		  </section>
		</section>
	  </section>
	  
	   <!-- html code -->
	   <script type="text/javascript" src="js/jquery.js"></script>
	   <script type="text/javascript" src="js/popper.min.js"></script>
	   <script type="text/javascript" src="js/bootstrap.min.js"></script>         	   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
