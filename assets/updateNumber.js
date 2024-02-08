document.querySelectorAll('.button-delete').forEach(function(button) {
    button.addEventListener('click', function() {

        var valueToDecrease = parseInt(button.dataset.value);
        var targetElement = document.getElementById('target-element'); 
        decreaseValue1(targetElement, valueToDecrease); 

        var value1 = document.getElementById('value1');
        var value2 = document.getElementById('value2');
        var value3 = document.getElementById('value3');

        decreaseValue(value1);

        decreaseValue(value2);

        decreaseValue(value3);

        sendData()
    });
});

function decreaseValue1(element, valueToDecrease) {
    var text = element.innerText;
    var number = parseInt(text.match(/\d+/));

    if (number) {
        if (number >= valueToDecrease) { 
            number -= valueToDecrease;
            element.innerText = text.replace(/\d+/, number);
        } else {
            alert('Значение уже меньше, чем ' + valueToDecrease);
        }
    } else {
        alert('Число не найдено в тексте');
    }
}

function decreaseValue(element) {
    var text = element.innerText;

    var number = parseInt(text.match(/\d+/));

    if (number) {
        if (number > 0) { 
            number--; 
            element.innerText = text.replace(/\d+/, number);
        } else {
            alert('Значение уже равно 0');
        }
    } else {
        alert('Число не найдено в тексте');
    }
}

function sendData() {
    var inputValue = document.getElementById("inputValue").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/delete_item.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log("Response from server:", xhr.responseText);
            } else {
                console.error("Error:", xhr.status);
            }
        }
    };
    xhr.send("inputValue=" + inputValue);
}




