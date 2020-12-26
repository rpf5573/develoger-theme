(function($){
  jQuery(document).ready(function( $ ) {
    // alert("asd");
    $('.csf-cloneable-item input[data-depend-id="layout"]').on('change', function(){
      var value = $(this).val();
      var parent = $(this).parents('.csf-cloneable-item');
      var parent_text = $(this).parent().text();
          parent.find('.csf-cloneable-title .csf-cloneable-value').text( parent_text );
          parent.find('input[data-depend-id="module_name"]').val( parent_text );
    });
    $('.csf-cloneable-item:first-of-type .csf-cloneable-title').click();
    $('#develoger_home .csf-cloneable-add').on('click', function(){
      $('#develoger_home .csf-cloneable-wrapper').addClass('not-empty');
    });
  });
})(jQuery);
  