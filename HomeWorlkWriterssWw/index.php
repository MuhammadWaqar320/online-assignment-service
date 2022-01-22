<?php
include "connection.php";
?>
<html>
<head>
  <title>homewriter.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style/style1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7e50a6f754400019ae07eb&product=inline-share-buttons" async="async"></script>
<style>
  .topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.Navhover:hover
{
 color: orangered;
}
.topnav .icon {
  display: none;
}
.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
  
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
@media screen and (max-width: 600px)
{
  .Form
  {
    margin-bottom: 100px;
  }
}
@media screen and (max-width: 600px)
{
  .XYZ
  {
    display: none;
  }
}

@media screen and (min-width: 800px)
{
  .new1
  {
    display:none;
  }
}
@media screen and (max-width: 600px)
{
  .Marg
  {
   display:none;
  }
}
@media screen and (max-width: 800px)
{
  .sam
  {
   margin-bottom:50px;
  }
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
  .design{
    margin-top:500px;
  }
  .des1{
    margin-top:90px;
    margin-left:140px;
    border-left:3px solid silver;
  }
}
#myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color:rgb(180, 196, 226);
        color: black;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }
      #myBtn:hover {
        background-color: #555;
        color: white;
      }
.div1
{
  background-repeat: no-repeat;
  background-image: url("img/bg5.jpeg");
  height: 500px;
}
.sec1
{
  
 background-color:black;
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
 .trans {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgba(0, 0, 0, 0.925); /* Fallback color */
  background: rgba(37, 32, 32, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 325; /* Full width */
  padding: 20px;
  height: 320px; /* Some padding */
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
@media(max-width:600px){
  .set1{
    margin-top:100px;
  }
  .set2{
    margin-top:15px;
    margin-left:50px;
  }
  .set3{
    margin-top:70px;
    margin-left:20px;
    margin-right:80px;
    text-align:justify;
  }
  .set5{
    margin-left:80px;
  }
  .set6{
    margin-left:50px;
  }
  .set7{
    margin-left:135;
  }
  .set8{
    margin-left:220px;
  }
  .font{
    margin-left:30px;
    margin-right:30px;
    margin-bottom:10px;
  }
  .heads{
    margin-left:30px;
    margin-top:20px;
  }
  .item{
    margin-left:25px;
  }
  .set9{
    padding-left:10px;
  }
}
</style>

</head>
<body style="text-align:justify">
<nav class="navbar navbar-expand-md " style="margin-bottom:0px;;background-color:rgb(39, 20, 39);border-radius: 0px;">
  <a class="navbar-brand" href="https://wa.me/12133281712" style="font-size:16px;color:orangered;margin-left:40px">
  <i class="fa fa-whatsapp"></i> +12133281712
  </a>
    <ul class="navbar-nav ml-auto" style="color:orangered">
    <a class="navbar-brand" href="#" style="font-size:16px;color:orangered;">
    <i class="fa fa-envelope"></i> acemywork@gmail.com
  </a>
    </ul>
</nav>
<nav class="navbar navbar-expand-md " style="margin-bottom:0px;;background-color:rgb(83, 44, 83);border-radius: 0px;">
  <a class="navbar-brand" href="">
  <a href="index.php"> <img src="img/lg1.jpeg" height="70px" width="220px"></a>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span  style="color:white">Menu</span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item"> <a href="Prices.php" class="nav-link LoginNav" id="nav-li-a"
            style="color: white;font-size:16px;margin-right: 5px;"><span class="LoginHome Navhover"></i>
              PRICES</span></a> </li>
              <li class="nav-item "> <a href="Howtoorder.php" class="nav-link LoginNav" id="nav-li-a"
            style="color: white;font-size:16px;margin-right: 5px;"><span class="LoginHome Navhover"></i>
              HOW TO ORDER</span></a> </li>
        <li class="nav-item Navhover"> <a href="FAQ.php" class="nav-link LoginNav" id="nav-li-a"
            style="color: white;font-size:16px;margin-right: 5px;"><span class="LoginHome Navhover"></i>
              FAQ</span></a> </li>
        <li class="nav-item Navhover"> <a href="Blog.php" class="nav-link LoginNav" id="nav-li-a"
            style="color: white;font-size:16px;margin-right: 5px;"><span class="LoginHome Navhover"></i>
              CONTENT</span></a> </li> 
              <li class="nav-item dropdown Navhover">
                <a class="nav-link dropdown-toggle Navhover"  id="navbardrop" data-toggle="dropdown" style="font-size:18px;color:white;">
                  SERVICES
                </a>
                <div class="dropdown-menu dropdown-content">
                  <a class="dropdown-item" href="AcademicPaper.html" style="font-size:16px;">Academic Paper</a>
                  <a class="dropdown-item" href="AcademicWriting.html" style="font-size:16px;">Academic Writing</a>
                  <a class="dropdown-item" href="AdmissionEssayHelp.html" style="font-size:16px;">Admission Essay Help</a>
                  <a class="dropdown-item" href="Algebra.html" style="font-size:16px;">Algebra</a>
                  <a class="dropdown-item" href="AssignmentHelp.html" style="font-size:16px;">Assignment Help</a>
                  <a class="dropdown-item" href="AssignmentWriting.html" style="font-size:16px;">Assignment Writing</a>
                  <a class="dropdown-item" href="BookReport.html" style="font-size:16px;">Book Report</a>
                  <a class="dropdown-item" href="BuyArticles.html" style="font-size:16px;">Buy Article</a>
                  <a class="dropdown-item" href="BuyHomeWork.html" style="font-size:16px;">Buy Home Work</a>
                  <a class="dropdown-item" href="BuyResearchPapers.html" style="font-size:16px;">Buy Research Papers</a>
                  <a class="dropdown-item" href="CalculusHomeWork.html" style="font-size:16px;">Calculus Home Work</a>
                  <a class="dropdown-item" href="CaseStudy.html" style="font-size:16px;">Case Study</a>
                  <a class="dropdown-item" href="DissertionAbstract.html" style="font-size:16px;">Dissertion Abstract</a>
                  <a class="dropdown-item" href="DissertionConclusion.html" style="font-size:16px;">Dissertion Conclusion</a>

                  <a class="dropdown-item" href="EnglishEssay.html" style="font-size:16px;">English Essay</a>
                  <a class="dropdown-item" href="EssayWriter.html" style="font-size:16px;">Essay Writer</a>
                  <a class="dropdown-item" href="PaperWriter.html" style="font-size:16px;">Paper Writer</a>
                  <a class="dropdown-item" href="ResumeWritting.html" style="font-size:16px;">ResumeW Writing</a>
                  <a class="dropdown-item" href="StaticProject.html" style="font-size:16px;">Static Project</a>
                </div>
              </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-success my-2 my-sm-0" type="submit" href="profileloginform.php" style="margin-top:20px;background:orangered;font-size:18px;margin-left:30px">Sign In</a>
      <!-- <a class="btn btn-success my-2 my-sm-0" type="submit" href="LoginOrder.php" style="margin-top:20px;background:orangered;font-size:18px;margin-left:30px;padding-left:17px;padding-right:17px">Order</a> -->
    </form>
  </div>  
</nav>
  <section class="sec1" style="margin-top: 0px;">
  <div class=" container div1"> 
    <div class="row" style="margin-left:20px;margin-right:20px;margin-bottom:20px;padding-top:25px">
       <div class="col-sm-6">
       <h2 style="font-weight: bold;">
      <p style="text-align:justify">  Private Custom Writing Service for Students Who Value Their Safety
        Guaranteed Security and Privacy.</p>
       </h2>
       <h4 style="margin-top: 40px;color: red;text-decoration: underline;">HOW IT WORKS</h4>
       <p style="font-size: 18px;margin-top: 30px;">
        We offer exclusive ghostwriting and research services from professional writers only. If you need any kind of academic writing assistance, we are here to help you.</p>
       </div>
       <div class="col-sm-6">
       <section class="row Form" style="background-color: white;border: 1px solid silver;border-radius: 5px;height: 445px;">
            <section class="col-sm-7">
              <!-- --------------------------------------Start Price Calculation ---------------------------------------------------->
            <!-- PHP code for price calculation -->

<?php
$RS=0;
if (isset($_POST['Sub']))
 {
  $Type = mysqli_real_escape_string($db, $_POST['Type']);
  $level = mysqli_real_escape_string($db, $_POST['level']);
  $no = mysqli_real_escape_string($db, $_POST['no']);
  $qry="select * from pricepage where type='$Type' AND acade='$level'";
  $run=mysqli_query($db,$qry);
  $page=mysqli_fetch_assoc($run);
  $price=$page['price'];
  $RS=0;
  $RS=($price*$no);
 }
 else
 {

 }

?>
            <!-- -----------End PHP code-------- -->
              <form class="form-container" action="index.php" method="post" class="Form"  style="padding-top: 20px;">
            <div class="form-group">
              <h4 class="text-center font-weight-bold;font-family:initial">Calculate Your Price</h4>
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
              <select name="Day" style="margin-bottom: 15px;border-radius: 5px;width: 250px;height: 40px;">
             <option value="5">48 hours / Wed, May 27</option><option value="6">3 days / Thu, May 28</option><option value="7">4 days / Fri, May 29</option><option value="8">5 days / Sat, May 30</option><option value="9" selected="">7 days / Mon, Jun 01</option><option value="10">10 days / Thu, Jun 04</option><option value="11">14 days / Mon, Jun 08</option><option value="12">20 days / Sun, Jun 14</option><option value="13">30 days / Wed, Jun 24</option><option value="14">2 months / Fri, Jul 24</option></select>
           <br>
   <input type="number" min="0" name="no" style="margin-bottom:10px;width: 250px;height:35px;border:1px solid grey;border-radius:5px" placeholder="Select No of pages from arrows" required> 
          
              <button  type="submit" name="Sub" style="text-decoration:none;background-color: orangered;border: 1px solid black;color:white;border-radius: 5px;padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom:10px;">Calculate</button>
              <span style="margin-bottom:20px;margin-top:5px;font-weight:bold;font-size:20px">Total:$<?php echo $RS; ?></span>
              <p style="margin-top:15px ;">Need assistance? Contact us!</p>
            <a href="LoginOrder.php" style="text-decoration:none;background-color: orangered;border: 1px solid black;color:white;border-radius: 5px;padding-right: 22px;padding-left: 23px;padding-top: 10px;padding-bottom:10px;">Order Now</a>
          </div>
            </form>
       <!-- --------------------------------------End Price Calculation ---------------------------------------------------->
          </section>
          <section class="col-sm-5">
            <img src="img/d.jpg" class="XYZ" width="200px">
          </section>
          </section>
       </div>
    </div>
  </div>
</section>
   
<div class="row" style="background-color:rgb(237, 247, 252);padding-top: 40px;padding-bottom: 40px;">
            
  <div class="col-6 col-md-4 design" style="border-right:3px solid silver ;height: 200px;">
      <img src="img/n1.PNG" height="100px" width="100px">
      <br>
      <br>
      On Time Delivery
      <br>
      <div  style="font-weight: 300;">No missed deadlines </div> 
  
  
    </div>
      
      
  <div class="col-6 col-md-4 design " style="border-right:3px solid silver ;height: 200px;">
    <img src="img/n2.PNG" height="100px" width="100px">
      <br>
      <br>

      Money-Back Gurantee
      <br>
      <div  style="font-weight: 300;">Ensured refund if required</div> 
  </div>
      
      
  <div class="col-6 col-md-4 design des1" style="border-right:3px solid silver ;height: 200px;">
    <img src="img/n3.PNG" height="100px" width="100px">
      <br>
      <br>
      Complete Confidentiality
      <br>
      <div  style="font-weight: 300;" >Your privacy is 100% safe</div> 
</div>
</div>
  
  <div class="container">
 

   
<br>
<br>


<!------------------------------------->



<h1 class="heading">Why students choose our service </h1>
<div class="text" >Trusted by 125682 customers worldwide since 2005:</div>
<hr>
<div class="styling">
<div class="row">
<div class="col-sm-1"  > <i class="fa fa-desktop fa-2x set8" aria-hidden="true" style="padding-top: 12px;background-color: orangered;"></i>
</div>

<div class="col-sm-3" >
  <div class="heads">PLAGIARISM-FREE CONTENT </div>
<div class="font" style="text-align: justify;">   All our copies are 100% unique and written in accordance with academic 
  standards and provided requirements.
  </div>


</div>
<div class="col-sm-1" ><i class="fa fa-percent fa-2x set8" aria-hidden="true" style="padding-top: 10px;background-color: orangered;"></i>
</div>
<div class="col-sm-3" >
  <div style="font-weight: bold;font-size: 16px;" class="heads">CUSTOMER LOYALTY  </div>
<br>
<div class="font" style="text-align: justify;">  The more you order, the more you save. Moreover, we offer holiday 
       and other occasional discounts for our long-term clients and email subscribers. </div>
      </div>


<div class="col-sm-1" ><i class="fa fa-bank  fa-2x set8"  style="padding-top: 8px;background-color: orangered;"></i></div>
<div class="col-sm-3" >
  <div class="heads">100% CONFIDENTIAL</div>
  
  <div class="font" style="text-align: justify;">   Any personal or billing information you share with us is
      completely confidential. No one will ever know you have used our service. </div>


  </div>
  </div>

   <br>
<div class="row" >
<div class="col-sm-1"  > <i class="fa fa-pencil-square-o fa-2x set8" aria-hidden="true" style="padding-top: 10px;background-color: orangered;"></i>
</div>

<div class="col-sm-3" >
  <div class="heads">UNLIMITED FREE REVISIONS</div>
<br>
<div class="font" style="text-align: justify;">If you dislike your paper or think we fail to meet the
   provided instructions, ask us for free revisions within two weeks after the delivery date. </div>
</div>


<div class="col-sm-1" ><i class="fa fa-money fa-2x set8" aria-hidden="true" style="padding-top: 10px;background-color: orangered;"></i>
</div>
<div class="col-sm-3" >
  <div class="heads">MONEY BACK GUARANTEE </div>
<br>
<div class="font" style="text-align: justify;">  We ensure a refund in case your copy is below the standard or doesn’t meet your initial requirements.</div> 
</div>


<div class="col-sm-1" ><i class="fa fa-headphones fa-2x set8" style="padding-top: 10px;background-color: orangered;"></i></div>
<div class="col-sm-3">
  
  <div class="heads">
      24/7 LIVE SUPPORT
  </div>
  <br>
 <div class="font" style="text-align: justify;"> Whatever it is you needed, our friendly managers will gladly help you in resolving any issue 24/7. Be sure to get a fast response.</div>
</div>
</div>
</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------- -->

</div>

</div>

<div>

  <div class="container"> 
    <h1 style="text-align: center;font-weight: bold;">NO WASTED PROMISES</h1>
      <div class="row" style="margin-left: 10px;margin-bottom: 50px;margin-top: 50px;">
         <div class="col-sm-4 sam">
            <div style="background-image:url('img/d2.PNG');height: 320px;width:325px;background-repeat: no-repeat;">
              <div class="trans">
   <center>             <img src="img/pdf.png" width="70px" height="70px" style="border: 1px solid silver;border-radius: 5px;"></center>
                <h3 style="text-align: center;">Article Education</h3>
                <p style="text-align: center;margin-bottom: 90px;">Master's level, 2 pages</p>
              <center> <form method="post" action="sample.php"> 
              <input type="text" value="education.pdf" style="display:none" name="name">  
              <button class="btn" style="background-color: orangered;border: 1px solid black;color:white;border-radius: 5px;padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;" type="submit" name="submit">Get Sample</button>
</form>           </center>
              </div>
            </div>
         </div>
         <div class="col-sm-4 sam">
          <div style="background-image:url('img/chem1.png');height: 320px;width:325px;background-repeat: no-repeat;">
            <div class="trans">
 <center>             <img src="img/pdf.png" width="70px" height="70px" style="border: 1px solid silver;border-radius: 5px;"></center>
              <h3 style="text-align: center;">Assig.. Chemistry</h3>
              <p style="text-align: center;margin-bottom: 90px;">High-School level, 7 pages</p>
              <center> <form method="post" action="sample.php"> 
              <input type="text" value=chem.pdf" style="display:none" name="name">  
              <button class="btn" style="background-color: orangered;border: 1px solid black;color:white;border-radius: 5px;padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;" type="submit" name="submit">Get Sample</button>
</form>           </center>
            </div>
          </div>
       </div>
       <div class="col-sm-4">
        <div style="background-image:url('img/c1.PNG');height: 320px;width:325px;background-repeat: no-repeat;">
          <div class="trans">
<center>             <img src="img/pdf.png" width="70px" height="70px" style="border: 1px solid silver;border-radius: 5px;"></center>
            <h3 style="text-align: center;">Assig.. Cultural</h3>
            <p style="text-align: center;margin-bottom: 90px;">Bachelor's level, 5 pages</p>
            <center> <form method="post" action="sample.php"> 
              <input type="text" value="cul.pdf" style="display:none" name="name">  
              <button class="btn" style="background-color: orangered;border: 1px solid black;color:white;border-radius: 5px;padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;" type="submit" name="submit">Get Sample</button>
</form>           </center>
          </div>
        </div>
     </div>

      </div>
      <div class="row" style="margin-left: 10px;margin-bottom: 50px;">
        <div class="col-sm-4 sam">
           <div style="background-image:url('img/en1.PNG');height: 320px;width:325px;background-repeat: no-repeat;">
             <div class="trans">
  <center>             <img src="img/pdf.png" width="70px" height="70px" style="border: 1px solid silver;border-radius: 5px;"></center>
               <h3 style="text-align: center;">Assig.. Environment </h3>
               <p style="text-align: center;margin-bottom: 90px;">Bachelor's level, 7 pages</p>
               <center> <form method="post" action="sample.php"> 
              <input type="text" value="en.pdf" style="display:none" name="name">  
              <button class="btn" style="background-color: orangered;border: 1px solid black;color:white;border-radius: 5px;padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;" type="submit" name="submit">Get Sample</button>
</form>           </center>
             </div>
           </div>
        </div>
        <div class="col-sm-4 sam">
         <div style="background-image:url('img/e1.PNG');height: 320px;width:325px;background-repeat: no-repeat;">
           <div class="trans">
<center>             <img src="img/pdf.png" width="70px" height="70px" style="border: 1px solid silver;border-radius: 5px;"></center>
             <h3 style="text-align: center;">Assig.. Engineering</h3>
             <p style="text-align: center;margin-bottom: 90px;">Master's level, 2 pages</p>
             <center> <form method="post" action="sample.php"> 
              <input type="text" value="eng.pdf" style="display:none" name="name">  
              <button class="btn" style="background-color: orangered;border: 1px solid black;color:white;border-radius: 5px;padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;" type="submit" name="submit">Get Sample</button>
</form>           </center>
           </div>
         </div>
      </div>
      <div class="col-sm-4">
       <div style="background-image:url('img/ll1.PNG');height: 320px;width:325px;background-repeat: no-repeat;">
         <div class="trans">
<center>             <img src="img/pdf.png" width="70px" height="70px" style="border: 1px solid silver;border-radius: 5px;"></center>
           <h3 style="text-align: center;">Case Study - Law</h3>
           <p style="text-align: center;margin-bottom: 90px;">Bachelor's level, 9 pages</p>
           <center> <form method="post" action="sample.php"> 
              <input type="text" value="law.pdf" style="display:none" name="name">  
              <button class="btn" style="background-color: orangered;border: 1px solid black;color:white;border-radius: 5px;padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;" type="submit" name="submit">Get Sample</button>
</form>           </center>
         </div>
       </div>
    </div>

     </div>
  </div>


<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<div  style="background-image: url('img/ch1.jpg');height: auto;padding-top: 5px;">
  <div class="container">
 <center style="color: white;">

    <h1 style="font-weight: bold;margin-top: 40px;">EXCEEDING CUSTOMER EXPECTATIONS</h1>
    <h3>What our clients think of us:</h3></center>
      <div class="row">
        <div class="col-sm-4">
          <div class="item" style="background-color: white;height: 220px;margin-right:20px;margin-top: 30px;;margin-bottom: 40px;border: 1px solid silver;border-radius: 5px;padding: 30px;">
                                       <div class="feedback-text"> Anthropology «EXCELLENT, perfect, always in the top.»</div>
                          <div class="subject" style="margin-top:80px;color: red;"> Subject: Anthropology</div>
                                       <div class="auth" style="font-weight: bold;"><i> Bandr F. </i> , Australia</div>
                                   </div>
        </div>
        <div class="col-sm-4">
          <div class="item" style="background-color: white;height: 220px;margin-right: 20px;margin-top: 30px;margin-bottom: 40px;border: 1px solid silver;border-radius: 5px;padding: 30px;">
                                       <div class="feedback-text" style="text-align: justify;">«The writer did and excellent job on this paper.
                                                                     </div>
                          <div class="subject" style="margin-top:60px;color: red;"> Subject:Computer science</div>
                                       <div class="auth" style="font-weight: bold;"><i>Martin L W. , United States of America </i></div>
                                   </div>
        </div>
        <div class="col-sm-4">
          <div class="item" style="background-color: white;height: 220px;margin-right: 20px;margin-top: 30px;margin-bottom: 40px;border: 1px solid silver;border-radius: 5px;padding: 30px;">
                                       <div class="feedback-text">Business «thanks dear writer i had very good work»</div>
                          <div class="subject" style="margin-top:80px;color: red;"> Subject:Business</div>
                                       <div class="auth" style="font-weight: bold;"><i> saleh a. , United Kingdom</i></div>
                                   </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="item" style="background-color: white;height: 220px;margin-right:20px;margin-top: 30px;;margin-bottom: 40px;border: 1px solid silver;border-radius: 5px;padding: 30px;">
                                       <div class="feedback-text"> Religion «Excellent story and thank you writer 708»</div>
                          <div class="subject" style="margin-top:80px;color: red;"> Subject: Religion</div>
                                       <div class="auth" style="font-weight: bold;"><i> Dinah O. , Australia</i></div>
                                   </div>
        </div>
        <div class="col-sm-4">
          <div class="item" style="background-color: white;height: 220px;margin-right: 20px;margin-top: 30px;margin-bottom: 40px;border: 1px solid silver;border-radius: 5px;padding: 30px;">
                                       <div class="feedback-text"> Business «A+ class writer, quality work on business»</div>
                          <div class="subject" style="margin-top:80px;color: red;"> Subject:  Business</div>
                                       <div class="auth" style="font-weight: bold;"><i> Abdul A. , United Kingdom </i> </div>
                                   </div>
        </div>
        <div class="col-sm-4">
          <div class="item" style="background-color: white;height: 220px;margin-right: 20px;margin-top: 30px;margin-bottom: 40px;border: 1px solid silver;border-radius: 5px;padding: 30px;">
                                       <div class="feedback-text"> Economics «excellent paper writer 1637, you always meet my
                                                                      requirements :)»</div>
                          <div class="subject" style="margin-top:50px;color: red;"> Subject: Economics</div>
                                       <div class="auth" style="font-weight: bold;"><i> Budour A. , United Arab Emirates</i> </div>
                                   </div>
        </div>
      </div>
    </div>
</div>
<!-------------------------------------->
<div class="container set3" style="padding-top:30px">
<h1 class="Highlights">Why students become our long-term customers?</h1>
<p class="Paragraph">On occasion, especially in the middle of the examination period, students 
address various essay writing services. Undoubtedly, safety is of great importance to them. Every single assessment affects their academic success.
How to find a reliable custom 
writing service and what criteria to pay attention in order to choose the right one?</p><br>
<p class="Paragraph">
Need to write an essay or other paper? Ask our qualified writers to help you out. 
To make this decision easier for you, here you will find our guarantees and answers to the
question of “why do you have to choose us”:
</p>
<ul class="Paragraph">
<li class="textheading">
100% confidentiality.
</li>
<p >
Your personal information is well secured and safe with us. Your data will never be disclosed to any third party under any circumstances.
</p>
<li class="textheading">
Competent custom writing.
</li>
<p>
We will perform any work, regardless of complexity, subject matter, requirements, deadline, etc.
</p>
<li class="textheading">
Professional authors on the team.
</li>
<p>
Our team features an impressive number of professional writers 
and scholars across all subjects, including MA and PhD degree-holders. They have all the necessary 
knowledge and experience in academic writing to master any task on short notice.
</p>
<li class="textheading">
We work 24/7.
</li>
<p>
Whatever it is you needed, feel free to contact our 24/7 support team to get a competent answer whenever you want.
We guarantee secured chatting on a no-name basis.
</p>
<li class="textheading">
14+ years of experience.
</li>
<p>
For many years now, our service has been helping students with their tasks. 
No request is too difficult for us, as we never fail to meet our customers’ expectations.
</p>
<li class="textheading">
Excellent reputation among our clients.
</li>
<p>
Check out the latest feedback from our customers to dispel any 
worries about our service.
Let the exceptional results of our work speak for themselves.
</p>
<li class="textheading">
Timely delivery.
</li>
<p>
Our writers perform every order on time and check it for plagiarism with the help of special programs.

Our essay help will never fail your expectations. With our service, you no 
longer have to spend days and nights meticulously working on your assignment. 
You can fully relax, forget about libraries and books. You have found the solution to your 
problem - our professional ghostwriting company. So, 
do not hesitate to order your custom written assignment as soon as possible.
</p>
</ul>

<h1 class="Highlights">
How to find the safest essay writing service?
</h1>
<p class="Paragraph">
When looking for outside help with academic assignments, students are rather afraid to trust an unknown service due to possible safety risks. Why is this happening? Why are cheap essay writing services not worthy of your trust? Simply because many services do not adhere to their obligations honestly. There are unfortunate cases, when companies fail to perform written work on time or complete the assignments at a very poor level. Or worse, when they violate the agreement and disclose your private information.
<br>
If you’re also afraid of your safety, better contact our well-reputable essay agency.
You can read reviews from our clients, and you’ll see why they believe we are the best essay
writing service.
Trust us with your work and get the best result without risks.
</p>

<h1 class="Highlights">
Get essay help from Master's and Doctoral degree holders
</h1>
<p class="Paragraph">
Our team consists of professional authors experienced in writing course papers, thesis, abstracts, etc. We have scientists and lecturers from leading universities of the country with different academic titles and degrees working on your projects, as well as students and graduates of higher educational institutions.<br>

What information do we need from customers? All relevant and applicable recommendations regarding the paper including initial instructions and requirements. Then our writers will research the topic and start working on a draft. Our editors will check the final copy and deliver it to you before the deadline.<br>

As for plagiarism, we necessarily check every paper for authenticity with the help of special programs. Even if we get two identical orders, we conduct researches in different ways. We use various literary sources and write every work differently. This means that each copy is original and never resembles another document with the same subject matter. Professional writing is guaranteed.<br>

As for the deadlines, we try to write every paper within 48 hours following the order placement. Still, it's better to make orders in advance so our writers will have more time to write your essay. The sooner you will contact us, the better our experts will write your assignment. Nevertheless, you are guaranteed to receive full-fledged, original work before the specified deadline.
</p>


<h1 class="Highlights">
100% anonymous essay help you can trust
</h1>
<p class="Paragraph">
Sometimes, students face difficulties even after they hand in their
research paper or essay to the teacher. Often, they get them back for revisions.
This can happen several times. Why? Because teachers have too strict requirements 
and expectations for written homework. <br>

</p>

<p class="Paragraph">
If the professor finds out that you purchased a custom essay you might have problems.
However, you can trust our service. Absolute confidentiality is a key principle of our work, 
any information provided by the student remains secure and undisclosed. 
We also respect the principle of the student’s anonymity.
</p>


<h1 class="Highlights">
100% anonymous essay help you can trust
</h1>

<p class="Paragraph">
Sometimes, students face difficulties even after they hand in their research paper or essay to the teacher. Often, they get them back for revisions. This can happen several times. Why?
Because teachers have too strict requirements and expectations for written homework.
<br>
If the professor finds out that you purchased a custom essay you might have problems.
However, you can trust our service. Absolute confidentiality is a key principle of our work,
any information provided by the student remains secure and undisclosed.
We also respect the principle of the student’s anonymity.
</p>

<h1 class="Highlights">
10 reasons to choose PrivateWriting.com
</h1>

<p class="Paragraph">
If you still doubt which service to choose, pick our company to receive exclusive
and original work. And get ten more advantages along with that:
</p>
<ul class="Paragraph">
<li>
We are a trustworthy custom essay writing service
</li>
<li>
 You do not need to edit the essay yourself - we will do it for you
</li>
<li>
We guarantee 100% anonymity of your order
</li>
<li>
We deliver plagiarism-free orders only
</li>
<li>
We perform various writing services
</li>
<li>
We will make urgent adjustments if needed
</li>
<li>
Our writers will craft the paper according to your requirements
</li>
<li>
We keep your information safe with advanced security standard
</li>
<li>
Our support team works around the clock
</li>
<li>
Our team uses an individual approach and can complete even non-standard orders
</li>


</ul>

<p class="Paragraph">
We have a dream team. We have experience and knowledge. We also understand 
how critical written tasks are for students. We do our work properly and respect our clients. 
We want our prices to be tolerable, so we offer cheap writing services you can afford at any day
of the week. And we also support your work even after the delivery
(if you need to change something in the final copy, we will take care of this).

</p>

<h1 class="Highlights">
Order a custom essay in 3 quick steps
</h1>
<h3 class="highlights2">
1:  Step – Provide order instructions
</h3>
<p class="Paragraph">
If you want our writers to perform your assignment flawlessly - on time, qualitatively 
and without imperfections - you have to provide us with all the necessary instructions to your task. Write down every requirement to custom writing service (deadline, length, format, size, quotes, and other essential details). Every aspect is very
important for our authors and us, as it significantly affects the quality of the paper.
</p>
<h3 class="highlights2">
2:  Step – Pay for work
</h3>
<p class="Paragraph">
We do not disclose any financial transactions to outsiders.
Custom essay writing will begin immediately after the payment. 
We accept Visa, and MasterCard. Every payment is safe and confidential.
The website is DMCA protected 
which means your information remains anonymous and 100% secured.
</p>

<h3 class="highlights2">
3: Step – Download your task
</h3>

<p class="Paragraph">
Our writers usually finish assignments before the deadline.
You will receive a notification when your work is done. Then you can download the 
paper from your account. We try to complete the essay service as soon as practically 
possible so you can have 
enough time to review the work and contact us in case of required edits.
<br>
If you want to get a top grade, use our essay help online without any hesitations.
All you need to do is contact us, and we will answer you at any time of the day or night.
</p>
 
  </div>
  <!-- ---------------------------------------------footer-------------------------------------------- -->

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
<!-- --------------------------------------------------footer-------------------------------------- -->

    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<!-- <div style="background-color:black;color:white;padding:30px">Scroll Down</div>
<div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll to top" button that becomes visible 
  <strong>when the user starts to scroll the page</strong>.</div> -->

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
