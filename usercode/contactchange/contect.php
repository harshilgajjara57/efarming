<?php
require_once("../login/CheckSession.php");
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>add contact</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="../images/logo/logo.png"/>
    <link rel="stylesheet" type="text/css" href="../vendor/fp/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="col-lg-3">
        <div class="edit2">
          <form action="addcontact.php" method="post"> 
            <input type="hidden" name="add" class="form-control" value="<?php echo $_SESSION['id'] ?>">
           <br><br> <input type="text" name="addcontact" class="form-control" placeholder="contact" pattern="[789][0-9]{9}" required="true"><br>
            <input type="submit" name="Csubmit" value="submit" class="form-control btn btn-success">
            <label><a href="../profile.php"><i class="far fa-arrow-alt-circle-left"></i></a>
            </label>

          </form>
        </div>
      </div>
      </body>
</html>