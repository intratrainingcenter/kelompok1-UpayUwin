@section ('css')
@endsection
@section ('js')
	<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
	<script type="text/javascript" src="{{asset('js/firebase-price_list.js')}}"></script>
	<script type="text/javascript">

		var dataimage = '';
		//get data
		var lastIndex = 0;
		const dbRefItem = firebase.database().ref().child('item');
		dbRefItem.on('value', function(snapshot) {
	    var value = snapshot.val();
	    var htmls = [];
	    $.each(value, function(index, value){
				//get image
	    	if(value) {
	    		htmls.push('<tr>\
	        		<td>'+ value.kode +'</td>\
	        		<td>'+ value.nama +'</td>\
							<td>'+value.kategori+'</td>\
	        		<td>'+ value.harga +'</td>\
	        		<td>'+ value.deskripsi +'</td>\
	        		<td>'+ value.stok +'</td>\
	        		<td><img src="'+value.gambar+'" height="100" width="100"/></td>\
	        		<td><button type="button" class="btn btn-outline-warning updateData" data-toggle="modal" data-target="#Modal-edit" data-id="'+index+'"><i class="fas fa-pencil-alt"></i></button>\
							<button type="button" class="btn btn-outline-danger removeData" data-toggle="modal" id="viewmodaledit" data-target="#Modal-delete" data-id="'+index+'"><i class="fas fa-trash-alt"></i></button></tr>');
	    	}
	    	lastIndex = index;
	    });
	    $('#result').html(htmls);
	});

	//upload image add
	var uploader = document.getElementById("uploader");
	var fileButton = document.getElementById("fileButton");
  fileButton.addEventListener('change', function(e){
  var file = e.target.files[0];
	var idimage = parseInt(lastIndex) + 1;
	var rename = file.name + idimage;
  var storageRef = firebase.storage().ref('item/' + rename);
    	var task = storageRef.put(file);
			task.on('state_changed',
			function progress(snapshot){
				var percentage=(snapshot.bytesTransferred / snapshot.totalBytes)*100;
				uploader.value=percentage;
				if (percentage==100) {
					storageRef.getDownloadURL().then(function(url){
						downloadURL = url;
						$('#saveadd').on('click', function(){
							var values = $("#form_add").serializeArray();
							var code_item 			= values[0].value;
							var name_item 			= values[1].value;
							var category_item		= values[2].value;
							var price_item 			= values[3].value;
							var stock_item 			= values[4].value;
							var description_item = values[5].value;
							var image_item 			=  downloadURL;
							var iditem 					= parseInt(lastIndex) + 1;
						    firebase.database().ref().child('item/' + iditem).set({
						        kode: code_item,
						        nama: name_item,
						        kategori: category_item,
						        harga: price_item,
										deskripsi: description_item,
										stok: stock_item,
										gambar:image_item,
						    });
								event.preventDefault()
								$('#Modal-add').modal('hide');
						});

					});
				}
			},function error(err){
			},
		 );
  });


	//remove data
	$("body").on('click', '.removeData', function() {
		var id = $(this).attr('data-id');
		$('body').find('.item-remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
	});

	$('.confirm-delete-item').on('click', function(){
		var values = $(".item-remove-record-model").serializeArray();
		var id = values[0].value;
		firebase.database().ref().child('item/' + id).remove();
	    $('body').find('.item-remove-record-model').find( "input" ).remove();
			event.preventDefault()
		$("#Modal-delete").modal('hide');
	});

	$('.remove-data-from-delete-form').click(function() {
		$('body').find('.item-remove-record-model').find( "input" ).remove();
	});


	//update data
	var updateID = 0;
	$('body').on('click', '.updateData', function() {
		updateID = $(this).attr('data-id');
	firebase.database().ref().child('item/' + updateID).on('value', function(snapshot) {
			var value = snapshot.val();
			var updateData = '<label class="labels">Kode item :</label>\
			<input type="text" name="code_item" class="form-control" placeholder="Kode item Here" value="'+value.kode+'">\
			<label class="labels">Nama item :</label>\
			<input type="text" name="name_item" class="form-control" placeholder="Nama item Here" value="'+value.nama+'">\
			<label class="labels">Kategori :</label>\
			<select name="category" class="form-control" required>\
					@foreach($category as $value)\
							<option id="category_item" value="{{$value->nama_kategori}}">{{$value->nama_kategori}}</option>\
					@endforeach\
			</select>\
			<label class="labels">Harga :</label>\
			<input type="number" name="price" class="form-control" placeholder="Harga Here" value="'+value.harga+'">\
			<label class="labels">Stok :</label>\
			<input type="number" name="stock" class="form-control" id="cono1" value="'+value.stok+'">\
			<label class="labels">Deskripsi :</label>\
			<input type="text" name="Description" class="form-control" id="cono1" value="'+value.deskripsi+'">';
			$('#resultupdate').html(updateData);
		});
	});

	$('.saveupdate').on('click', function() {
		var values = $("#modal-update").serializeArray();
		var postData = {
			 kode				: values[0].value,
			 nama				: values[1].value,
			 kategori		: values[2].value,
			 harga			: values[3].value,
			 stok				: values[4].value,
			 deskripsi	: values[5].value,
		};

		var updates = {};
		updates['item/' + updateID] = postData;

		firebase.database().ref().update(updates);
		event.preventDefault()
		$("#Modal-edit").modal('hide');
	});

	</script>

@endsection
