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
	@include('backend.item.more-js')
	<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
	<script type="text/javascript" src="{{asset('js/firebase-price_list.js')}}"></script>
	<script type="text/javascript">
		//get data

		var lastIndex = 0;
		const dbRefItem = firebase.database().ref().child('item');
		dbRefItem.on('value', function(snapshot) {
			// console.log(snapshot.val());
	    var value = snapshot.val();
	    var htmls = [];
	    $.each(value, function(index, value){
	    	if(value) {
	    		htmls.push('<tr>\
	        		<td>'+ value.kode +'</td>\
	        		<td>'+ value.nama +'</td>\
	        		<td>'+ value.kategori +'</td>\
	        		<td>'+ value.harga +'</td>\
	        		<td>'+ value.deskripsi +'</td>\
	        		<td>'+ value.stok +'</td>\
	        		<td>'+ value.gambar +'</td>\
	        		<td><button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#Modal-edit" data-id="'+index+'"><i class="fas fa-pencil-alt"></i></button>\
							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#Modal-delete" data-id="'+index+'"><i class="fas fa-trash-alt"></i></button></tr>');
	    	}
	    	lastIndex = index;
	    });
	    $('#result').html(htmls);
	});

	$('#saveadd').on('click', function(){
		var values = $("#form_add").serializeArray();
		var kode 			= values[0].value;
		var nama 			= values[1].value;
		var kategori	= values[2].value;
		var harga 		= values[3].value;
		var stok 			= values[5].value;
		var deskripsi = values[4].value;
		var gambar 		= values[6].value;
		var iditem 		= lastIndex+1;

	    firebase.database().ref().child('item/' + iditem).set({
	        kode: kode,
	        nama: nama,
	        kategori: kategori,
	        harga: harga,
	        stok: stok,
					deskripsi: deskripsi,
	        gambar: gambar,
	    });
	});

	</script>

@endsection
