<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
        <title>Calculator</title>
    </head>
    <body>

        <?php
            include "navbar.php";

        ?>

        <div class="calculator">
                <div class="menu-btn">
                    <i class="fa-solid fa-chevron-right dropdown"></i>
                </div>
                <div class="side-bar">
                    <header>
                        <div class="close-btn">
                            <i class="fa-solid fa-chevron-left dropdown"></i>
                        </div>
                    </header>
                    <div class="buttons more-btn">
                    <button onclick="sinus()" data-action="more-operators">sin</button>
                    <button onclick="cos()" data-action="more-operators">cos</button>
                    <button onclick="tan()" data-action="more-operators">tan</button>
                    <button onclick="powerSquared()" data-action="more-operators">x²</button>
                    <button onclick="pi()" data-action="more-operators">π</button>
                    <button onclick="rootSquared()" data-action="more-operators">²√</button>
                    <button onclick="powerSquaredOnThree()" data-action="more-operators">x³</button>
                    <button onclick="log10()" data-action="more-operators">log₁₀</button>
                    <button onclick="log()" data-action="more-operators">ln</button>
                    <button onclick="factorialClicked()" data-action="more-operators">x!</button>
                    <button onclick="reverseNumber()" data-action="more-operators">¹/ₓ</button>
                    <button onclick="calculateExponential()" data-action="more-operators">eˣ</button>
                    <button onclick="mocnina()" data-action="more-operators">x na y</button>
                    </div>
                </div>
            <input class="output" id="display" disabled placeholder="0">0</input>
            <div class="buttons move-btn">
                 <button onclick="clearDisplay()" data-action="clear" id="clear">AC</button>
                 <button onclick="toggleSign()" data-action="toggle-sign">+/-</button>
                 <button onclick="percentage('%')" data-action="percentage">%</button>
                 <button onclick="appendToDisplay('/')" class="operator-button">÷</button>
                 <button onclick="appendToDisplay('7')" data-action="number">7</button>
                 <button onclick="appendToDisplay('8')" data-action="number">8</button>
                 <button onclick="appendToDisplay('9')" data-action="number">9</button>
                 <button onclick="appendToDisplay('*')" class="operator-button">x</button>
                 <button onclick="appendToDisplay('4')" data-action="number">4</button>
                 <button onclick="appendToDisplay('5')" data-action="number">5</button>
                 <button onclick="appendToDisplay('6')" data-action="number">6</button>
                 <button onclick="appendToDisplay('-')" class="operator-button">-</button>
                 <button onclick="appendToDisplay('1')" data-action="number">1</button>
                 <button onclick="appendToDisplay('2')" data-action="number">2</button>
                 <button onclick="appendToDisplay('3')" data-action="number">3</button>
                 <button onclick="appendToDisplay('+')" class="operator-button">+</button>
                 <button onclick="appendToDisplay('0')" class="double-wide-button" data-action="number">0</button>
                 <button onclick="appendToDisplay('.')" data-action="number">.</button>
                 <button onclick="calculate()" class="equals-button">=</button>
            </div>
        </div>
        <script src="script.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.menu-btn').click(function(){
                    $(this).find('.dropdown').toggleClass('rotate');
                });

                $('.close-btn').click(function(){
                    $(this).find('.dropdown').toggleClass('rotate-back');
                });
                
                $('.menu-btn').click(function(){
                    $('.side-bar').addClass('active');
                    $('.menu-btn').css("visibility", "hidden");
                });

                $('.close-btn').click(function(){
                    $('.side-bar').removeClass('active');
                    $('.menu-btn').css("visibility", "visible");
                });
            });
        </script>
    </body>
</html>