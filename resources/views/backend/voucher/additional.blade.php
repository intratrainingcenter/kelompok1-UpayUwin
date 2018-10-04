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
			$('#add_parent').hide();

			$('.add-voucher').click(function(event) {
				$('#add_parent').show();
			});
			$('#close').click(function(event) {
				$('#add_parent').hide();
			});
		});
	</script>
@endsection

							