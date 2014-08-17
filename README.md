jQuery Upload Function
======================

A most simple jquery upload function.

Simple Example:  

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
