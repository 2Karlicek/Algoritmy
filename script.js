const display = document.getElementById("display");

function appendToDisplay(input){
    display.value += input;
}

function clearOneDisplay(){
    display.value = display.value.toString().slice(0,-1);
}

function clearDisplay(){
    display.value = "";
}

function calculate(){
    try{
        display.value = eval(display.value);
    }
    catch(error){
        display.value = "Error";
    }
}