$(document).on('ready',function(){
    alert('Ready')
});

function fetch_data()
        {
            $.ajax({
                url: '/frontend/showfeed',
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