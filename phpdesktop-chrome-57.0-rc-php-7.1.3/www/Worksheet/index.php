<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "gethint.php?q="+str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input id="firstName" type="text" onkeyup="showHint(this.value); document.getElementById('lastName').value=this.value;">
Last name: <input id="lastName" type="text" onchange="showHint(this.value);">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>


