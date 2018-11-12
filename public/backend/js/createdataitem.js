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
