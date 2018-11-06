@section('add_header')
    {{--  additional footer  --}}
@endsection

@section('add_footer')
<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
<script type="text/javascript" src="{{asset('js/firebase-price_list.js')}}"></script>
<script type="text/javascript">

    let id = $('#load_data').attr('index');
    firebase.database().ref().child('item/' + id).on('value', function(snapshot) {
        var value = snapshot.val();
        console.log(value);
        var updateData = '\
            <div class="col-md-6 md-margin-bottom-50">\
                <div class="ms-showcase2-template">\
                    <div class=" ms-skin-default" id="masterslider">\
                        <img class="ms-brd" src="'+value.gambar+'" >\
                    </div>\
                </div>\
            </div>\
            <div class="col-md-6">\
                <strong><h1>'+value.nama+'</h1></strong>\
                <h3>'+value.kategori+'</h3>\
                <h3>Rp '+addDot(value.harga)+' | Stok '+value.stok+'</h3>\
                <h4>'+value.deskripsi+'</h4><br>\
                <form id="form_order" action="{{url("/item/store")}}" name="f1" class="product-quantity sm-margin-bottom-20" method="post">\
                    @csrf\
                    <button type="button" class="quantity-button" name="subtract" onclick="javascript: subtractQty();" value="-">-</button>\
                    <input type="hidden" name="kode" value="'+value.kode+'" />\
                    <input type="hidden" name="harga" value="'+value.harga+'" />\
                    <input type="number" class="quantity-field" name="qty" value="1" id="qty" min="0" max="'+value.stok+'"/>\
                    <button type="button" id="add" class="quantity-button" name="add" value="+">+</button>\
                    <button type="submit" class="btn-u btn-u-sea-shop btn-u-lg">Add to Cart</button>\
                    @if(Session::has("message"))\
                    <p class="alert {{ Session::get("alert-class", "alert-info") }}">{{ Session::get("message") }}</p>\
                    @endif\
                </form>\
            </div>';
        $('#load_data').html(updateData);
        $('#active').text(value.nama);
    });
    $(document).on("click", "#add", function (e) {
		e.preventDefault();
		document.getElementById("qty").value++;
    });

$('#form_order').submit(function(event) {
    /* Act on the event */
    if ($('#qty').val() <= 0) {
        event.preventDefault();
    }
});

function addDot(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return parts.join(".");
}


</script>
@endsection