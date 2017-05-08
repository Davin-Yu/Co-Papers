function postSand(sandNum)
{
  var xmlhttp;
  if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  var url="postSand.php"
  url=url+"?_changesand="+sandNum;
  url=url+"&sid="+Math.random(); //prevent from using the cached data
  xmlhttp.open("GET",url,true);
  xmlhttp.send();
}
