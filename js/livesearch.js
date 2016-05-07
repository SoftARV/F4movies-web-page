$(document).ready(function(){

    $('#search').on('input', function() {
        var searchKeyword = $(this).val()
        if (searchKeyword.length >= 3) {
            $.post('../F4movies-web-page/modules/search.php',{ keywords: searchKeyword }, function(data) {
                $('div#livesearch').empty(function() {
                    $('div#livesearch').show()
                })
                
                $.each(data, function() {
                    $('div#livesearch').append('<p><a href="descripcion.php?pelicula=' + this.id + '">' + this.nombre + '</a></p>')
                })
            }, 'json')
        }else if(searchKeyword.length <= 3) {
            $('div#livesearch').empty(function() {
                $('div#livesearch').hide()
            })
        }
    })

})