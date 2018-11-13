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
