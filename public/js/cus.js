$(document).ready(function($){
	$('#btn-submit-form').on('click', function(){
		$('.content-box-form').show();
    });
    $('#myModal').modal('show');

    $('.form-post-register').on('submit', function(){
        console.log('da click');
        $('.btn-send-cv').attr("disabled", true);
    });

    $('.form-change').on('change', function(){
    	$('#filter_products').submit();
  	});

});