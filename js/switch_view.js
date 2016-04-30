$(document).ready(function() {

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