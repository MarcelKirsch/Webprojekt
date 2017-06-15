	$(document).on('ready', function() {
	    $("#upload-pictures").fileinput({
	    	initialPreviewAsData: true,
	        deleteUrl: "/site/file-delete",
	        overwriteInitial: false,
	        autoReplace: true,
	        maxFileCount: 10,
	        allowedFileExtensions: ["jpg", "png", "jpeg"],
	        maxFileSize: 5120,

	    });
	});