<?php
 session_start();
 if(isset($_SESSION['auth']))
 	$UserAuth = $_SESSION['auth'];
 if(!isset($UserAuth))
  header('Location: login.php');
  
//Databse Config File
include_once('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exam Cell Automation</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="content">
  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4"> <img src="img/logo.png" alt="Exam Cell Automation" title="Exam Cell Automation"/> </div>
        <div class="col-xs-12 col-sm-6  col-md-8 col-lg-8">
          <nav class="main_menu">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Arrangements</a></li>
              <li><a href="import_student.php">Student Data</a></li>
              <li><a href="#">Modify</a></li>
              <?php
			   if(isset($UserAuth))
			    echo '<li class="danger"><a href="logout.php">Logout</a></li>';
			  ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>