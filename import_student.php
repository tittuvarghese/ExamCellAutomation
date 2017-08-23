<?php include_once('header.php'); ?>
<div class="page_content">
  <div class="container-fluid">
    <div class="row">
      <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
      <div class="col-xs-12 col-sm-10  col-md-8 col-lg-8">
        <form action="import.php" method="post" enctype="multipart/form-data">
          <center>
            <div class="form-group row">
              <label class="text-center col-sm-12 form-control-label">Please Upload a Valid .CSV File. Download Sample here.
              <p>&nbsp;</p>
              </label>
            </div>
            <div class="form-group row">
              <input type="file" name="Student-Data-CSV" id="Student-Data-CSV" placeholder="Upload a CSV File" required="required">
            </div>
            <div class="form-group row">
              <input class="btn btn-success" type="submit" value="Import Student Data" name="Submit"/>
            </div>
          </center>
        </form>
      </div>
      <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
    </div>
  </div>
</div>
<?php include_once('footer.php');
