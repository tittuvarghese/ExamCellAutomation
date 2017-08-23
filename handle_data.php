<?php
 if(!isset($_POST['Submit']))
  header ('Location: ./');
  
 include_once('header.php');
?>
<?php
$no_exam_days = $no_class_rooms = $no_classes = 0;
 if(isset($_POST['no_exam_days']))
  $no_exam_days = $_POST['no_exam_days'];
 if(isset($_POST['no_classes']))
  $no_classes = $_POST['no_classes'];
 if(isset($_POST['no_class_rooms']))
  $no_class_rooms = $_POST['no_class_rooms'];

 //Handling Errors if its not a valid input
 if (!is_numeric($no_exam_days) || !is_numeric($no_classes) || !is_numeric($no_exam_days) || $no_exam_days <= 0 || $no_classes <=0 || $no_class_rooms <=0 || $no_exam_days > 5)
  header ('Location: ./?error=invalid');
 else
 {
	 $no_of_exam_days_counter = 1;
	 $no_of_class_rooms_counter =1;
	 $counter = 0;
	 ?>

<div class="container-fluid" style="margin-top:30px; margin-bottom:50px;">
  <form>
    <h3>Batches / Classes Details</h3>
    <?php
  $SemDeptDiv = array (); $j = 0;
  $SQLDistinctBatch = mysql_query("SELECT DISTINCT yoa,sem,department,batch FROM student_data group by yoa,sem,department,batch ORDER BY sem ASC,batch ASC");
  while ($row = mysql_fetch_array($SQLDistinctBatch))
  {
	  if($row['sem']!='' && $row['batch']!='' && $row['department']!='')
	 	 array_push($SemDeptDiv,$row['sem'].' '.$row['department'].' '.$row['batch']);
  }
  //print_r($SemDeptDiv);
   $BatchCounter = 1;
   echo '<div class="row">';  
   for ($BatchCounter = 1; $BatchCounter <= $no_classes; $BatchCounter++)
   { 
	   echo '<div class="col-xs-3 col-sm-3  col-md-3 col-lg-3">';
        echo '<div class="form-group">';
		 echo '<select class="form-control" id="Batch-'.$BatchCounter.'" name="Batch-'.$BatchCounter.'" required="required">';
		  echo '<option value="Select Batch #'.$BatchCounter.'">Select Batch #'.$BatchCounter.'</option>';
		   for ($j=0; $j < count($SemDeptDiv); $j++)
		   {
			   	echo '<option value="'.$SemDeptDiv[$j].'">'.$SemDeptDiv[$j].'</option>';
		  }
		 echo '</select>';
        echo '</div>';
      echo '</div>';
   }
   echo "</div>";
  ?>
    <h3>Classroom Availability</h3>
    <?php
  for($no_of_exam_days_counter = 1; $no_of_exam_days_counter <= $no_exam_days ; $no_of_exam_days_counter++)
  {
	$counter++;
    echo '<div class="row">';
	for ($no_of_class_rooms_counter = 1; $no_of_class_rooms_counter <= $no_class_rooms; $no_of_class_rooms_counter++)
	{
		//Col 1 - Exam Date
      echo '<div class="col-xs-3 col-sm-3  col-md-3 col-lg-3">';
        echo '<div class="form-group">';
		 if($counter > 0)
          echo '<input type="text" class="form-control" id="exam_date-'.$no_of_exam_days_counter.'" name="examdate_'.$no_of_exam_days_counter.'" placeholder="Exam Date #Day-'.$no_of_exam_days_counter.'" required="required">';
        echo '</div>';
      echo '</div>';
	  //Col 2 - Room Number
	  echo '<div class="col-xs-3 col-sm-3  col-md-3 col-lg-3">';
        echo '<div class="form-group">';
          echo '<input type="text" class="form-control" id="roomNumber" name="roomnumber'.$no_of_exam_days_counter.'_'.$no_of_class_rooms_counter.'" placeholder="Class Room Number #'.$no_of_class_rooms_counter.' for #Day-'.$no_of_exam_days_counter.'" required="required">';
        echo '</div>';
      echo '</div>';
	  //Col 3 - Number of Rows
	  echo '<div class="col-xs-3 col-sm-3  col-md-3 col-lg-3">';
        echo '<div class="form-group">';
          echo '<input type="text" class="form-control" id="roomNumber_row" name="roomnumber_row'.$no_of_exam_days_counter.'_'.$no_of_class_rooms_counter.'" placeholder="Number of Rows for #'.$no_of_class_rooms_counter.' for #Day-'.$no_of_exam_days_counter.'" required="required">';
        echo '</div>';
      echo '</div>';
	  //Col 4 - Number of Columns
	  echo '<div class="col-xs-3 col-sm-3  col-md-3 col-lg-3">';
        echo '<div class="form-group">';
          echo '<input type="text" class="form-control" id="roomNumber_row" name="roomnumber_column'.$no_of_exam_days_counter.'_'.$no_of_class_rooms_counter.'" placeholder="Number of Column for #'.$no_of_class_rooms_counter.' for #Day-'.$no_of_exam_days_counter.'" required="required">';
        echo '</div>';
      echo '</div>';
	  $counter = 0;
	}
   echo '</div>';
  echo '<script>
  		jQuery(function($) {
    		$( "#exam_date-'.$no_of_exam_days_counter.'" ).datepicker(
			{
				dateFormat: "dd-mm-yy"
			});
  		});
		</script>';
  }
  ?>
    <center>
      <div class="form-group row">
        <input class="btn btn-warning" type="reset" value="Reset" name="Reset"/>
        <input class="btn btn-success" type="submit" value="Submit" name="Submit"/>
      </div>
    </center>
  </form>
</div>
<?php	 
 }
?>
<?php include_once('footer.php');?>