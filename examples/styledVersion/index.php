<!DOCTYPE html>
<html>
<head>
	<title>Styled Version jQuery Upload Function</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="container">
		<h1>Upload Files</h1>
		<button id="button">Select Files</button>
		<input style="display: none;" type="file" id="file">
		<div class="well">
		</div>
	</div>

<script src="../../src/jquery.js"></script>
<script src="../../src/jqueryUploadFunction.js"></script>
<script>
	$("#button").click(function(){
		$("#file").click();
	});
	$("#file").change(function(){
		$(this).ajaxUpload({
			url: "serverside.php",
			fileName: "file",
			callback: function(response){
				if ( response != "Invalid" )
				{
					$(".well").append('<img src="' + response + '">');
				} else {
					alert("Cannot upload the file");
				}
			}
		});
	});
</script>
</body>
</html>