<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  
</head>
<style>
.Navhover:hover
{
 color: orangered;
}
</style>
<body>
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
      <!-- <a class="btn btn-success my-2 my-sm-0" type="submit" href="profileloginform.php" style="margin-top:20px;background:orangered;font-size:18px;margin-left:30px">Sign In</a> -->
      <a class="btn btn-success my-2 my-sm-0" type="submit" href="LoginOrder.php" style="margin-top:20px;background:orangered;font-size:18px;margin-left:30px;padding-left:17px;padding-right:17px">Order</a>
    </form>
  </div>  
</nav>
</body>
</html>