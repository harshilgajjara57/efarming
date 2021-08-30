<html>
<head><title>USERDATA IN PDF</title></head>
<body>
<?php
require_once "tcpdf/tcpdf.php";
include "login_action/dbconnect.php";
$table='<table border="1">
        <tbody>
        <tr>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>userid</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>username</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>userrole</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>firstname</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>lastname</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>dob</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>email</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>gender</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>contactno</b></th>
            <th style="font-family: Times New Roman;font-size: 10px;"><b>status</b></th>
        </tr>';
$result=mysqli_query($conn,"select * from user_registration;");
        while($row=mysqli_fetch_assoc($result))
        {
            //$id=$row['producttype_id'];
           // $resultset=mysqli_query($con,"select * from user_registration");
            //$r=mysqli_fetch_assoc($resultset);
            $table.='   
                <tr>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['User_id'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['User_name'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['Role'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['First_name'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['Last_name'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['DOB'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['Email'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['Gender'].'</td>
                    <td style="font-family: Times New Roman;font-size: 10px;">'.$row['Contact'].'</td>
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
$pdf->Output('userinfo.pdf',"I");
?>
</body>
</html>

