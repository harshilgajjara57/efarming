<!DOCTYPE html>
<html>
<head>
    <title>Admin login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="css/components.css" />
    <link type="text/css" rel="stylesheet" href="css/custom.css" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>
    <!--End of Plugin styles--> 
    <link type="text/css" rel="stylesheet" href="css/pages/login1.css"/>
</head>
<body>
    <form action="dbAdminLogin.php" method="Post">
          <?php
                            if(isset($_GET["message"]))
                            {
                              echo $_GET["message"];
                            }
                          ?>
        <h3 class="text-center">
                            <span class="text-white"> &nbsp;<br>Admin Log In<br></span>
                        </h3>
                         <div class="input-group">
                                     <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                      
                                    </div>
                                </div>
                            </div>
        UserName:<input type="text" name="Username" id="username" placeholder="Username"><br><br>
        Password:<input type="Password" id="password"   name="Password" placeholder="Password"><br><br>
        <input type="submit" value="Log In" name="btnLogin">
    </form>

</body>

</html>