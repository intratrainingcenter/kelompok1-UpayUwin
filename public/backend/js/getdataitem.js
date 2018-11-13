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
