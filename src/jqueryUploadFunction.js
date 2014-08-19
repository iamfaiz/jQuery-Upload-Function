$.fn.ajaxUpload = function(options) {
	
	var file = this[0].files[0];
	var url = options.url;
	var fd = new FormData();
	fd.append(options.fileName, file);
	$.ajax({
		url: url,
		method: "POST",
		data: fd,
		processData: false,
		contentType: false,
		success: function(data) {
			options.callback(data);
		}
	});

};