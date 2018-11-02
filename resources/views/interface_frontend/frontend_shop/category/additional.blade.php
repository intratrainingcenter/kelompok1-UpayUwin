@section('add_header')
	{{--  additional footer  --}}
@endsection

@section('add_footer')
    {{--  additional footer  --}}
<script>
    $(document).on("change", "#sortby", function (e) {
        e.preventDefault();
        let sort = $(this).find('option:selected').val() ;
        $.ajax({
            type: 'GET',
            url: '{{route("voucher.sort")}}',
            data: {'sort' : sort},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        }).done(function (data_load) {
            $('#load').html(data_load);
        }).fail(function (data_load) {
            console.log(data_load);
        })    
    });
</script>
        
@endsection