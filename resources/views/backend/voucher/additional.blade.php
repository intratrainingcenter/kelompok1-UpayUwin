@section ('css')
	<style>
		.labels{
			margin-top: 8px;
		}
		.add-button{
			margin-bottom: 10px;
		}
		.closebtn {
		    margin-left: 15px;
		    font-weight: bold;
		    float: right;
		    font-size: 22px;
		    line-height: 20px;
		    cursor: pointer;
		    transition: 0.3s;
		}
		.fotoAdd,.foto{
			margin-top: 10px;
			width: 100%;
			height: 100%;
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

							