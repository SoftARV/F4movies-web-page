$(document).ready(function() {

    $('#list-view').on('click',function(){
        $('.movie').removeClass('col-lg-4');
        $('.movie').addClass('col-lg-12');
        $('.poster').removeClass('col-lg-6')
        $('.poster').addClass('col-lg-6');
        $('.description').removeClass('col-lg-12');
        $('.description').addClass('col-lg-8');
        
    });

   $('#grid-view').on('click',function(){
        $('.movie').removeClass('col-lg-12');
        $('.movie').addClass('col-lg-4');
        $('.poster').removeClass('col-lg-6');
        $('.poster').addClass('col-lg-6');
        $('.description').removeClass('col-lg-8');
        $('.description').addClass('col-lg-12');
        
    });

});