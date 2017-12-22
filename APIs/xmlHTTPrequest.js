
var xmlhttp = new XMLHttpRequest();
var url = "https://api.pinterest.com/v1/boards/124482445889528340/?access_token=AY1YbT9MODLzkC7LdNVxecl0H4XBFOim1UUyCk5EWt4-y0A3hgAAAAA&fields=id%2Cname%2Curl";

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        myFunction(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<a href="' + arr[i].url + '">' + 
        arr[i].display + '</a><br>';
    }
    document.getElementById("id01").innerHTML = out;
}
