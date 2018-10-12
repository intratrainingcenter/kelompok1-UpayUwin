<script>
	//Display an image 
	function readURL(input) {

	  	if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    reader.onload = function(e) {
		      $('.fotoAdd').attr('src', e.target.result);
		    }
		    reader.readAsDataURL(input.files[0]);
		  }
	}
	function readURL_edit(input,id) {

	  	if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    reader.onload = function(e) {
		      $('#foto'+id).attr('src', e.target.result);
		    }
		    reader.readAsDataURL(input.files[0]);
		  }
	}
</script>