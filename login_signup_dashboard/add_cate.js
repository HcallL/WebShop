$(document).ready(function() {
    $('.add-category').click(function() {
      $('.modal').addClass('show');
    });
    
    $('.close-modal').click(function() {
      $('.modal').removeClass('show');
    });
  });
