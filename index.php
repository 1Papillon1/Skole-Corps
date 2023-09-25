<link rel="stylesheet" href="./styles/flex.css">
<?php 
include("pdo.php");
include("navigation.html");






echo "<div class='flex'>";
    echo "<div class='flex__box'>";
        echo "<h2 class='flex__box__title'>PRIJAVA</h2>";
        echo "<a class='flex__box__link' href='pronadi_osobu.php'>Učitelj</a>";
        echo "<a class='flex__box__link' href='admin.php'>Admin</a>";
    echo "</div>";
echo "</div>";


?>