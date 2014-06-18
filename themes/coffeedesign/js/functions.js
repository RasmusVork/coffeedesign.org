jQuery(document).ready(function($) {


  // Nav Toggle
  $("a#nav-toggle").click(function() {
    $(".navigation, a#nav-toggle").toggleClass("open");
  });

  $(".navigation a, a.layout-header-logo").click(function() {
    if ($("a#nav-toggle").hasClass("open")) {
      $(".navigation, a#nav-toggle").toggleClass("open");
    }
  });


  // Fitvids
  $(".event-content-info").fitVids();

});