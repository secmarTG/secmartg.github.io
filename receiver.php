<?php
	$SensorValue = $_GET['mm'];

	$Content = "Distance:".$SensorValue."mm";

	$Status = file_put_content('text.txt',$Content,FILE_APPEND);
	if($Status != false){
		echo "Success";
	}else {
		echo "Failure";
	}

?>