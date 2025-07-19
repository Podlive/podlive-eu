var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("meltmail").innerHTML = "<a href=\"mailto:" + xhttp.responseText + "\">" + xhttp.responseText + "</a>";
  }
};
xhttp.open("GET", "/meltmail", true);
xhttp.send();