/*============================CALCULATOR=======================*/

const display = document.getElementById("display");
const clearButton = document.getElementById("clear");
const operatorButtons = document.querySelectorAll(".operator-button");

function appendToDisplay(input){
    display.value += input;
    if (display.value !== "") {
        clearButton.innerText = "C"; // Change button text to 'C'
    }
}

function clearDisplay(){
    display.value = "";
    clearButton.innerText = "AC";   
}

function calculate(){
    try{
        display.value = eval(display.value);
    }
    catch(error){
        display.value = "Error";
    }
}

function toggleSign() { 
    if (display.value !== '0') {
        display.value = (parseFloat(display.value) * -1).toString();
        updateOutput();
    }
}

function calculateExponential() {
    let x = document.getElementById('display').value;
    let result = Math.exp(parseFloat(display.value));
    document.getElementById('display').value = result;
}

function percentage() {
    display.value = display.value / 100;
}

function sinus() {
    display.value = Math.sin(display.value);
}

function cos() {
    display.value = Math.cos(display.value);
}

function tan() {
    display.value = Math.tan(display.value);
}


function powerSquared() {
    display.value = display.value * display.value;
}

function pi() {
   display.value = Math.PI;
}

function rootSquared() {
    display.value = Math.sqrt(display.value);
}

function powerSquaredOnThree() {
    display.value = display.value * display.value * display.value;
}

function rootSquaredOnThree() {
    display.value = Math. sqrt(display.value);
}

function mocnina(n) {
    display.value = display.value**n;
}

function log10() {
    display.value = Math.log10(display.value);
}

function log() {
    display.value = Math.log(display.value);
}

function factorial(n) {
    if (n === 0 || n === 1)
        return 1;
    for (var i = n - 1; i >= 1; i--) {
        n *= i;
    }
    return n;
}

function factorialClicked() {
    var inputValue = parseFloat(document.getElementById('display').value);
    if (!isNaN(inputValue)) {
        var result = factorial(inputValue);
        document.getElementById('display').value = result;
    } else {
        document.getElementById('display').value = 'Error';
    }
}

function reverseNumber() {
    display.value = 1 / display.value;
}

operatorButtons.forEach(button => {
    button.addEventListener('click', function() {
        operatorButtons.forEach(opButton => {
            opButton.style.backgroundColor = "hsl(193.3,100%,47.1%)";
            opButton.style.color = "white";
        });
        button.style.backgroundColor = "white";
        button.style.color = "hsl(193.3,100%,47.1%)";
    });
});
