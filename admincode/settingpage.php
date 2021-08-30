<?php
session_start();
require 'login_action/CheckSession.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>E-Farming Admin Panel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="vendors/ven/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

  
</head>
<body <?php if(isset($_GET['nml3'])){echo 'onload="myfunc()"';} ?>>
  <form action="settingaction.php" method="POST">
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
           <div class="inner bg-container">
                    <div class="row">
                        <center>
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h3>UPDATE PASSWORD</h3>
                                </div>
                              
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                            <table class="table">
                                            <tr>
                                                <td><label>NEW PASSWORD</label></td>
            <td>
              <input type="password" name="password" class="form-control" placeholder="ENTER PASSWORD">
            </td>
                                            </tr>
                                            <!--<tr>
                                                <td>image</td>
                                                <td><input type="file" name="cimage" placeholder="true" class="form-control">-->
                                          
                                                                                
                                           
                                           
                                          </table>
                                          <center><input type="submit" name="submit" value="UPDATE" class="form-control btn btn-success">
          </center>
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
     
    </div>
  </div>
</form>
<script type="text/javascript">
function myfunc() {
  Swal.fire({
  type: 'error',
  title: 'Error While Updating Password',
})
  }
</script>
</body>
</html>















