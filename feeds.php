<?php

session_start();
include("1_SQLdatabaseConnect.php");

//Get Information from the forms
$_SESSION['campus']=$_POST['campus'];
$_SESSION['building']=$_POST['building'];
$_SESSION['room']=$_POST['room'];
$_SESSION['service']=$_POST['service'];
$_POST['description1']=$_SESSION['description1'];
$_POST['mood1']=$_SESSION['mood1'];


//Check Session ID and assign correct Category
$A=$_SESSION['Issue'];
function issue(){	
	if($_SESSION['Issue']=='Cleaning'){
		$A="Cleaning";
	} elseif($_SESSION['Issue']=='Maintenance'){
		$A="Maintenance";
	} elseif($_SESSION['Issue']=='Staffing/Service'){
		$A="Service";
	} elseif($_SESSION['Issue']=='Other'){
		$A="Other";
	} elseif($_SESSION['Issue']=='IT'){
		$A="IT";
	} elseif($_SESSION['Issue']=='Transportation'){
		$A="Transport";
	} else {
		$A="Idea";
	}
	return $A;   
   }

//Insert Data into SQL Database 
$insert_query_shoutout = "INSERT into feedback (Category, Express, Impact, Campus, Building, Room, OfficeService) 
VALUES ('$A','".$_POST['description1']."','".$_POST['mood1']."','".$_POST['campus']."','".$_POST['building']."','".$_POST['room']."','".$_POST['service']."')";
$result1 = mysqli_query($connection1,$insert_query_shoutout);

//var_dump($insert_query_shoutout);
//Close SQL connection
mysqli_close($connection1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="utilities.css">
    <title>Student Voice</title>
</head>
<body onload="openPopup()">
    
<div id="blur">
<!--NavBar-->
    <div class="navbar">
        <div class="container flex" onclick="window.location.href='homepage.php';">
            <img src="img/brookeslogo.png" alt="logo"> 
        </div> 
    </div>
<!--SHOWCASE-->
<section class="showcase"> 
    <div>
        <h3>What location or service does your Shout-Out refer to?</h3>
    </div>
</section>

<section class="stats">
 <!--FAKE FORM STARTS-->         
        <div class="container emoji-container">    
            <div class="showcase-form card">
    <!--Drop Downs for Campus,Building,Room,Service-->
                <label for="Campus" name="campus">Pick a Campus:</label>
                <select name="campus" id="campus" requred>
                <option value="None">None</option>
                </select>
            </div>
            <div class="showcase-form card">
                <label for="location" name="building">Pick a Building:</label>
                <select name="building" id="building">
                <option value="None">None</option>
                </select>
            </div>
            <div class="showcase-form card">
                <label for="location" name="room">Pick a Room:</label>
                <select name="room" id="room">
                <option value="None">None</option>
                </select>
            </div>
            <div class="showcase-form card">
                <label for="location">Pick a Service or Office:</label>
                <select name="service" id="service">
                <option value="None">None</option>
                </select>
            </div>
        <div>
        <input type="submit" class="btn btn3" name="Submit">
        </form>  
    </div>
    </div>
</section>
<!--Footer-->
<footer class="footer">
        <div class="footer-img">
            <img src="img/oxford-brookes-logo.png" alt="BrookesLogo" class="oxford-brookes-logo" onclick="window.location.href='https://www.brookes.ac.uk/';">   
        </div> 
        <div class="footer-text">
            <h3>Oxford</h3>
            <h3>Brookes Shout-Out</h3>
            <p>Copyright &copy; 2023</p>      
        </div> 
    <!--Admin Login Link-->
        <div class="login-class">
            <h3 class="login" onclick="window.location.href='adminLogin.php';">Admin Login</h3>  
        </div>
    </footer>
</div>
<!--Thank-you Popup-->
<div class ="popup" id = "popup">
    <h3>Thank you for your Shout-Out!</h3>
    <p>We have received your feedback and will strive to address it as soon as possible.</p>
    <a href="HomePage.php"><button type="button" class="popupBtn popbtn1">New Shout-Out?</button></a>
    <a href="https://www.brookes.ac.uk/students/"><button type="button" onclick="closePopup()" class="popupBtn popbtn2">Close Shout-Out</button></a>
    <a href="Results.php"><button type="button" class="popupBtn popbtn3">Review Submission</button></a>     

</div>
<script src="index.js"></script>
</body>

</html>