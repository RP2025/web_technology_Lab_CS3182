function submitForm() {
    var option = document.getElementById("option").value;
    var inputValue = document.getElementById("inputValue").value;
    
    if (inputValue !== "") {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById("result").innerHTML = xhr.responseText;
            }
        };

        if (option === "numbers") {
            xhr.open("GET", "sort_numbers.php?input=" + inputValue, true);
        } else if (option === "animals") {
            xhr.open("GET", "display_animals.php?input=" + inputValue, true);
        }

        xhr.send();
    }
}
