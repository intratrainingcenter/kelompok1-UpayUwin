@section ('css')
<link href="{{asset('backend/css/voucher.css')}}" rel="stylesheet">
@endsection
@section ('js')
	<script>
		//dissable space
		$(document).on('keydown', '#code', function(e) {
		    if (e.keyCode == 32) return false;
		});
		$(document).ready(function() {
			var save = true;
			$('#label_danger').hide();
			var data = $.parseJSON($.ajax({
				url: '{{Route('cek.kode')}}',
				type: 'GET',
    			dataType: 'json',
    			 async: false
			}).responseText);

		// checking the voucher code if it has same value
		$('#code').keyup(function(event) {

			$.each(data, function(index, val) {

					if($('#code').val() == val.kode_voucher){
						save = false;
						$('#label_danger').show();
						$('#code').addClass('is-invalid');
						return false;
					}else{
						save = true;
						$('#label_danger').hide();
						$('#code').removeClass('is-invalid');
					}
				});
			});
			$(document).on('submit','#form_add',function(){
				if (save == false) {
					event.preventDefault();
         			toastr.error('Tidak dapat melanjutkan kode voucher sudah ada.', 'Danger!');
				}
			});
			//Display image on change input
			$("#input_logo").change(function() {
			  	readURL(this);
			});
			$(".input_logo").change(function() {
				let key = $(this).attr('key');
			  	readURL_edit(this,key);
			});
		});
	</script>
	@include('backend.voucher.more-js')
@endsection
