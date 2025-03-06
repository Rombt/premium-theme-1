jQuery(document).ready(function ($) {
  $('#generate-demo-content').on('click', function () {
    var postTypePage = $(this).data('post-type-page');

    $.ajax({
      url: ajaxurl,
      type: 'POST',
      data: {
        action: 'generate_demo_content',
        post_type_page: postTypePage,
      },
      success: function (response) {
        // console.log('response.success = ', response.success);
        if (response.success) {
          location.reload(true);
        } else {
          // console.log('error');
        }
      },
    });
  });
});
