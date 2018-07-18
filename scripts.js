document.getElementById("submit").onclick = function() {
    var x, text;

    x = document.getElementById("number").value;

    if (isNaN(x) || x < 0 || x != Math.round(x)) {
        text = "Please enter a positive whole number.";
        alert(text);
    }

}