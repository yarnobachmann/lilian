$( document ).ready(function() {
  $('#sigarbox-closed').click(function() {
    $('#sigarbox-closed').addClass('display-none');
    $('#sigarbox-open').addClass('display-flex').removeClass('sigarbox-open');
    $('#sigarbox-cig-bud').addClass('display-flex').removeClass('sigarbox-open');
    $('#sigarbox-rose-bud-1').addClass('display-flex').removeClass('sigarbox-open');
    $('#sigarbox-pistache').addClass('display-flex').removeClass('sigarbox-open');
    $('#sigarbox-feather-1').addClass('display-flex').removeClass('sigarbox-open');
    $('#sigarbox-boys-r-toys').addClass('display-flex').removeClass('sigarbox-open');

  });
  $(window).resize(function(){location.reload();});
});
