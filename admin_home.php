<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: adminLogin.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="adminstyle.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		<!--NavBar-->
		<nav class="navtop">
			<div>
				<h1>Student Feedback Data</h1>
				<a href="admin_logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<!--Welcome message-->
		<div class="content" style="text-align: center;">
			<h2>Welcome back, <?=$_SESSION['name']?>!<br><br>
			Here are the 20 most recent Shout-Outs.</h2>
		</div>

	<div style="text-align: center;" class="table-grid">
			<!--File download function-->
			<form action="admin_filedownload.php" method = "post" >
				<div class="table">
					<input type="submit" name="export" class= "download-file" value="Download File" />
				</div>
			<!--Sorting function-->
			</form>
			<form action="admin_home2.php" method="post">
			<tr>
				<div class="second-table">	
					<td input type="text"> 
						<p><select required name="sorting">
						<option value="Select"> Select </option>
						<option value="All categories"> All categories </option>
						<option value="Cleaning"> Cleaning </option>
						<option value="Maintenance"> Maintenance </option>
						<option value="Staffing/Service"> Staffing/Service </option>
						<option value="IT"> IT </option>
						<option value="Transportation"> Transportation </option>
						<option value="Other"> Other </option>
						<option value="Idea"> I have an idea!</option>
						</select></p>
						<th> &nbsp &nbsp &nbsp &nbsp </th>
					</td>
					<td >
						<input class="button" type="submit" name="sort" value="Sort">
					</td>
				</div>
			</tr>
			</form>
	</div>
	</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<style>
		table {
			border-collapse: collapse; margin: auto; /* Center the table horizontally */
			background-color: #fff; font-size: 16px; font-family: Arial, sans-serif; border: 1px solid #ddd;
			width: 80%; /* Adjust to the desired width */max-width: 1200px; /* Add a maximum width to prevent the table from getting too wide */
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);}
		th,td {padding: 12px; text-align: left; }
		th {background-color: #2f3947; color: #eaebed;}
		tr:nth-child(even) {background-color: #f9f9f9;}
		tr:hover {background-color: #2f3947; color: #eaebed;}
		.second-table {
			display: flex; flex-wrap:wrap; 
			justify-content: left;align-items: center;
		}
		
		.second-table tr:hover { 
		background-color: transparent;
		}
		.second-table select {
			width: 100%;
  			max-width: 300px;
			padding: 10px;
			margin: 10px 0;
			background-color: #f3947;
			border: 1px solid #ccc;
			border-radius: 5px;
			color: #333;
		}
		 select option:hover {
			background-color: red; /* Change the background color when hovered */
			color: #333; /* Change the text color when hovered */
			cursor: pointer; /* Change the cursor to a pointer when hovered */
		}
		.button {
			width: 100%;
			max-width: 100px;
			background-color: #2f3947;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			height: 40px; /* Set the height of the button */
			padding: 5px 5px; /* Add some padding to the button */
			font-size: 1rem; 
		}
		.download-file{
			padding: 7px 20px;
			background-color: #2f3947;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			height: 40px;
		}
		.table{
			display: flex; flex-wrap: wrap;justify-content: right;margin-right: 30px;
		}
		.table-grid{
			display: grid;
  			grid-template-columns: repeat(2, 1fr);
			grid-gap: 0;
			align-items: center;
		}
	</style>
</head>
<!--Sort Display function-->
<div style="text-align: center;">
<?php
include ('1_SQLdatabaseConnect.php');
echo "<br>"; 
echo "<table border=1>";
echo "<tr>";
echo "<th> ShoutOut No. </th>";
echo "<th> Category </th>";
echo "<th> Comment Box (Express your thoughts) </th>";
echo "<th> Impact</th>";
echo "<th> Campus </th>";
echo "<th> Building </th>";
echo "<th> Room </th>";
echo "<th> Office or Service </th>";
echo "</tr>";

$query_select = "SELECT * FROM feedback ORDER BY ShoutOutID DESC LIMIT 20";
$query_result = mysqli_query($connection1,$query_select);

while($row1 = mysqli_fetch_array($query_result))
{
echo "<tr>";
echo "<td>" .$row1['ShoutOutID']." </td>";
echo "<td>" .$row1['Category']." </td>";
echo "<td>" .$row1['Express']." </td>";
echo "<td>" .$row1['Impact']." </td>";
echo "<td>" .$row1['Campus']." </td>";
echo "<td>" .$row1['Building']." </td>";
echo "<td>" .$row1['Room']." </td>";
echo "<td>" .$row1['OfficeService']." </td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($connection1);
?>
</div>

</html>