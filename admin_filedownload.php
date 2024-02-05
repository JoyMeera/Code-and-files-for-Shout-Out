<?php

include 'C:/xampp/htdocs/student_feedback-main/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;

include ('1_SQLdatabaseConnect.php');
// Create connection
$connection1 = mysqli_connect($db_host, $db_username, $db_password,
$db_database);
// Prepare statement
$query = "SELECT * FROM feedback";
// Execute query
$result = mysqli_query($connection1,$query);
//File download funtion, where the first row in the excal is assigned the column headers
if(isset($_POST["export"]))
{
  $file = new Spreadsheet();

  $active_sheet = $file->getActiveSheet();

  $active_sheet->setCellValue('A1', 'ShoutOutID');
  $active_sheet->setCellValue('B1', 'Category');
  $active_sheet->setCellValue('C1', 'Express');
  $active_sheet->setCellValue('D1', 'Impact');
  $active_sheet->setCellValue('E1', 'Campus');
  $active_sheet->setCellValue('F1', 'Building');
  $active_sheet->setCellValue('G1', 'Room');
  $active_sheet->setCellValue('H1', 'OfficeService');
  $count = 2;
  //Setting the retrieved values to the excel file
  foreach($result as $row)
  {
    $active_sheet->setCellValue('A'. $count, $row["ShoutOutID"]);
    $active_sheet->setCellValue('B'. $count, $row["Category"]);
    $active_sheet->setCellValue('C'. $count, $row["Express"]);
    $active_sheet->setCellValue('D'. $count, $row["Impact"]);
    $active_sheet->setCellValue('E'. $count, $row["Campus"]);
    $active_sheet->setCellValue('F'.$count, $row["Building"]);
    $active_sheet->setCellValue('G'.$count, $row["Room"]);
    $active_sheet->setCellValue('H'.$count, $row["OfficeService"]);

    $count = $count + 1;
  }
  //PP HExtension which assists writing data to an excal sheet
  $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($file, "Xlsx");
  //Assigning a filename 
  $file_name = "FeedbackData.xlsx";
  //Saving the file to the local 
  $writer->save($file_name);
  //Content-Transfer and Type headers
  header('Content-Type: application/x-www-form-urlencoded');
  header('Content-Transfer-Encoding: Binary');
  header("Content-disposition: attachment; filename=\"".$file_name."\"");
  // reads a file and writes it to the output buffer.
  readfile($file_name);

  unlink($file_name);

  exit;

}
?>