@section('csslogin')
	{{-- your css here --}}
@endsection

@section('jslogin')
	{{-- your js here --}}
	<script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
	    $('#to-recover').on("click", function() {
	        $("#loginform").slideUp();
	        $("#recoverform").fadeIn();
	    });
	    $('#to-login').click(function(){

	        $("#recoverform").hide();
	        $("#loginform").fadeIn();
	    });
    </script>
@endsection
