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
  <link href="vendors/ven/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

  
</head>
<body <?php if(isset($_GET['nml1'])){echo 'onload="myfunc()"';} ?>>
  <form action="addcategoryaction.php" method="POST">
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
                  <a href="categorydetails.php" style=>VIEW CATEGORY</a>
                    <div class="row">
                        <center>
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h3>ADD CATEGORY</h3>
                                </div>
                              
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                            <table class="table">
                                            <tr>
                                                <td>Category</td>
                                                <td><input type="text" name="txtCategory" placeholder="Category Name" class="form-control" required></td>
                                            </tr>
                                            <!--<tr>
                                                <td>image</td>
                                                <td><input type="file" name="cimage" placeholder="true" class="form-control">-->
                                          
                                            <tr>
                                                <td>Status</td>
                                                <td><select name="status1" required="true" class="form-control">
                                                  <option value="1">&nbsp;on</option>
												  <option value="0">&nbsp;off</option>
                                                </select></td>
                                            </tr>
                                             <tr>
                                                <td>category priviledge</td>
                                                <td><select name="catepriv" required="true" class="form-control">
                                                  <option value="farmer">&nbsp;farmer</option>
                                                  <option value="seller">&nbsp;seller</option>
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td><a href="index.php"class="btn btn-info btn-xs black">Back</a></td>
                                                <td><input type="submit" name="update" class="btn btn-success btn-xs purple from-control" value="add"></td>
                                            </tr>
                                           
                                           
                                          </table>
                                            </TABLE>
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
  type: 'success',
  title: 'Category Added Successfully',
})
  }
</script>
</body>
</html>