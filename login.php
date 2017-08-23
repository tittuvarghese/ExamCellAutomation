<?php
 session_start();
 if(isset($_SESSION['auth']))
 	$UserAuth = $_SESSION['auth'];
 if(isset($UserAuth))
  header('Location: index.php');
 else
  session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exam Cell Automation</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="content">
  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4"> <img src="img/logo.png" alt="Exam Cell Automation" title="Exam Cell Automation"/> </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
    <div class="page_content">
  <?php
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Authentication error..! Please check your username and password.</div>';

  ?>
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
        <div class="col-xs-12 col-sm-10  col-md-8 col-lg-8">
          <form action="login_action.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group row">
              <label for="input_no_of_exam_days" class="col-sm-3 form-control-label">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_no_of_classes" class="col-sm-3 form-control-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
              </div>
            </div>
            <center>
              <div class="form-group row">
                <input class="btn btn-warning" type="reset" value="Reset" name="Reset"/>
                <input class="btn btn-success" type="submit" value="Submit" name="Submit"/>
              </div>
            </center>
          </form>
        </div>
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
      </div>
    </div>
  </div>
<?php include_once('footer.php');