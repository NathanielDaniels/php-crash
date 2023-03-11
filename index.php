<!DOCTYPE html>
<html>
<head>
    <title>Include</title>
</head>
    <body>
        <?php
            // Path: index.php

            // create a toggle button with the name "Click Me" that changes to "Clicked"
            echo '<button id="myButton" onclick="changeText()">Click Me</button>';
            
            // if the button is clicked
            // if(isset($_POST['submit'])){
            //     // if button is clocked, change the button value to "Clicked"
            //     echo '<form action="/index.php" method="post">
            //     <input type="submit" name="submit" value="Clicked" />
            //     </form>';
                
            // }


            // create a button with the name "submit"
            // and the value "submit"
            // echo '<form action="/index.php" method="post">
            // <input type="submit" name="submit" value="submit" />
            // </form>';

            // // if the button is clicked
            // if(isset($_POST['submit'])){
            //     // include the file "hello.php"
            //     include 'hello.php';
            // }
            // echo "Hello! test does this is it working?";
        ?>
        <!-- <button id="myButton" onclick="changeText()">Click Me</button> -->
        <script>
            // create a function that changes the button value to "Clicked"
            function changeText(){
                let button = document.getElementById("myButton");
                button.innerHTML === "Click Me!" ? button.innerText = "Clicker" : button.innerText = "Click Me!";
            }
        </script>
    </body>
</html>


