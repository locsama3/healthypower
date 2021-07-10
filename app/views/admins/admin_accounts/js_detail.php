<script type="text/javascript">
  $(document).on('ready', function () {
    // INITIALIZATION OF NAV SCROLLER
    // =======================================================
    $('.js-nav-scroller').each(function () {
      new HsNavScroller($(this)).init()
    });

    
    // INITIALIZATION OF STICKY BLOCKS
    // =======================================================
    $('.js-sticky-block').each(function () {
      var stickyBlock = new HSStickyBlock($(this), {
        targetSelector: $('#header').hasClass('navbar-fixed') ? '#header' : null
      }).init();
    });
  });
</script>