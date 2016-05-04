$(document).ready(function(){

    $('#search').on('input', function() {
        var searchKeyword = $(this).val()
        if (searchKeyword.length >= 3) {
            $.post('../F4movies-web-page/modules/search.php',{ keywords: searchKeyword }, function(data) {
                $('div#livesearch').empty(function() {
                    $('div#livesearch').show()
                })
                
                $.each(data, function() {
                    $('div#livesearch').append('<p><a href="#">' + this.nombre + '</a></p>')
                })
            }, 'json')
        }else if(searchKeyword.length <= 3) {
            $('div#livesearch').empty(function() {
                $('div#livesearch').hide()
            })
        }
    })

    /*document.getElementById("search").addEventListener("keyup", result);

    function result() {
        str=document.getElementById("search").value;
        if (str.length==0) { 
            document.getElementById("livesearch").innerHTML = "";
            document.getElementById("livesearch").style = "";
            return;
        }
        if (window.XMLHttpRequest) {
            xmlhttp=new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
                document.getElementById("livesearch").style = "border: 1px solid 20px; border-radius: 5px; padding: 5px;";
                document.getElementById("livesearch").style.color = "black";
                document.getElementById("livesearch").style.background = "white";
            }
        }
        xmlhttp.open("GET","modules/livesearch.php?str="+str,true);
        xmlhttp.send();
    }*/

})