$('#modal1').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
});

$('#modal6').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
});

$('#modal4').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
});

$('.modal').on('hidden.bs.modal', function (e) {
  // do something...
  $(this).find('iframe').attr("src", $(this).find('iframe').attr("src"));
});

$('.text').click(function(){
  let id = $(this).parent().parent().find('img').data('target');
  $(id).modal('show');
});