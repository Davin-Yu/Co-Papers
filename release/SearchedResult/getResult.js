var cato = "Computer Science"

function updateWeb(catoget)
{
  cato = catoget
}

function showPage(keyword)
{
  var xmlhttp;
  if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("ajaxget").innerHTML=xmlhttp.responseText;
    }
  }
  var url="getResult.php"
  url=url+"?_topic="+cato+"&_keyword="+keyword;
  url=url+"&sid="+Math.random() //prevent from using the cached data
  xmlhttp.open("GET",url,true);
  xmlhttp.send();
}
