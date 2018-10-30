
        function addCommas(nStr) {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + '.' + '$2');
            }
            return x1;
        }

$( document ).ready(function(){
            //Perform Ajax request.
            fetch_data();
            
        });
        function fetch_data()
        {
            $.ajax({
                url: '/frontend/showcart',
                type : 'GET',
                dataType : 'json',
                success: function(data){
                    var cart = '';
                    //If the success function is execute,
                    //then the Ajax request was successful.
                    //Add the data we received in our Ajax
                    //request to the "content" div.
                    // $('#content').html(data);
                    $.each(data, function (key, items) {
                        $.each(items, function (key, datas) {
                            cart +="<tr>";
                            cart +=        "<td class='product-in-table'>";
                            cart +=           " <img class='img-responsive' src='' alt=''>";
                            cart +=            "<div class='product-it-in'>";
                            cart +=                "<h3>"+ datas.type +"   "+ addCommas(datas.nominal) +"</h3>";
                            cart +=                "<span>"+ datas.voucher_code +"</span>";
                            cart +=            "</div>";    
                            cart +=        "</td>";
                            cart +=        "<td></td>";
                            cart +=        "<td>";
                            cart +=            "<button type='button' class='quantity-button' onclick='deaddQty("+ datas.id +")' name='subtract'>-</button>";
                            cart +=            "<input type='text' disabled class='quantity-field' name='qty1' value='"+ datas.qty +"' id='qty1"+ datas.id +"'/>";
                            cart +=            "<button type='button' class='quantity-button' onclick='addQty("+ datas.id +")' name='add' value='+'>+</button>";
                            cart +=        "</td>";
                            cart +=        "<td class='shop-red'>"+ addCommas(datas.qty * datas.nominal) +"</td>";
                            cart +=        "<td>";
                            cart +=            "<button type='button' class='close' onclick='cancelorder("+ datas.id +")'><span>&times;</span><span class='sr-only'>Close</span></button>";
                            cart +=        "</td>";
                            cart +=    "</tr>";
                            // console.log(cart)
                        });
                    });
                    $('table tbody').html(cart);
                   // console.log(data)
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    // $('#content').html(errorMsg);
                  }
            });
        }

        function deaddQty(id) 
        {
            id += ''
            var oldValue = $('#qty1'+id).val();
            
            if (oldValue == 1) {
               alert('This is minimum of order Quantity');
            } else {
                $.ajax({
                    url: '/frontend/detach/'+id,
                    type : 'GET',
                    dataType : 'json',
                    success: function(data){
                        
                        console.log(data)
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                        // $('#content').html(errorMsg);
                      }
                });
            }
            fetch_data();
            //$('#qty1'+id).val(newVal)
           }
        function addQty(id) 
        {
            id += ''
            var oldValue = $('#qty1'+id).val();
            if (oldValue == 0) {
               var newVal = 0
            } else {
                var newVal = parseInt(oldValue) + 1;
            }
            $.ajax({
                url: '/frontend/attach/'+id,
                type : 'GET',
                dataType : 'json',
                success: function(data){
                    
                    console.log(data)
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    // $('#content').html(errorMsg);
                  }
            });
            fetch_data();
            //$('#qty1'+id).val(newVal)
        }
        function cancelorder(id)
        {
            id += ''
            var r = confirm("Want To Cancel Order?");
            if (r == true) {
                alert('Order Has Canceled');
                $.ajax({
                    url: '/frontend/cancel/'+id,
                    type : 'GET',
                    dataType : 'json',
                    success: function(data){
                        console.log(data)
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                        // $('#content').html(errorMsg);
                      }
                });
                fetch_data();
            } else {
                fetch_data();
            }
        }
