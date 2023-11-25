function displayHelloPHP() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };

    xhr.open("GET", "hello_php.php", true); // Remove the question mark here

    xhr.send();
}
