function addCar(str) {
        var str=str.value;
        if (window.XMLHttpRequest) 
        {
            xmlhttp=new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange=function() 
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) 
            {
                document.getElementById("addLiveCar").innerHTML +=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","modules/livecar.php?str="+str,true);
        xmlhttp.send();
    }

   

    function delCar(str)
    { 
        parent = str.parentNode.parentNode.parentNode;
        parent.remove();
    }




