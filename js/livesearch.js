document.getElementById("search").addEventListener("keyup", result);

function result() 
{
  str=document.getElementById("search").value;
  if (str.length==0) 
  { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) 
  {
    xmlhttp=new XMLHttpRequest();
  }
  xmlhttp.onreadystatechange=function() 
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) 
    {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid";
      document.getElementById("livesearch").style.color="white";
    }
  }
  xmlhttp.open("GET","modules/livesearch.php?str="+str,true);
  xmlhttp.send();
}