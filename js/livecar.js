document.getElementsByClassName("car").addEventListener("click", result);

    function result() {
        str=document.getElementsByClassName("car").value;
        if (window.XMLHttpRequest) 
        {
            xmlhttp=new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange=function() 
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) 
            {
                document.getElementById("livecar").innerHTML +=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","modules/livecar.php?str="+str,true);
        xmlhttp.send();
    }

