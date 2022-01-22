<?php
include "connection.php";
// $Id=$_GET['id'];
?>
<?php
include "connection.php";
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $Topic = mysqli_real_escape_string($db, $_POST['topic']);
  $Type = mysqli_real_escape_string($db, $_POST['types']);
  $Urgency = mysqli_real_escape_string($db, $_POST['urgency']);
  $no = mysqli_real_escape_string($db, $_POST['no']);
  $level = mysqli_real_escape_string($db, $_POST['level']);
  $desc = mysqli_real_escape_string($db, $_POST['desc']);
$username = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$user_check_query = "SELECT * FROM usertable WHERE email='$username' AND password = '$password'";
$result = mysqli_query($db, $user_check_query);
$row= mysqli_fetch_assoc($result);
$id=$row['id'];
if(mysqli_num_rows($result)<=0)
 {
    
    echo "<script>window.alert('Sorry email or password is incorrect')
    window.location ='LoginOrder.php';
    </script>"; 
 }
 else
 {
  
    $query = "INSERT INTO orderpending(o_p_id,topic,No_of_page,description,type,urgency,academic_level) 
    VALUES('$id','$Topic','$no','$desc','$Type','$Urgency','$level')";
  $ch=mysqli_query($db, $query);
   if($ch==1)
   {
    echo "<script>Congratulation! your order has been placed </script>";
   }
   else
   {
     echo "<script>window.alert('Sorry order is not done')
     window.location='LoginOrder.php';
     </script>"; 
  
   }

}

}
?>
<!DOCTYPE html>
<html>
<head>		
<link rel="stylesheet" href="css/login_style.css">
    <title>Order</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- <link rel="stylesheet" type="text/css" href="style/style1.css"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7e50a6f754400019ae07eb&product=inline-share-buttons" async="async"></script>
	<style>
		/* set entire body that is webpage */
body{
	background: #eef1f2;
	
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
	</style>

</head>
<body>
<nav class="navbar navbar-expand-md " style="margin-bottom:0px;;background-color:rgb(83, 44, 83);border-radius: 0px;margin-bottom:20px">
  <a class="navbar-brand" href="">
  <a href="index.php"> <img src="img/lg1.jpeg" height="70px" width="220px"></a>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span  style="color:white">Menu</span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <form class="form-inline my-2 my-lg-0">
      <!-- <a class="btn btn-success my-2 my-sm-0" type="submit" href="profileloginform.php" style="margin-top:20px;background:orangered;font-size:18px;margin-left:30px">Sign In</a> -->
      <!-- <a class="btn btn-success my-2 my-sm-0" type="submit" href="LoginPage.php" style="margin-top:20px;background:orangered;font-size:18px;margin-left:30px;padding-left:17px;padding-right:17px">Order</a> -->
    </form>
  </div>  
</nav>
 <center>  <h1 style="font-family:initial;font-weight:bold">Please Fill Order Form</h1> </center>
<center>	<section class="container-fluid">
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center">
		  <section class="col-12 col-sm-6 col-md-4">
			<form class="form-container" method="post" action="LoginOrder.php" style="border:1px solid silver;">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold">Place Order</h4>
			  <label for="InputName1">Topic</label>
			   <input  type="text" class="form-control" id="InputComName" aria-describeby="nameHelp" name="topic" placeholder="Enter Your Topic" name="topic" required>
            </div>
            <input  type="text" class="form-control" style="display:none" value="<?php echo $Id ?>" name="id" required>
            </div>
             <div class="form-group">
                
              <label for="InputName1">Type Of Documents</label>
              
                <select id="type" name="types"  class="form-control">
                    <option value="essay">Essay</option>
                    <option value="assignment">Assignment</option>
                    <option value="paper">Term Paper</option>
                    <option value="Research">Research Paper</option>
                    <option value="coursework">CourseWork</option>
                    <option value="report">Book Report</option>
                    <option value="review">Book Review</option>
                    <option value="summary">Research Summary</option>
                    <option value="dissertation">Dissertation</option>
                    <option value="Thesis">Thesis</option>
                    <option value="Editing">Editing</option>
                    <option value="pro">Profreding</option>
                    <option value="study">Case Study</option>
                    <option value="lab">Lab Report</option>
                    <option value="pre">Presentation</option>
                    <option value="problem">Problem Solving</option>
                    <option value="Article">Article</option>
                    <option value="paper">Reaction Paper</option>
                    <option value="ques">Multiple Choice Question</option>
                    <option value="project">Static Project</option>
                  </select>
             </div>
             
               

            <div class="form-group">
                
                <label for="InputName1">Urgency</label>
                  <select id="type" name="urgency"  class="form-control">
                      <option value="2 months">2 Months</option>
                      <option value="30 days">30 Days</option>
                      <option value="20 days">20 Days</option>
                      <option value="10 days">10 Days</option>
                      <option value="7 days">7 Days</option>
                      <option value="5 days">5 Days</option>
                      <option value="3 days">3 Days</option>
                      <option value="48 hours">48 Hours</option>
                      <option value="24 hours">24 Hours</option>
                      <option value="12 hours">12 Hours</option>
                    </select>
               </div>

               <div class="form-group">
                <label for="InputPassword1">Number Of Pages</label>
                <input type="number" class="form-control" id="InputPassword1" placeholder="Enter Number Of Pages" name="no" required>
              </div>
               <div class="form-group">
                
                <label for="InputName1">Academic Level</label>
                  <select id="type" name="level"  class="form-control">
                      <option value="HS">High School</option>
                      <option value="ug">UnderGraduate</option>
                      <option value="mas">Master</option>
                      <option value="phd">PhD</option>
                    </select>
               </div>
              <div class="form-group">
                <label for="InputPassword1">Order Description</label>
                <textarea type="text" class="form-control" placeholder="Enter Number Of Pages" name="desc" required>
             
            </textarea>
        </div>
        <div class="form-group">
			  <h4 class="text-center font-weight-bold">Enter Previous Information</h4>
			  <label for="InputName1">Email</label>
			   <input type="email" class="form-control" id="InputComName" aria-describeby="nameHelp" name="email" placeholder="Enter Your Mail" required>
			</div>
			<div class="form-group">
			  <label for="InputPassword1">Password</label>
			  <input type="password" class="form-control" id="InputPassword1" placeholder="Enter Password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block" name="submit">Proceed</button>
			<div class="form-footer">	  
				Have your already account? <a href="RegistrationForm.php">Register now</a>
			</div>
			
			</form>
		  </section>
		</section>
      </section>
      </center>
	   <!-- html code -->
    
  <div style="background:rgb(68, 63, 63);color:white;height:auto;padding-top:50px">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <h1 style="color: orangered;font-family:initial;text-align:justify;font-size:35px;font-weight:bold"> Contact Us</h1>
    <div class="footer-contact-box">
                <div class="footer-contact-text">
                 
                </div>
                <div class="clr"></div>
              </div>
              <div class="footer-contact-box">
                <div class="footer-contact-text">
                  <p style="font-size:16px"><a href="tel:+051-3456-789" style="color:white;" id="num"><i
                        class="fa fa-phone" style="color:blue;"></i> +12133281712</a></p>
                </div>
                <div class="clr"></div>
              </div>
              <div class="footer-contact-box">
                <div class="footer-contact-text">
                  <p style="font-size:16px"><a href="https://wa.me/12133281712" style="color: white;"><i class="fa fa-whatsapp" style="color:rgb(58, 245, 58);;"></i>
                  https://wa.me/12133281712</a></p>
                </div>
                <div class="clr"></div>
              </div>
              <div class="footer-contact-box">
                <div class="footer-contact-text">
                  <p style="font-size:16px"><a href="#" style="color: white;"><i class="fa fa-envelope" style="color:red;"></i>
                  acemywork@gmail.com</a></p>
                </div>
                <div class="clr"></div>
              </div>
    </div>
    <div class="col-sm-4">
    <h1 style="color: orangered;font-family:initial;font-size:35px;font-weight:bold">Quick Links</h1> 
    <div class="footer-contact-box">
    <div class="footer-contact-box">
                <div class="footer-contact-text">
                  <p style="font-size:16px"><a href="index.php" style="color:white;" id="num">
                     Main Page</a></p>
                </div>
                <div class="clr"></div>
              </div>
              <div class="footer-contact-box">
                <div class="footer-contact-text">
                  <p style="font-size:16px"><a href="Prices.php" style="color:white;" id="num">
                     Prices</a></p>
                </div>
                <div class="clr"></div>
              </div>
              <div class="footer-contact-box">
                <div class="footer-contact-text">
                  <p style="font-size:16px"><a href="FAQ.php" style="color: white;">
                     FAQ</a></p>
                </div>
                <div class="clr"></div>
              </div>   
              <div class="footer-contact-box">
                <div class="footer-contact-text">
                  <p style="font-size:16px"><a href="Howtoorder.php" style="color: white;">
                      How to order</a></p>
                </div>
                <div class="clr"></div>
              </div>  
              
    </div>
    
  </div>
  <div class="col-sm-4">
    <h1 style="color: orangered;font-family:initial;text-align:justify;font-size:35px;font-weight:bold"> Guide</h1>
    <p style="font-size:16px">
        
Services of homeworkwriter.com are provided with the intent to help students better focus on their major subjects and improve their grades. We in no way support plagiarism
or cheating. We expect you to reference our papers accordingly. If you pass the paper you buy from us as your own - use at your own risk
    </p>
    <img src="img/m.svg" style="margin-bottom:20px">
    </div>
</div>

<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" style="color: blanchedalmond;">  <p
                  style="display:none;font-size: 30px;color:red;text-align: center;font-weight: bold;font-family: initial; font-size: 45px;">
                   Share with friends</p></a></div>
                 <div class="sharethis-inline-share-buttons" style="padding-bottom: 50px;"></div>
</div>  
<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<hr style="color:white">
								<center>
									<p style="color: white;"><span style="color: orangered;"> &copy;
										</span>Top HomeWorkWriter 2020</p>
								</center>
							</div>
						</div>
   	   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>