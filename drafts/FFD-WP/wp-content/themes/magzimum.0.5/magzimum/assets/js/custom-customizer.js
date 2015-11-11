( function( $ ) {

  // Breadcrumb option manager
  function magzimum_breadcrumb_option_manager(){

    var breadcrumb_type = $('#customize-control-theme_options-breadcrumb_type select').val();

    switch(breadcrumb_type) {
      case 'disabled':
      case 'advanced':
          $('#customize-control-theme_options-breadcrumb_separator').hide();
          break;
      case 'simple':
          $('#customize-control-theme_options-breadcrumb_separator').show();
          break;
      default:
          break;
    }

  } // end function

  function

  $(document).ready(function($){

    // Breadcrumb
    $('#customize-control-theme_options-breadcrumb_type select')
      .on('change', function(e){
        magzimum_breadcrumb_option_manager();
    });
    magzimum_breadcrumb_option_manager();


  });


} )( jQuery );
