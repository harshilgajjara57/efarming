<?php 
session_start();
require 'login_action/dbconnect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>E-Farming Admin Panel</title>
  <style type="text/css">
    b
    {
      text-align: center;
    }
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>
<body>
  <?php require("leftpanel.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
           <!-- <a class="navbar-brand" href="#">USER DETAILS</a>-->
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
              <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-12 data_tables">
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"><h3>PRODUCT NAME</h3></i>
                                </div>
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                        </div>
                                    </div><b>
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
             <tr>
              <th>ID</th>
              <!--<th>CATEGORY TYPE</th>-->
              <th>PRODUCT NAME</th>
              <th>CATEGORY NAME</th>
              <th>STATUS</th>
              <th>ACTION</th>
              <th>MANAGE</th>
              <!--<th>Edit</th>-->
              <!--<th>Delete</th>-->
            </tr>
            </thead>
            <tbody>
              <?php
                require("login_action/dbconnect.php");
                $q = "SELECT * FROM product_name";
                $data = mysqli_query($conn,$q);
                $i = 0;
                while($result = mysqli_fetch_array($data)){
                  $i++;
                // print_r($data);
                // exit();
              ?>

              <tr>
             <td><?php echo $result['Pname_id'];?></td>
              <!-- <td><?php /*
                $q = "SELECT * FROM category where category_id='$result['category_id']'";
                $data = mysqli_query($conn,$q);
                $result = mysqli_fetch_assoc($data);
                 echo $result['Category_id'];*/?></td>-->
               <td><?php echo $result['product_name'];?></td>
               <td><?php 
               $TI=$result['category_id'];
                $w = "SELECT * FROM category where category_id='$TI'";
                $dat = mysqli_query($conn,$w);
                $resu = mysqli_fetch_assoc($dat);
                 echo $resu['Category_name'];?></td>
                <td><?php
                              if($result["status"]==1)
                              {
                                ?>
                                <font color="green">Active</font>
                                <?php
                              }
                              else
                              {
                                ?>
                                <font color="red">Deactive</font>
                                <?php
                              }
                            ?></td>
                            <td>
                            <a href="product_delete.php?Pname_id=<?php echo $result['Pname_id']; ?>">Remove</a>
                            </td>
                <td>
                <a href="acti_deacti_product.php?Pname_id=<?php echo $result['Pname_id'];?>" class="btn btn-primary glow_button"><?php if($result['status']==1)
               {echo "Deactivate";



                  }else{echo "Activate";} ?></a>
               </td>
              </tr>
               <?php
            }
            ?>
               </tbody>
                                    </table>
                                    <a href="product_data_pdf_converter.php" class="btn btn-primary glow_button"> 
                                    PDF
                                  </a>
                                  <a href="product_data_excel_converter.php" class="btn btn-primary glow_button"> 
                                    Excel
                                  </a></b>
                                </div>
                            </div>
                                                        
                            
                    </div>
                </div>
            </div>
        </div>
    </div>                   
  </div>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          
        </div>
      </div>
      <?php require("copyright_footer.php"); ?>
    </div>
  </div>
</body>
</html>