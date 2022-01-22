<!DOCTYPE html>
<html>

<head>
  <title>All Prices info</title>
  
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
 
        .footerDiv {
	background-image: url("Img/Fbg.jpg");
	margin-bottom: 15px;
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
  background-color:silver;
  color: black;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#myBtn:hover {
  background-color: #555;
  color: white;
}
td,th{
  text-align: center;
}
@media(max-width:600px){
  .set10{
    display: none;
  }
  .set11{
    display: none;
  }
  .set12{
    display: none;
  }
  .set13{
    margin-left:170px;
    margin-bottom:10px;
  }
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
th,td,tr{
  font-size: 14px;
}
    </style>
</head>

<body style="background-color:white;">
    
<?php
include "header.php";
?>
<!-- Navigation Bar -->
<div>
    <br>
    <h1 style="text-align: center;">OUR PRICES </h1>
    <hr style="margin-left:600px;margin-right:590px;background-color:black;height:2px;">
</div>

<div class="container">

    <p style="text-align: justify;font-size:16px;">At PrivateWriting.com we are committed to delivering our services with our highest quality standards, and by the date specified. We are constantly monitoring our competitors on quality of researchers, level of service and price, enabling you to be certain that you as our customer are making the sensible choice by choosing us.<b> All work is guaranteed to be of at least G.P.A. 3.0+ standard (US) or 2:1 standard (UK) and above.</b>
     <br><br>   Our pricing policy offers you five various urgency levels. The more time the writer has to complete the project, the less we pay him. So, we are passing our savings on to you. We also offer <b>six academic levels</b> of writing to match your program. Depending on the program you are enrolled at you can choose the skill level you require.
        <br><br>
        In the below tables you may find pricing information regarding a given type of assignment. Each table consists of the list of urgency levels followed by the academic levels. All prices are in US dollars, cost per page. Please feel free to contact us in case you have any inquiries.</p>


<h5 style="font-size: 16px;">General pricing for CV (Resume), Web content (seo), Assessment, Essay, PowerPoint plain:</h5>

                <!--table currency change system-->
<br>
<label for="InputName1" style="font-size:16px; large;font-weight: bold;">Type Of Documents</label>
              
      <select id="type" name="types" style="font-size: 12px;" onchange="assignment(this)"  class="form-control">
          <option value="essay" id="1">Essay</option>
          <option value="assignment" id="2">Assignment</option>
          <option value="paper" id="3">Term Paper</option>
          <option value="Research" id="4">Research Paper</option>
          <option value="coursework" id="5">CourseWork</option>
          <option value="report" id="6">Book Report</option>
          <option value="review" id="7">Book Review</option>
          <option value="summary" id="8">Research Summary</option>
          <option value="dissertation" id="9">Dissertation</option>
          <option value="Thesis" id="10">Thesis</option>
          <option value="Editing" id="11">Editing</option>
          <option value="pro" id="12">Profreding</option>
          <option value="study" id="13">Case Study</option>
          <option value="lab" id="14">Lab Report</option>
          <option value="pre" id="15">Presentation</option>
          <option value="problem" id="16">Problem Solving</option>
          <option value="Article" id="17">Article</option>
          <option value="paper" id="18">Reaction Paper</option>
          <option value="ques" id="19">Multiple Choice Question</option>
          <option value="project" id="20">Static Project</option>
        </select>
        <div class="table-responsive">
      <table class="table table-striped " style="overflow-x:auto;">
        <thead>
          <tr>
            <th>Urgency</th>
            <th>High School</th>
            <th>College</th>
            <th>Under Graduate</th>
            <th>Master</th>
            <th>Phd</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="12"></td>
            <td>$9.99</td>
            <td>$12.10</td>
            <td>$14.55</td>
            <td>$19.12</td>
            <td>$21.40</td>
          </tr>
          <tr>
            <td>$9.99</td>
            <td>$12.10</td>
            <td>$14.55</td>
            <td>$19.12</td>
            <td>$21.40</td>
          </tr>
          <tr>
            <td>$9.99</td>
            <td>$12.10</td>
            <td>$14.55</td>
            <td>$19.12</td>
            <td>$21.40</td>
          </tr>
          <tr>
            <td>$9.34</td>
            <td>$11.31</td>
            <td>$13.60</td>
            <td>$17.87</td>
            <td>$20.00</td>
          </tr>
          <tr>
            <td>$9.83</td>
            <td>$11.80</td>
            <td>$14.80</td>
            <td>$18.36</td>
            <td>$20.49</td>
          </tr>
          <tr>
            <td>$10.23</td>
            <td>$11.34</td>
            <td>$14.98</td>
            <td>$18.23</td>
            <td>$20.20</td>
          </tr>
          <tr>
            <td>$9.99</td>
            <td>$12.10</td>
            <td>$14.55</td>
            <td>$19.12</td>
            <td>$21.40</td>
          </tr>
          <tr>
            <td>$10.82</td>
            <td>$12.45</td>
            <td>$14.90</td>
            <td>$19.45</td>
            <td>$21.88</td>
          </tr>
          <tr>
            <td>$11.64</td>
            <td>$13.10</td>
            <td>$15.55</td>
            <td>$20.12</td>
            <td>$22.40</td>
          </tr>
          <tr>
            <td>$14.99</td>
            <td>$16.10</td>
            <td>$19.55</td>
            <td>$23.12</td>
            <td>$25.40</td>
          </tr>
          <tr>
            <td>$20.99</td>
            <td>$22.10</td>
            <td>$24.55</td>
            <td>$29.12</td>
            <td>$32.40</td>
          </tr>
          <tr>
            <td>$17.99</td>
            <td>$19.10</td>
            <td>$21.55</td>
            <td>$25.12</td>
            <td>$27.40</td>
          </tr>
          <tr>
            <td>1 hour</td>
            <td>$37.86</td>
            <td>$39.83</td>
            <td>$42.12</td>
            <td>$46.38</td>
            <td>$48.51</td>
          </tr>
          <tr>
            <td>2 hour</td>
            <td>$34.86</td>
            <td>$36.83</td>
            <td>$48.12</td>
            <td>$42.38</td>
            <td>$44.51</td>
          </tr>
          <tr>
            <td>20 days</td>
            <td>$8.86</td>
            <td>$10.83</td>
            <td>$13.12</td>
            <td>$17.38</td>
            <td>$20.51</td>
          </tr>
          <tr>
            <td>14 days</td>
            <td>$9.86</td>
            <td>$11.83</td>
            <td>$14.12</td>
            <td>$18.38</td>
            <td>$22.51</td>
          </tr>
          <tr>
            <td>10 days</td>
            <td>$10.86</td>
            <td>$12.83</td>
            <td>$15.12</td>
            <td>$19.38</td>
            <td>$21.51</td>
          </tr>
          <tr>
            <td>7 days</td>
            <td>$11.86</td>
            <td>$13.83</td>
            <td>$15.12</td>
            <td>$19.38</td>
            <td>$21.51</td>
          </tr>
          <tr>
            <td>5 days</td>
            <td>$12.86</td>
            <td>$14.83</td>
            <td>$16.12</td>
            <td>$20.38</td>
            <td>$23.51</td>
          </tr>
          <tr>
            <td>4 days</td>
            <td>$13.86</td>
            <td>$15.83</td>
            <td>$17.12</td>
            <td>$21.38</td>
            <td>$25.51</td>
          </tr>
          <tr>
            <td>3 days</td>
            <td>$14.86</td>
            <td>$16.83</td>
            <td>$19.12</td>
            <td>$23.38</td>
            <td>$27.51</td>
          </tr>
          <tr>
            <td>48 hours</td>
            <td>$16.86</td>
            <td>$18.83</td>
            <td>$20.12</td>
            <td>$25.38</td>
            <td>$27.51</td>
          </tr>
          <tr>
            <td>24 hours</td>
            <td>$21.86</td>
            <td>$23.83</td>
            <td>$25.12</td>
            <td>$29.38</td>
            <td>$33.51</td>
          </tr>
          <tr>
            <td>12 hours</td>
            <td>$25.86</td>
            <td>$27.83</td>
            <td>$29.12</td>
            <td>$33.38</td>
            <td>$37.51</td>
          </tr>
          <tr>
            <td>6 hours</td>
            <td>$28.86</td>
            <td>$30.83</td>
            <td>$32.12</td>
            <td>$37.38</td>
            <td>$39.51</td>
          </tr>
          <tr>
            <td>3 hours</td>
            <td>$30.86</td>
            <td>$32.83</td>
            <td>$34.12</td>
            <td>$39.38</td>
            <td>$41.51</td>
          </tr>
        </tbody>
      </table>
</div>
     <div>
       <div class="row">
         <div class="col-sm-2 set10" style="border:1px solid skyblue;margin-bottom: 5px;margin-left:15px;">
           <br>
             <h3 style="padding-left:30px;padding-top: 10px;">Format</h3>
         </div>
         <div class="col-sm-3 set11" style="padding-top: 10px;border:1px solid skyblue;margin-bottom:5px;">
          12 point Times New Roman;<br>
          Double-spaced/Single-spaced;<br>
          MS Word file;<br>
          Minimum 275/550 words per page.
         </div>
         <div class="col-sm-3 set12" style="border:1px solid skyblue;margin-left:50px;margin-bottom:30px;margin-right:100px;">
          <center> 
          <p style="padding-top:20px;">Total Price For 1 Page</p>
           <h4>$13.28</h4>
          </center>
         </div>
         <div class="col-sm-2 set13">
          <a href="LoginOrder.php" class="btn btn-warning btn-lg" role="button" aria-pressed="true" style="margin-top:30px;margin-right:300px;">Order</a>
         </div>

       </div>
     </div>

       <script>
        function assignment(select){
         if(select.options[select.selectedIndex].id == "100"){
          window.alert("This is Assig");
          }
         else if(select.options[select.selectedIndex].id == "2"){
            window.location.replace("type2.html");
          }
         else if(select.options[select.selectedIndex].id == "3"){
          window.location.replace("type3.html");
          }
         else if(select.options[select.selectedIndex].id == "4"){
          window.location.replace("type4.html");
          }
         else if(select.options[select.selectedIndex].id == "5"){
          window.location.replace("type5.html");
          }
         else if(select.options[select.selectedIndex].id == "6"){
          window.location.replace("type6.html");
          }
         else if(select.options[select.selectedIndex].id == "7"){
          window.location.replace("type14.html");
          }
         else if(select.options[select.selectedIndex].id == "8"){
          window.location.replace("type8.html");
          }
         else if(select.options[select.selectedIndex].id == "9"){
          window.location.replace("type9.html");
          }
         else if(select.options[select.selectedIndex].id == "10"){
          window.location.replace("type10.html");
          }
         else if(select.options[select.selectedIndex].id == "11"){
          window.location.replace("type11.html");
          }
         else if(select.options[select.selectedIndex].id == "12"){
          window.location.replace("type12.html");
          }
         else if(select.options[select.selectedIndex].id == "13"){
          window.location.replace("type13.html");
          }
         else if(select.options[select.selectedIndex].id == "14"){
          window.location.replace("type14.html");
          }
         else if(select.options[select.selectedIndex].id == "15"){
          window.location.replace("type6.html");
          }
         else if(select.options[select.selectedIndex].id == "16"){
          window.location.replace("type8.html");
          }
         else if(select.options[select.selectedIndex].id == "17"){
          window.location.replace("type9.html");
          }
         else if(select.options[select.selectedIndex].id == "18"){
          window.location.replace("type10.html");
          }
         else if(select.options[select.selectedIndex].id == "19"){
          window.location.replace("type11.html");
          }
         else if(select.options[select.selectedIndex].id == "20"){
          window.location.replace("type12.html");
          }
          }
       </script>

    </div>
  <!-- --------------------------------------------------footer-------------------------------------- -->
<?php 
include "footer1.html";
?>
    
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