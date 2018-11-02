@section('add_header')
    {{--  additional footer  --}}
@endsection

@section('add_footer')
<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
<script type="text/javascript" src="{{asset('js/firebase-price_list.js')}}"></script>
<script type="text/javascript">

    let lastIndex = 0;
    const dbRefItem = firebase.database().ref().child('item');
    dbRefItem.on('value', function(snapshot) {
    console.log(snapshot.val());
    let value = snapshot.val();
    let count = snapshot.numChildren();
    let htmls = [];

    $.each(value, function(index, value){
        if(value) {
            htmls.push(' <div class="col-sm-3"> \
                <div class="product-img product-img-brd">\
                    <a href="{{url("/item/")}}/'+index+'"><img class="full-width img-responsive" src="{{asset("FrontEnd")}}/assets/img/blog/16.jpg"\
                            alt=""></a>\
                </div>\
                <div class="product-description product-description-brd">\
                    <div class="overflow-h ">\
                        <div class="pull-left">\
                            <h4 class="title-price"><a href="{{url("/item/".'+value.id+')}}"></a>'+value.nama+' | '+value.harga+'</h4>\
                        </div>\
                    </div>\
                </div>\
            </div>\ ');
        }
        lastIndex = index;
    });

    $('#load').html(htmls);
    $('#count').text(count+' Result');
});
</script>
@endsection