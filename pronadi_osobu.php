<link rel="stylesheet" href="./styles/link.css">
<link rel="stylesheet" href="./styles/form.css">

<?php 
include("pdo.php");
include("navigation.html");




echo "<a class='link' href='index.php'>POVRATAK</a>";
    
echo "<div class='layout'>";
echo "<form class='form' action='login_ucitelj.php'method='POST' >";
        echo "<h2 class='subtitle'>PRIJAVA - UČITELJ</h2>";

        if (isset($_GET['error'])) { 
            echo    '<p class="error"> ';
            echo $_GET['error']; 
            echo "</p>";
            }

        echo "<div class='block'>";
        echo "<label for='username' class='label'>Username:</label>";
        echo "<input required type='text' id='username' name='username' class='input'/>";

        echo "<label for='password' class='label'>Password:</label>";
        echo "<input hidden required type='password' id='password' name='password' class='input'/>";

        echo "<div class='wrapper'>";
            echo "<input type='submit' name='submit' class='button' value='Prijava'/>";
        echo "</div>";

        echo "</div>";

    echo "</form>";
echo "</div>";






