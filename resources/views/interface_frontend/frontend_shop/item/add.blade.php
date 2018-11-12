@section('add_header')
    {{--  additional footer  --}}
@endsection

@section('add_footer')
<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
<script type="text/javascript" src="{{asset('js/firebase-price_list.js')}}"></script>
<script>
    let lastIndex = 0;
    let category = $('#load').attr('category');

    const dbRefItem = firebase.database().ref().child('item').orderByChild("kategori").equalTo(category);
    dbRefItem.on('value', function(snapshot) {
    console.log(snapshot.val());
    let value = snapshot.val();
    let count = '';
    let htmls = [];



    if(value){
         $.each(value, function(index,value){
            count = snapshot.numChildren()+' result';
            htmls.push(' <div class="col-md-3"> \
                <div class="product-img product-img-brd">\
                    <a href="{{url("/item")}}/'+category+'/'+index+'"><img class="full-width img-responsive" src="'+value.gambar+'" alt=""></a>\
                </div>\
                <div class="product-description product-description-brd">\
                    <div class="overflow-h ">\
                        <div class="pull-left">\
                            <a href="{{url("/item")}}/'+category+'/'+index+'"><h2><strong>'+value.nama+'</strong></h2> </a>\
                            <h3>'+toUSD(value.harga)+'</h3>\
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

    $('#active').html(category);
    $('#load').html(htmls);
    $('#count').text(count);
});

function toUSD(number) {
    var number = number.toString(), 
    dollars = number.split('.')[0], 
    cents = (number.split('.')[1] || '') +'00';
    dollars = dollars.split('').reverse().join('')
        .replace(/(\d{3}(?!$))/g, '$1,')
        .split('').reverse().join('');
    return '$' + dollars + '.' + cents.slice(0, 2);
}
</script>

@endsection
