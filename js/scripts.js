
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    /*
	    Modals
	*/
	$('.launch-modal').on('click', function(e){
		e.preventDefault();
		$( '#' + $(this).data('modal-id') ).modal();
	});
    
    /*
        Form validation
    */
	$('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });

    $('#modal-login').on('hidden.bs.modal', function (e) {
        $('.register-head').toggle(function() {
            $('.login-head').toggle();
        });
        $('.register-form').toggle(function() {
            $('.login-form').toggle();
        });
        $('.login-btn').toggle(function() {
            $('.register-btn').toggle();
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

    $('#list-view').click(function(){
        $('#movies').addClass('row');
        $('.div5').removeClass('media-body');
        $('.div5').addClass('caption');
        $('.div4').addClass('row');
        $('.div4').removeClass('');
        $('.div3').addClass('col-sm-6 col-md-3 col-lg-4');
        $('.div03').removeClass('poster media-left media-top');
        $('.div2').addClass('');
        $('.div2').removeClass('');
        $('.div1').addClass('');
        $('.div1').removeClass('col-lg-4');
        $('.poster').removeClass('media-object');

    });
    
    $('#grid-view').click(function(){
        $('#movies').removeClass('row');
        $('.div5').addClass('media-body');
        $('.div5').removeClass('caption');
        $('.div4').addClass('');
        $('.div4').removeClass('row');
        $('.div03').addClass('poster media-left media-top');
        $('.div3').removeClass('col-sm-6 col-md-3 col-lg-4');
        $('.div2').addClass('');
        $('.div2').removeClass('');
        $('.div1').addClass('col-lg-4');
        $('.div1').removeClass('');
        $('.poster').addClass('media-object');
    });
});
