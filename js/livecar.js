
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
        xmlhttp.open("GET","modules/addCar.php?str="+str,true);
        xmlhttp.send();
    }


    function delCar(str2)
    { 

        var str=str2.value;
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
        xmlhttp.open("GET","modules/delCar.php?str="+str,true);
        xmlhttp.send();

        parent = str2.parentNode.parentNode.parentNode;
        parent.remove();


    }

    function checkCar()
    { 

        if (window.XMLHttpRequest) 
        {
            xmlhttp=new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange=function() 
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) 
            {
                document.getElementById("addLiveCar").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","modules/checkCar.php",true);
        xmlhttp.send();

    }







