<?php
//Import Student Data
 if(!isset($_POST['Submit']))
  header ('Location: ./');
?>
<?php include_once('header.php'); ?>
<div class="page_content">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">
      <table class="table table-bordered tabcenter table-striped">
        <tr>
          <td><strong>ID</strong></td>
          <td><strong>Year of Admission</strong></td>
          <td><strong>Semester</strong></td>
          <td><strong>Batch</strong></td>
          <td><strong>Department</strong></td>
          <td><strong>Name</strong></td>
          <td><strong>Roll Number</strong></td>
          <td><strong>Error</strong></td>
        </tr>
        <?php
	$Counter=0;
	$FileUploadPath= "uploads/";
	 if ((($_FILES["Student-Data-CSV"]["type"] == "application/vnd.ms-excel" || $_FILES["Student-Data-CSV"]["type"] =="text/csv"))
&& ($_FILES["Student-Data-CSV"]["size"] < 20000000))
  {
  if ($_FILES["Student-Data-CSV"]["error"] > 0)
    {
    $result['response']= "Return Code: " . $_FILES["Student-Data-CSV"]["error"] . "<br />";
    }else{
      $FileName = rand(112255,11556554).'.'.pathinfo($_FILES['Student-Data-CSV']['name'],PATHINFO_EXTENSION);
      move_uploaded_file($_FILES["Student-Data-CSV"]["tmp_name"],
      $FileUploadPath . $FileName);
	  $FileName = $FileUploadPath . $FileName;
	  //echo $FileName;
	  //$result['response']= "Success";
     //echo "success";
	  }
    }else{
    echo "invalid file";
	//$result['response']= "Invalid File";
    }
	$file = fopen($FileName,"r");
	$data = fgetcsv($file);
	while(!feof($file))
	{
		$Counter++;
		$data = fgetcsv($file);
		$yoa = trim($data[0]);
		$sem = trim($data[1]);
		$batch = trim($data[2]);
		$admn = trim($data[3]);
		$roll = trim($data[4]);
		$uid = trim($data[5]);
		$name = trim($data[6]);
		$sex = trim($data[7]);
		$dept = substr($uid,0,2);
		$SQL = mysql_query("INSERT into student_data (yoa,sem,department,batch,admn,roll,uid,name,sex) values ('$yoa','$sem','$dept','$batch','$admn','$roll','$uid','$name','$sex')");
		if($SQL)
		 {
		  echo '<tr>
          <td>'.$Counter.'</td>
          <td>'.$yoa.'</td>
          <td>'.$sem.'</td>
          <td>'.$batch.'</td>
          <td>'.$dept.'</td>
          <td>'.$name.'</td>
          <td>'.$roll.'</td>
          <td>Success</td>
          </tr>';
		 }
		else
		{
		  echo '<tr>
          <td>'.$Counter.'</td>
          <td>'.$yoa.'</td>
          <td>'.$sem.'</td>
          <td>'.$batch.'</td>
          <td>'.$dept.'</td>
          <td>'.$name.'</td>
          <td>'.$roll.'</td>
          <td>'.mysql_error().'</td>
          </tr>';
		}
	}
	?>
      </table>
    </div>
  </div>
</div>
<?php include_once('footer.php');


