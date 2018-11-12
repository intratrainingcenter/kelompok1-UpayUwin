@section ('css')
@endsection
@section ('js')
	<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
	<script type="text/javascript" src="{{asset('js/firebase-price_list.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/js/getdataitem.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/js/createdataitem.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/js/removedataitem.js')}}"></script>
	<script type="text/javascript">
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
			<input type="text" name="Description" class="form-control" id="cono1" value="'+value.deskripsi+'">\
			<input type="hidden" name="stock" class="form-control" id="cono1" value="'+value.gambar+'">';
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
			 gambar			: values[6].value,
		};
		var updates = {};
		updates['item/' + updateID] = postData;
		firebase.database().ref().update(updates);
		event.preventDefault()
		$("#Modal-edit").modal('hide');
	});
function toUSD(number) {
    var number = number.toString(),
    dollars = number.split('.')[0],
    cents = (number.split('.')[1] || '') +'00';
    dollars = dollars.split('').reverse().join('')
        .replace(/(\d{3}(?!$))/g, '$1,')
        .split('').reverse().join('');
    return '$ ' + dollars + '.' + cents.slice(0, 2);
}
	</script>
@endsection
