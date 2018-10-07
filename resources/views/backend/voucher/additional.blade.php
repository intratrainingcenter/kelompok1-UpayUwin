@section ('css')
	<style>
		.labels{
			margin-top: 8px;
		}
		.add-button{
			margin-bottom: 10px;
		}
	</style>
@endsection

@section ('js')
	<script>
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
		});
	</script>
@endsection

							