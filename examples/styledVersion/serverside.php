<?php

if ( isset($_FILES['file']) )
{

	if ( $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/png" )
	move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
	echo "uploads/" . $_FILES["file"]["name"];

} else {
	echo "Invalid";
}

?>