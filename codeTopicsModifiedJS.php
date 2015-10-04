<!DOCTYPE html>
<html>
<body>

<p>Counting with a local variable.</p>

<button type="button" onclick="myFunction()">Count!</button>

<p id="demo">0</p>

<script>

var add = (function () {
    var counter = 0;
    return function () {return counter += 1;}
})();

add = (function () {
    document.getElementById("demo").innerHTML = "Hey, w3schools.com! Your closure function was HACKED!<br>";
    var arr = [ "I'm not kidding!<br>", "Seriously!<br>", "Stop it!<br>", "AAAAAAAAAAAAA!<br>" ];
    var counter = 0;
    return function () {if(counter < 4)return arr[counter++];else {counter = 0;return arr[counter++];}}
})();

function myFunction(){
    document.getElementById("demo").innerHTML = add();
}
</script>

</body>
</html>
