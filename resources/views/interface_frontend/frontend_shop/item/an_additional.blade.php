@section('add_header')
    {{--  additional footer  --}}
@endsection

@section('add_footer')
<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
<script type="text/javascript" src="{{asset('js/firebase-price_list.js')}}"></script>
<script>
    let lastIndex = 0;
    let category = $('#load').attr('category');
    console.log(category);
    
    const dbRefItem = firebase.database().ref().child('item').orderByChild("kategori").equalTo(category);
    dbRefItem.on('value', function(snapshot) {
    console.log(snapshot.val());
    let value = snapshot.val();
    let count = '';
    let htmls = [];
    
   

    if(value){
         $.each(value, function(index,value){
            var urlimage = [];
            var storageRef = firebase.storage().ref("item/"+value.gambar );
            storageRef.getDownloadURL().then(function(url) {
                urlimage.push(url) ;
            });
            console.log(urlimage);
            count = snapshot.numChildren()+' result';
            htmls.push(' <div class="col-sm-3"> \
                <div class="product-img product-img-brd">\
                    <a href="{{url("/item/")}}/'+index+'"><img class="full-width img-responsive" src="" alt=""></a>\
                </div>\
                <div class="product-description product-description-brd">\
                    <div class="overflow-h ">\
                        <div class="pull-left">\
                            <h4 class="title-price"><a href="{{url("/item/".'+value.id+')}}"></a>'+value.nama+' <br> '+value.harga+'</h4>\
                        </div>\
                    </div>\
                </div>\
            </div>\ ');
        });
    }else{
        count = '0 Result'
        htmls.push('<center>\
            <h2>Sorry Item From {{$category}} Not Found</h2>\
        </center>\ ');
    }
    
    $('#load').html(htmls);
    $('#count').text(count);
});
</script>
@endsection