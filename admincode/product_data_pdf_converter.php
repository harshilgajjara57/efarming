<html>
<head><title>PRODUCT IN PDF</title></head>
<body>
<?php
require_once "tcpdf/tcpdf.php";
include "login_action/dbconnect.php";
$table='<table border="1">
        <tbody>
        <tr>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>product id</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>category name</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>product name</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>status</b></th>
        </tr>';
$result=mysqli_query($conn,"select * from product_name;");
        while($row=mysqli_fetch_assoc($result))
        {
            $TI=$row['category_id'];
                $w = "SELECT * FROM category where category_id='$TI'";
                $dat = mysqli_query($conn,$w);
                $resu = mysqli_fetch_assoc($dat);
            //$id=$row['producttype_id'];
           // $resultset=mysqli_query($con,"select * from user_registration");
            //$r=mysqli_fetch_assoc($resultset);
            $table.='   
                <tr>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['Pname_id'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$resu['Category_name'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['product_name'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['status'].'</td>
                </tr>';
        }
        $table.='</tbody></table>';
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetFont('times', '', 14);
$pdf->AddPage();
$pdf->SetAutoPageBreak(TRUE, 10);
$pdf->writeHTML($table);
ob_clean();
$pdf->Output('productinfo.pdf',"I");
?>
</body>
</html>

