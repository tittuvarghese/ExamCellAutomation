<?php include_once('header.php'); ?>
  <div class="page_content">
  <?php
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Its invalid entry.</div>';
  ?>
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
        <div class="col-xs-12 col-sm-10  col-md-8 col-lg-8">
          <form action="handle_data.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group row">
              <label for="input_no_of_exam_days" class="col-sm-3 form-control-label">No. of Exam Days</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="no_exam_days" name="no_exam_days" placeholder="No. of Exam Days" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_no_of_classes" class="col-sm-3 form-control-label">No. of Classes / Batches</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="no_classes" name="no_classes" placeholder="No. of Classes / Batches" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="input_no_of_class_rooms" class="col-sm-3 form-control-label">No. of Available Classrooms</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="no_class_rooms" name="no_class_rooms" placeholder="No. of Available Classrooms for each day" required="required">
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