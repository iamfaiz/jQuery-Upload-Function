<!DOCTYPE html>
<html>
<head>
	<title>Ajax Uploader Demo - Show Image in Real Time</title>
</head>
<body>


<input type="file" name="file" id="file">



<script src="../../src/jquery.js"></script>
<script src="../../src/jqueryUploadFunction.js"></script>
<script>

	$("#file").change(function() {
		$(this).ajaxUpload({
			phpFile: "serverside.php",
			fileNameToSend: "file",
			callback: function(abc) {
				console.log(abc);
			}
		});
	});

</script>
</body>
</html>