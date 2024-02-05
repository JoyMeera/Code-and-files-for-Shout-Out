<?php
session_start();
$_SESSION['description1'] = $_POST['description1'];

if(isset($_POST['mood1'])) {
    $_SESSION['mood1'] = $_POST['mood1'] ;
} else {
    $_SESSION['mood1'] = 'empty';
}
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
<body>
    
<div id="blur">
<!--NavBar-->
    <div class="navbar">
        <div class="container flex" onclick="window.location.href='homepage.php';">
            <img src="img/brookeslogo.png" alt="logo" style="cursor: pointer;"> 
        </div> 
    </div>
<!--Showcase-->
<section class="showcase"> 
    <div>
        <!--<<h3>What location or service does your Shout-Out refer to?</h3> -->
    </div>
</section>
<!--FormStarts-->  
<section class="stats">
    <form action="feeds.php" method="post">
        <div class="container emoji-container">
        <br>
        <br>
        <h3>What location or service does your Shout-Out refer to?</h3>    <div class="showcase-form card">
    <!--Drop Downs for Campus,Building,Room,Service-->
                <label for="Campus" name="campus">Pick a Campus:</label>
                <select name="campus" id="campus" requred>
                <option value="None">None</option>
                <option value="Wheatley">Wheatley</option>
                <option value="Headington">Headington</option>
                <option value="Hartcourt Hill">Hartcourt Hill</option>
                <option value="Swindon">Swindon</option>
                </select>
            </div>
            <div class="showcase-form card">
                <label for="location" name="building">Pick a Building:</label>
                <select name="building" id="building">
                <option value="None">None</option>
                <option value="B1">Building 1</option>
                <option value="B2">Building 2</option>
                <option value="B3">Building 3</option>
                <option value="B4">Building 4</option>
                </select>
            </div>
            <div class="showcase-form card">
                <label for="location" name="room">Pick a Room:</label>
                <select name="room" id="room">
                <option value="None">None</option>                
                <option value="R1">Room 1</option>
                <option value="R2">Room 2</option>
                <option value="R3">Room 3</option>
                <option value="R4">Room 4</option>
                </select>
            </div>
            <div class="showcase-form card">
                <label for="location">Pick a Service or Office:</label>
                <select name="service" id="service">
                <option value="None">None</option>
                <option value="Brookes Bus"> Brookes Bus</option>
                <option value="Academic Development">Center for Academic Development</option>
                <option value="Enterprise Support Team">Enterprise Support Team</option>
                <option value="Financial Aid Team">Financial Aid Team </option>
                <option value="International Student Advice team">International Student Advice Team</option>
                <option value="Student Center Advice Team">Student Center Advice Team</option>
                <option value="Student Development Services">Student Development Services </option>
                <option value="Student Finance Team">Student Finance Team</option>
                <option value="Student Support Services">Student Support Services</option>
                <option value="Student Union Advice Service">Student Union Advice Service</option>
                <option value="Student Welfare And Support Advice Team">Student Welfare and Support Advice Team</option>
                <option value="Oxford Brookes Website">Website, Oxford Brookes</option>
                <option value="Website Oxford Brookes Shout-Out">Website, Oxford Brookes Shout-Out</option>
                </select>
            </div>
        <div>
          <input type="submit" class="btn btn3" onclick="openPopup()" name="Submit">
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
            <h3><br>Oxford Brookes</h3>
            <h3>Shout-Out</h3>
            <p>Copyright &copy; 2023</p>      
        </div> 
    <!--Admin Login Link-->
        <div class="login-class">
            <h3 class="login" onclick="window.location.href='adminLogin.php';"><br>Admin Login</h3>  
        </div>
    </footer>
</div>

</body>
</html>