function refreshNew()
{
  var xmlhttp;
  if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      str=xmlhttp.responseText;
      for (var i=0; i<str.length; i++) {
        tag = "#div" + String(i);
        if (myarr[i] != str[i]) {
          if (myarr[i] == 0) {
            $(tag).fadeTo("slow",0);
            myarr[i] = 1;
          } else {
            $(tag).fadeTo("slow",1);
            myarr[i] = 0;
          }
        }
      }
    }
  }
  var url="renew.php"
  url=url+"?sid="+Math.random() //prevent from using the cached data
  xmlhttp.open("GET",url,true);
  xmlhttp.send();
}
