$(document).ready(function () {
  $.ajax({
    type: 'GET',
    url: location.origin +'/backend/settingweb',
    data: {
      _method: 'GET'
    },
  }).done(function (data) {
    console.log(data);
    $(".tittle").text(data.tittle);
    $("meta[name='address']").attr("content", data.address);
    $("meta[name='phone']").attr("content", data.phone);
    $(".address").text(data.address);
    $(".phone").text(data.phone);
    $("link[rel=icon]").attr("href","backend/img/"+ data.logo);
    $(".imageecommerce").attr("src","backend/img/"+ data.logo);
  }).fail(function (data) {
    console.log(data);
  })
});
