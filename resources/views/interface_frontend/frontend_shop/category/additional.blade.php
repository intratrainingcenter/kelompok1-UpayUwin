@section('add_header')
    {{--  additional footer  --}}
@endsection

@section('add_footer')
    {{--  additional footer  --}}
    $(document).on("change", "#sortby", function (e) {
        e.preventDefault();
        let sort = $(this).find('option:selected').val() ;

        $.ajax({
			type: 'GET',
            url: '{{url("/voucher/1")}}',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
			beforeSend: function () {
				$('.tunggu').show();
			},
		}).done(function (data_load) {
			console.log(data_load);
		

		}).fail(function (data_load) {
			console.log(data_load);
        })
        
    });
    
    $(document).on("change", "#aa", function (e) {
		e.preventDefault();

		let form_data = new FormData(this);
		// console.log(form_data);
		for (var value of form_data.values()) {
			console.log(value);
		}

		$.ajax({
			type: 'POST',
			url: '{{ URL::route("login") }}',
			data: $('#form_tambah').serialize(),
			beforeSend: function () {
				$('.tunggu').show();
			},
		}).done(function (data_load) {
			console.log(data_load);
			
			setTimeout(function () { $('.tunggu').animate({ opacity: '0.0' }, "fast"); }, 700);
			setTimeout(function () { $('.tunggu').hide(800); $('.tunggu').animate({ opacity: '1' }, "fast"); }, 900);

			if (data_load.status == "berhasil") {
				$('.alert_berhasil').show(1000);
				$('#isi_success').text('Ditambahkan');
				setTimeout(function () { $('.alert_berhasil').hide(1000); }, 5000);
			} else if (data_load.status == "kode") {
				$('.alert_kode').show(1000); setTimeout(function () { $('.alert_kode').hide(1000); }, 5000);
			} else {
				$('.alert_gagal').show(1000); setTimeout(function () { $('.alert_gagal').hide(1000); }, 5000);
			}

			$('#modal_tambah').modal('toggle');
			$('#modal_tambah').trigger("reset");
			
			
			load_data();

		}).fail(function (data_load) {
			console.log(data_load);
			
			$('#modal_tambah').modal('toggle');
			$('#modal_tambah').trigger("reset");

			$('.alert_gagal').show(1000); setTimeout(function () { $('.alert_gagal').hide(1000); }, 5000);
		})
	});
@endsection