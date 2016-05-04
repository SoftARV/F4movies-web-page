
$(document).ready(function() {
    
    /*
	    Modals
	*/
	$('.launch-modal').on('click', function(e){
		e.preventDefault();
		$( '#' + $(this).data('modal-id') ).modal();
	});
    

    $('#modal-login').on('hidden.bs.modal', function (e) {
        $('.register-head').hide(function() {
            $('.login-head').show();
        });
        $('.register-form').hide(function() {
            $('.login-form').show();
        });
        $('.login-btn').hide(function() {
            $('.register-btn').show();
        });
    })
    
    $('#register-switch').click(function(){
        $('.login-head').fadeToggle(function() {
            $('.register-head').fadeToggle();
        });
        $('.login-form').fadeToggle(function() {
            $('.register-form').fadeToggle();
        });
        $('.register-btn').fadeToggle(function() {
            $('.login-btn').fadeToggle();
        });
    });

    $('#login-switch').click(function(){
        $('.register-head').fadeToggle(function() {
            $('.login-head').fadeToggle();
        });
        $('.register-form').fadeToggle(function() {
            $('.login-form').fadeToggle();
        });
        $('.login-btn').fadeToggle(function() {
            $('.register-btn').fadeToggle();
        });
    });

})
