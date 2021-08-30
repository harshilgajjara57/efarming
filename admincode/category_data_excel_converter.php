<?php
include_once('PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');
include_once('PHPExcel-1.8/Classes/PHPExcel/cell.php');
include_once('PHPExcel-1.8/Classes/PHPExcel.php');
require("login_action/dbconnect.php");
$q = "SELECT * FROM category";
                $data = mysqli_query($conn,$q);
                $i = 0;
              

//set the desired name of the excel file
$fileName = 'category-info';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Me")->setLastModifiedBy("Me")->setTitle("My Excel Sheet")->setSubject("My Excel Sheet")->setDescription("Excel Sheet")->setKeywords("Excel Sheet")->setCategory("Me");

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Add column headers

$objPHPExcel->getActiveSheet()
            ->setCellValue('A1', 'categoryid')
            ->setCellValue('B1', 'categoryname')
            ->setCellValue('C1', 'status')
            ;

//Put each record in a new cell

  while($result = mysqli_fetch_array($data)){
                  $i++;
                $ii = $i+2;
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$ii, $result['category_id']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$ii, $result['Category_name']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$ii, $result['status']);
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
header("location:categorydetails.php");
?>