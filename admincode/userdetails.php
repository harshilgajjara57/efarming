 <!doctype html>
<html lang="en">

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
          <div class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top justify-content-center">
            <ul class="navbar-nav">
              <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-12 data_tables">
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"><h3>USER DETAILS</h3></i>
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
              <th>USER NAME</th>
              <th>ROLE</th>
              <th>FIRSTNAME</th>
              <th>LASTNAME</th>
              <th>DATE OF BIRTH</th>
              <th>EMAIL</th>
              <th>GENDER</th>
              <th>USER PHOTO</th>
              <th>CONTACT</th>
              <th>STATUS</th>
              <th>ACTION</th>
              <!--<th>Edit</th>-->
              <!--<th>Delete</th>-->
            </tr>
            </thead>
            <tbody>
              <?php
                require("login_action/dbconnect.php");
                $q = "SELECT * FROM user_registration";
                $data = mysqli_query($conn,$q);
                $i = 0;
                while($result = mysqli_fetch_array($data)){
                  $i++;
                // print_r($data);
                // exit();
              ?>

              <tr>
               <td><?php echo $result['User_id'];?></td>
               <td><?php echo $result['User_name'];?></td>
               <td><?php echo $result['Role'];?></td>
               <td><?php echo $result['First_name'];?></td>
               <td><?php echo $result['Last_name'];?></td>
               <td><?php echo $result['DOB'];?></td>
               <td><?php echo $result['Email'];?></td>
               <td><?php echo $result['Gender'];?></td>
               <td><?php ?><img src="../usercode/images/userimage/<?php echo $result['User_photo']; ?>" width="70" height="70" alt="NO IMAGE"></td>
               <td><?php echo $result['Contact'];?></td>
               <td>
                <?php
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
                            ?>
                 
               </td>
               <!--<td><?php //echo $result['status'];?></td>-->
               <td>
                <a href="acti_deacti_user.php?User_id=<?php echo $result['User_id'];?>" class="btn btn-primary glow_button"><?php if($result['status']==1)
               {echo "Deactivate";



                  }else{echo "Activate";} ?></a>
               </td>
               
              </tr>
                          
               </tr>
               <?php
            }
            ?>
               </tbody>
                                    </table>
                                    <a href="user_data_pdf_converter.php" class="btn btn-primary glow_button"> 
                                    PDF
                                  </a>
                                  <a href="user_data_excel_converter.php" class="btn btn-primary glow_button"> 
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