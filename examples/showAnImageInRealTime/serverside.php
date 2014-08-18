<?php

if ( $_FILES['file']['type'] === "image/jpeg")
{
	move_uploaded_file( $_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"] );

	echo 'uploads/' . $_FILES["file"]["name"];

} else {
	echo "Invalid";
}