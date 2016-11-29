<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">lat and lng</button>
    


    <label id="demo"></label>
    <label id="demo2"></label>

    
<form method="post" action="test.php">
    
Name: <input type="" id="myText" name="idText" value="">

<p>Click the button to change the value of the text field.</p>

<button onclick="myFunction()" type="submit">Try it</button>
</form>
<script>
function myFunction() {
    document.getElementById("myText").value = "Johnny Bravo";
}
</script>
    
<script>
var x = document.getElementById("demo");
var y = document.getElementById("demo2");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = position.coords.latitude;
    y.innerHTML = position.coords.longitude;
}
    
</script>
</body>
</html>


