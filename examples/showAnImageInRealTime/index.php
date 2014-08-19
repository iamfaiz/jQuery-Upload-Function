<!DOCTYPE html>
<html>
<head>
	<title>Ajax Uploader Demo - Show Image in Real Time</title>
	<style type="text/css">
		img {
			max-width: 400px;
		}
	</style>
</head>
<body>


<input type="file" name="file" id="file">
<div></div>


<script src="../../src/jquery.js"></script>
<script src="../../src/jqueryUploadFunction.js"></script>
<script>

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

</script>
</body>
</html>