jQuery Upload Function
======================
The most simple jquery upload function.

```JS
.ajaxUpload( options )
```

Options
-------

fileName: The name of the file to send to the server e.g. file, profile_picture etc.  

url: The url of the server side script to handle the file upload e.g. uploads/serverside.php etc.  

callback: The callback function to execute after successfull ajax request. e.g ```function(response){ console.log(response); }```


(**Note:** This callback function also accepts a parameter that is the response retured by the successfull ajax request)   



**1) Simple Example:** 

HTML  
----

```HTML
<input type="file" name="file" id="file">
```

jQuery
------

```JS
$("#file").change(function() {
	$(this).ajaxUpload({
		url: "serverside.php",
		fileName: "file",
		callback: function(responseFromServerSide) {
			console.log(responseFromServerSide);
		}
	});
});
```
	
**2) Displaying the uploaded image immediately:**  
This example is located in the examples/showAnImageInRealTime directory:  

HTML:  
----

```HTML
<input type="file" name="file" id="file">
<div></div>
```
jQuery
------

```javascript
$("#file").change(function() {
	$(this).ajaxUpload({
		url: "serverside.php",
		fileName: "file",
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
```

Server Side ( PHP )
-------------------

```php
<?php

if ( $_FILES['file']['type'] === "image/jpeg")
{
	move_uploaded_file( $_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"] );
	echo 'uploads/' . $_FILES["file"]["name"];
} else {
	echo "Invalid";
}
```


>More examples comming soon...	
>Drag and drop upload comming soon...
