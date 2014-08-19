<!DOCTYPE html>
<html>
<head>
	<title>Ajax Uploader Demo</title>
</head>
<body>


<input type="file" name="file" id="file">



<script src="../../src/jquery.js"></script>
<script src="../../src/jqueryUploadFunction.js"></script>
<script>

	$("#file").change(function() {
		$(this).ajaxUpload({
			url: "serverside.php",
			fileName: "file",
			callback: function(resonse) {
				console.log(resonse);
			}
		});
	});

</script>
</body>
</html>