$(document).on('change paste keyup', '#image' , function(){
		$('#logo').hide();
		$('#uploadPreview').show();
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("image").files[0]);
		oFReader.onload = function(oFREvent) {
			document.getElementById("uploadPreview").src = oFREvent.target.result;
		}
	});
