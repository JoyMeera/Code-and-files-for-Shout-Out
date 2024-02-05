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
    <div class="navbar">
        <div class="container flex" onclick="window.location.href='homepage.php';">
            <img src="img/brookeslogo.png" alt="logo" style="cursor: pointer;"> 
        </div> 
    </div>

<!--SHOWCASE-->
<section class="showcase">   
    <div class="showcase-text"></div>
</section>
<br>
<h2 style="text-align:center">Here is your Shout-Out:</h2>
<!----Results Display---->
<?php
    include "1_SQLdatabaseConnect.php";
    //SQL Query to Fetch Results
    $query_select="SELECT Category,Express,Impact,Campus,Building,Room,OfficeService FROM feedback ORDER BY ShoutOutID DESC LIMIT 1";
    $query_result=mysqli_query($connection1,$query_select); 
?>
 
<div id="results">
    <!--Assign Results to $Row-->
    <?php $row1=mysqli_fetch_array($query_result); ?>
    <br>
        <div class="showcase-form card"> 
            <h4>The Category you selected:</h4>
            <p><?php echo $row1['Category'];?></p>
    <br>
            <h4>Your Description:</h4>
            <p><?php echo $row1['Express'];?></p>
    <br>
            <h4>How it made you feel: </h4>
            <p><?php echo $row1['Impact'];?></p>
    <br>
            <h4>The Campus:</h4>
            <p><?php echo $row1['Campus'];?></p>
    <br>
            <h4>The Building:</h4>
            <p><?php echo $row1['Building'];?></p>
    <br>
            <h4>The Room:</h4>
            <p><?php echo $row1['Room'];?></p>
    <br>
            <h4>The Service or Office:</h4>
            <p><?php echo $row1['OfficeService'];?></p>
        </div>
        <!--Close Connnection-->
    <?php mysqli_close($connection1); ?>
</div>
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

</body>
</html>