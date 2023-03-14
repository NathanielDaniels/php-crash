<!DOCTYPE html>
<html>
<head>
    <title>Include</title>
</head>
    <body>
        <h1>
            <?= "Test"; ?>
        </h1>
        <?php
            // Path: index.php

            // create a toggle button with the name "Click Me" that changes to "Clicked"
            echo '<button id="myButton" type="submit" onclick="changeText()">Click Me</button>';
            
            // if the button is clicked
            // if(isset($_POST['submit'])){
            //     // if button is clocked, change the button value to "Clicked"
            //     echo '<form action="/index.php" method="post">
            //     <input type="submit" name="submit" value="Clicked" />
            //     </form>';
                
            // }


            // create a button with the name "submit"
            // and the value "submit"
            echo '<form action="/index.php?name=Nathan" method="post">
            <input type="submit" name="submit" value="submit" />
            </form>';

            // // if the button is clicked
            // if(isset($_POST['submit'])){
            //     // include the file "hello.php"
            //     include 'hello.php';
            // }
            // echo "Hello! test does this is it working?";

            // if button clicked, show hellp.php
            if(isset($_POST['submit'])){
                include 'hello.php';
            }else{
                echo "awaiting submit";
            }
        ?>
        <!-- <button id="myButton" onclick="changeText()">Click Me</button> -->
        <script>

                        // if(isset($_POST['submit'])){
            //     // include the file "hello.php"
            //     include 'hello.php';
            // }
            // create a function that changes the button value to "Clicked"
            console.time('test');
            function changeText(){
                let button = document.getElementById("myButton");
                button.innerHTML === "Click Me!" ? button.innerText = "Clicker" : button.innerText = "Click Me!";
            }
            

            // console.timeEnd('test end');
            // console.trace(isDarkMode);
        </script>
    </body>
</html>


