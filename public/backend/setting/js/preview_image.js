function viewlogo(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#logo').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#preview_logo").change(function() {
  viewlogo(this);
});
