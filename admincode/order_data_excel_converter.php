<?php
include_once('PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');
include_once('PHPExcel-1.8/Classes/PHPExcel/cell.php');
include_once('PHPExcel-1.8/Classes/PHPExcel.php');
require("login_action/dbconnect.php");
$q = "SELECT * FROM product_order";
                $data = mysqli_query($conn,$q);
                $i = 0;
              

//set the desired name of the excel file
$fileName = 'orderinfo';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Me")->setLastModifiedBy("Me")->setTitle("My Excel Sheet")->setSubject("My Excel Sheet")->setDescription("Excel Sheet")->setKeywords("Excel Sheet")->setCategory("Me");

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Add column headers

$objPHPExcel->getActiveSheet()
            ->setCellValue('A1', 'orderid')
            ->setCellValue('B1', 'sellerid')
            ->setCellValue('C1', 'userid')
            ->setCellValue('D1', 'productid')
            ->setCellValue('E1', 'quantity')
            ->setCellValue('F1', 'total price')
            ->setCellValue('G1', 'order date')
            ->setCellValue('H1', 'delevery status')
            ->setCellValue('I1', 'product name')
            ;

//Put each record in a new cell

  while($result = mysqli_fetch_array($data)){
                  $i++;
                $ii = $i+2;
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$ii, $result['order_id']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$ii, $result['seller_id']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$ii, $result['cust_id']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$ii, $result['product_id']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$ii, $result['qty']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$ii, $result['total_amount']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$ii, $result['order_date']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$ii, $result['Delivery_status']);
    $objPHPExcel->getActiveSheet()->setCellValue('I'.$ii, $result['product_name']);
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
header("location:OrderShowa.php");
?>