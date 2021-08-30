<?php
include_once('PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');
include_once('PHPExcel-1.8/Classes/PHPExcel/cell.php');
include_once('PHPExcel-1.8/Classes/PHPExcel.php');
require("login_action/dbconnect.php");
$q = "SELECT * FROM user_registration";
                $data = mysqli_query($conn,$q);
                $i = 0;
              

//set the desired name of the excel file
$fileName = 'user-info';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Me")->setLastModifiedBy("Me")->setTitle("My Excel Sheet")->setSubject("My Excel Sheet")->setDescription("Excel Sheet")->setKeywords("Excel Sheet")->setCategory("Me");

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Add column headers

$objPHPExcel->getActiveSheet()
            ->setCellValue('A1', 'userid')
            ->setCellValue('B1', 'username')
            ->setCellValue('C1', 'userrole')
            ->setCellValue('D1', 'firstname')
            ->setCellValue('E1', 'lastname')
            ->setCellValue('F1', 'dob')
            ->setCellValue('G1', 'email')
            ->setCellValue('H1', 'gender')
            ->setCellValue('I1', 'contact')
            ->setCellValue('J1', 'status')
            ;

//Put each record in a new cell

  while($result = mysqli_fetch_array($data)){
                  $i++;
                $ii = $i+2;
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$ii, $result['User_id']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$ii, $result['User_name']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$ii, $result['Role']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$ii, $result['First_name']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$ii, $result['Last_name']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$ii, $result['DOB']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$ii, $result['Email']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$ii, $result['Gender']);
    $objPHPExcel->getActiveSheet()->setCellValue('I'.$ii, $result['Contact']);
    $objPHPExcel->getActiveSheet()->setCellValue('J'.$ii, $result['status']);
}

// Set worksheet title
$objPHPExcel->getActiveSheet()->setTitle($fileName);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $fileName . '.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="' . $fileName . '.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('excel-files/' . $fileName . '.xlsx');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('excel-files/' . $fileName . '.xls');
header("location:userdetails.php");
?>