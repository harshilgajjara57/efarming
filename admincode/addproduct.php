<!DOCTYPE html>
<html>
<head>
  <title>E-Farming Admin Panel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

  <link rel="icon" type="image/png" href="images/icons/favicon.png"/>

  
</head>
<body <?php if(isset($_GET['nml2'])){echo 'onload="myfunc()"';} ?>>
  <form action="addproductaction.php" method="POST">
  <?php require("leftpanel.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top justify-content-center">
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
          
          <div class="collapse navbar-collapse justify-content-end">
           <div class="col-12 data_tables">
                            <a href="productdetails.php"> VIEW PRODUCT NAME</a>
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"><h3>ADD PRODUCT</h3></i>
                                </div>
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                            <table class="table">
                                            <tr>
                                                <td>Category</td>
                                                <td><select name="Category_type" class="form-control">
                                                  <?php
                                                       require("login_action/dbconnect.php");
                                                       $q = "SELECT * FROM category where status=1";
                                                       $data = mysqli_query($conn,$q);
                                                       while($result = mysqli_fetch_array($data)){                        // print_r($data);
                                                       // exit();
                                                     ?>
                                                  <option value="<?php echo $result['category_id'];?>"><?php echo $result['Category_name'];?></option>
                                                <?php }?>
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td>Product</td>
                                                <td><input type="text" name="txtProduct" placeholder="Product Name" class="form-control" required></td>
                                            </tr>    
                                                                                     
                                            <tr>
                                                <td>Status</td>
                                                <td><select name="status1" required="true" class="form-control">
                                                  <option value="1">&nbsp;on</option>
												  <option value="0">&nbsp;off</option>                                                  
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td><a href="product.php"class="btn btn-info btn-xs black">Back</a></td>
                                                <td><input type="submit" name="update" class="btn btn-success btn-xs purple from-control" value="add"></td>
                                            </tr>
                                           
                                           
                                          </table>
                                            </TABLE>
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
</form>
<script type="text/javascript">
function myfunc() {
  Swal.fire({
  type: 'success',
  title: 'Product Added Successfully',
})
  }
</script>
</body>
</html>