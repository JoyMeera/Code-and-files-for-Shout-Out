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
    <!--NavBar-->
    <div class="navbar" id="myHeader">
        <div class="container flex">
            <img src="img/brookeslogo.png" alt="logo" style="cursor: pointer;"> 
        </div> 
    </div>

<!--SHOWCASE-->
<section class="showcase">   
    <div class="showcase-text"> 
        <p>Use Brookes Shout-Out to give the university a thumbs up or a thumbs down and share your thoughts and ideas.</p>
        <p>Your Shout-Out will only take two minutes, there is no login required and anonymity is ensured.</p>
        <p>We look forward to getting your feedback!</p>
    </div>
</section>

<section class="stats">
    <div class="container">    
       <h3 class="stats-heading text-center my-1">Pick a Shout-Out:</h3>  
       <div class="grid grid-3 text-center my-4"> 
            <div> 
               <a href="cleaning.php"> 
                    <div class="child">
                        <img src="img/cleaning.png" alt="Cleaning Issue" class ="pictures" id="cleaningIcon" name="cleaning"> 
                    </div>
                </a>
                <h3 class="h3">Cleaning</h3>
            </div>
<!----MAINTENANCE Page---->
            <div>  
                <a href="maintenance.php">
                    <div class="child">
                        <img src="img/maintenance.png" alt="Maintenance Issue" class="pictures" id="maintenanceIcon" name="maintenance"> 
                    </div> 
                </a>
                <h3 class="h3">Maintenance</h3> 
            </div>
<!----SERVICE Page---->
            <div> 
                <a href="service.php">
                    <div class="child">
                        <img src="img/service.png" alt="Service Issue" class ="pictures" id="serviceIcon"> 
                    </div>
                </a>
                <h3 class="h3">Staffing/Service</h3>
            </div>
<!----IT Page---->
            <div>  
                <a href="it.php">
                    <div class="child">
                        <img src="img/IT.png" alt="IT Issue" class="pictures" id="itIcon"> 
                    </div>
                </a>
                <h3 class="h3">IT</h3>
            </div>
<!----TRANSPORT Page---->
            <div>
                <a href="transportation.php"> 
                    <div class="child"> 
                        <img src="img/bus.png" alt="Bus" class="pictures"  id="busIcon">    
                    </div>
                </a>  
                <h3 class="h3">Transportation</h3> 
            </div>
<!----OTHER Page---->
            <div> 
                <a href="other.php">
                    <div class="child"> 
                        <img src="img/others.png" alt="Other" class="pictures" id="otherIcon"> 
                    </div>
                </a>
                <h3 class="h3">Other</h3>
            </div>
        </div>
<!----IDEA Page---->
        <div class="grid grid-3 text-center my-4">
        <div>
            <a href="idea2.php"> 
                <div class="child"> 
                    <img src="img/idea.png" alt="Idea" class ="pictures" id="ideaIcon">    
                </div>
            </a>  
            <h3 class="h3">I have an idea!</h3> 
        </div>
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
</body>
</html>