(function ($) {
  Drupal.behaviors.ategp = {
    attach: function(context) {
      $('#bi-panel .block-content').equalHeight();
      $('#tri-panel .block-content').equalHeight();
      $('#tri-panel-2 .block-content').equalHeight();
      $('#quad-panel .block-content').equalHeight();
      $('.four-4x25 .block-content').equalHeight();
    }
  };
})(jQuery);
