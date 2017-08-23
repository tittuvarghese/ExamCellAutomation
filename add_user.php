<?php include_once('header.php'); ?>
    <div class="page_content" style="margin-top:5%;">
  <?php
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Failed to add new admin. #'.$_GET['error'].'</div>';
  else if(isset($_GET['success']))
   echo '<div class="alert alert-success text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Success..!</b> Added new user.</div>';
  ?>
    <div class="container-fluid">
      <div class="row">
      <center><h3>Add new Admin</h3></center>
      <p>&nbsp;</p>
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
        <div class="col-xs-12 col-sm-10  col-md-8 col-lg-8">
          <form action="create_user.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group row">
              <label for="input_no_of_classes" class="col-sm-3 form-control-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_no_of_exam_days" class="col-sm-3 form-control-label">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_no_of_classes" class="col-sm-3 form-control-label">E-Mail</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_no_of_classes" class="col-sm-3 form-control-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_no_of_classes" class="col-sm-3 form-control-label">Department</label>
              <div class="col-sm-9">
               <select name="department" id="department" class="form-control">
                <option value="CSE">Computer Science Engineering</option>
                <option value="ECE">Electronics and Communication Engineering</option>
                <option value="EI">Electronics and Instrumentation Engineering</option>
                <option value="EEE">Electrical and Electronics Engineering</option>
               </select>
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