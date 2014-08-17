$.fn.ajaxUpload = function(options) {
	
	var file = this[0].files[0];
	var phpFile = options.phpFile;
	var fd = new FormData();
	fd.append(options.fileNameToSend, file);
	$.ajax({
		url: phpFile,
		method: "POST",
		data: fd,
		processData: false,
		contentType: false,
		success: function(data) {
			options.callback(data);
		}
	});

};