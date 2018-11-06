@section('add_header')
    header
    {{--  additional footer  --}}
@endsection

@section('add_footer')
    footer
    {{--  additional footer  --}}
    <script>
    	 $('#form_order').submit(function(event) {
            	/* Act on the event */
            	  if ($('#qty').val() <= 0) {
            	  	event.preventDefault();
            	  }
            });
    </script>
@endsection