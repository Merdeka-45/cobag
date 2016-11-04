$(document).ready(function(){
    $('.tab a').on('click', function (e) {
    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');


    var href = $(this).attr('href');
    $('.forms > form').hide();
    $(href).fadeIn(500);
  });
});

$( function() {
  $( "#datepicker" ).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true});
} );


$('#helpmenu').followTo(70);

$(window).scroll(function(){
  var footerOffset = $(".part6").offset();
  var topFooter = footerOffset.top;

  var tinggiMenu = $("#helpmenu1").height();
  var tinggiLayar = $(window).height();
  var scrollDocument = $(document).scrollTop();
  var posisiAtasFooter = topFooter-tinggiMenu;
  var posisiAwal = $(".helpmenu").offset().top;

  if(scrollDocument+tinggiMenu >= topFooter)
  {
    $("#helpmenu1").css({
      position: 'absolute',
      top: posisiAtasFooter+'px',
    });
  }else{
    $("#helpmenu1").css({
      position: 'fixed',
      top: posisiAwal+'px',
    });
  }

});
