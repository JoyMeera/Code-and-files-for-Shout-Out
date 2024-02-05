<?php
#Session Start
session_start();
#Session ID
$_SESSION['Issue']="Staffing/Service";
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
    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="utilities.css"/>
    <title>Student Voice</title>
</head>

<body>
    <!--NavBar-->
    <div class="navbar">
        <div class="container flex" onclick="window.location.href='homepage.php';">
            <img src="img/brookeslogo.png" alt="logo" style="cursor: pointer;"> 
        </div> 
    </div>
<!----SHOWCASE---->
    <section class="showcase">
        <div class="showcase-text"> 
        <p>Service</p>
            <div id="dynamicIcon" class="child">
                <img id ="surveyIcon" src="img/service.png" alt="logo" class="picture"> 
            </div>
        </div>    
    </section>
<!--FORM STARTS-->
<form id="myForm" action="location.php" method="post">
        <div class="container emoji-container">
        <br>
        <br>
        <!--TextArea-->
            <div class="showcase-form card" > 
                <label>Express your thoughts/concerns: <label style = "color: #d10372; font-weight:bold;font-size:25px;">*</label></label>
                <div class="form-control form-control3"> 
                    <textarea id="field1" type="text" name="description1" spellcheck="true" required></textarea>
                    <br>
                </div>
            </div>
        <!--Emojis-->
            <div class="showcase-form card" > 
                <label>How do you feel about this? <label style = "color: #d10372; font-weight:bold;font-size:25px;">*</label></label>
                <div class="card3"> 
                    <input type="radio" id="mood-1" name="mood1" value="Very Angry" class="radio" required> 
                        <label class="emoji emoji-1" for='mood-1'>&#128545;</label>
                    <input type="radio" id="mood-2" name="mood1" value="Angry" class="radio" required> 
                        <label class="emoji emoji-2" for='mood-2'>&#128544;</label>
                    <input type="radio" id="mood-4" name="mood1" value="Happy" class="radio"required> 
                        <label class="emoji emoji-4" for='mood-4'>&#128578;</label>
                    <input type="radio" id="mood-5" name="mood1" value="Very Happy" class="radio" required> 
                        <label class="emoji emoji-5" for='mood-5'>&#128514;</label>
                </div>
            </div>
            <br>
            <br>
<!--Next Page-->
            <input type="submit" name="submit" value="Next Page" class = "btn4" onclick="return validateForm()">
            </div>
        </form>
        <div class="error-message" id="error-message"></div>
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
    <script src="icon.js"></script>
    <script>

        function validateForm() {
        var radios = document.getElementsByName("attribute");
        var formValid = false;
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
            formValid = true;
            break;
            }
        }
        if (!formValid) {
            const errorMessage = document.getElementById("error-message");
            errorMessage.innerHTML = "Please select an emoji!";
            errorMessage.style.color = "red";
            errorMessage.style.fontSize = "18px";
            errorMessage.style.marginTop ="-50px";
            errorMessage.style.marginLeft ="250px";

        }else {
            // Submit form
            document.getElementById("my-form").submit();
        }
        }
    </script>
</body>
</html>