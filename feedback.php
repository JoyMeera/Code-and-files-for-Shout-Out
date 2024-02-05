<?php
  #Database including
  $conn = new mysqli("localhost", "root", "", "shoutout_db");
  
  if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
  } 
  else{
    $query = "SELECT * FROM newissue";
    if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {

       echo $row;
    }
  }
}
?>
