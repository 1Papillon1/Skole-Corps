<link rel="stylesheet" href="./styles/link.css">
<link rel="stylesheet" href="./styles/form.css">
<?php 
include("pdo.php");
include("navigation.html");




echo "<a style='display:none'class='link' href='ucitelji_form.php'>Dodaj učitelja</a>";
    echo "<a style='display:none'class='link' href='skole_form.php'>Dodaj školu</a>";
    echo "<a class='link' href='index.php'>POVRATAK</a>";
    
echo "<div class='layout'>";
echo "<form class='form' action='login.php'method='POST' >";
        echo "<h2 class='subtitle'>PRIJAVA - ADMIN</h2>";

        if (isset($_GET['error'])) { 
        echo    '<p class="error"> ';
        echo $_GET['error']; 
        echo "</p>";
        }

        echo "<div class='block'>";
        echo "<label for='username' class='label'>Username:</label>";
        echo "<input type='text' id='username' name='username' class='input'/>";

        echo "<label for='password' class='label'>Password:</label>";
        echo "<input type='password' id='password' name='password' class='input'/>";

        echo "<div class='wrapper'>";
            echo "<input type='submit' name='submit' class='button' value='Prijava'/>";
        echo "</div>";

        echo "</div>";

    echo "</form>";
echo "</div>";





