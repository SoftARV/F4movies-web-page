
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
        $('.movie').removeClass().addClass('movie col-md-12', function() {
            $('.poster').removeClass().addClass('poster col-md-6', function() {
                $('.description').removeClass().addClass('description col-md-6')
            })
        })
    })
    
    $('#grid-view').click(function(){
        $('.movie').removeClass().addClass('col-md-4', function() {
            $('.poster').removeClass.addClass('poster',function() {
                $('.description').removeClass().addClass('description')
            })
        })
    })
})
