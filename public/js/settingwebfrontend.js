$(document).ready(function () {
  $.ajax({
    type: 'GET',
    url: location.origin +'/settingweb',
    data: {
      _method: 'GET'
    },
  }).done(function (data) {
    $(".tittle").text(data.tittle);
    $("meta[name='address']").attr("content", data.address);
    $("meta[name='phone']").attr("content", data.phone);
    $(".address").text(data.address);
    $(".phone").text(data.phone);
    $(".nameecommerce").text(data.tittle);
  }).fail(function (data) {

  })
});
