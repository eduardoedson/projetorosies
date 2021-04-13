AOS.init({
  duration: 2000
});

window.onscroll = function() { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    $('#btnTopo').css('display', 'block');
  } else {
    $('#btnTopo').css('display', 'none');
  }
}

$(document).ready(function (){
  $('#btnTopo').click(function (){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  })

  $(function () {
    $('[data-toggle="popover"]').popover()
  })
});







