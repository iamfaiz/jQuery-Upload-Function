jQuery Upload Function
======================

The most simple jquery upload function.

**1) Simple Example:** 

HTML  
----
    <input type="file" name="file" id="file">

jQuery
------

	$("#file").change(function() {
		$(this).ajaxUpload({
			phpFile: "serverside.php",
			fileNameToSend: "file",
			callback: function(responseFromServerSide) {
				console.log(responseFromServerSide);
			}
		});
	});
	
**2) Displaying the uploaded image immediately:**  
This example is located in the examples/showAnImageInRealTime directory:  

HTML:  
----
    <input type="file" name="file" id="file">
    <div></div>
jQuery
------

	$("#file").change(function() {
		$(this).ajaxUpload({
			phpFile: "serverside.php",
			fileNameToSend: "file",
			callback: function(response) {
				if ( response == "Invalid" )
				{
					$("div").html("Cannot upload the file");
				} else {
					var imageHTML = '<img src="' + response + '">';
					$("div").html(imageHTML);
				}


			}
		});
	});

Server Side ( PHP )
-------------------

    <?php
    
    if ( $_FILES['file']['type'] === "image/jpeg")
    {
    	move_uploaded_file( $_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"] );
    	echo 'uploads/' . $_FILES["file"]["name"];
    } else {
    	echo "Invalid";
    }


>More examples comming soon...	
>Drag and drop upload comming soon...
