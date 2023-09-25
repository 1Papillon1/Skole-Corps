<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
include("pdo.php");
include("navigation.html");

?>
<link rel="stylesheet" href="./styles/layout.css">
<link rel="stylesheet" href="./styles/table.css">
<?php



$upit = $db->query("
SELECT * 
FROM ucitelji
");
$rezultati = $upit->fetchAll();
echo "<a class='layout__link layout__link--secondary'href='logout.php'>Odjava</a>";
echo "<div class='layout'>";
echo "<table><thead><tr><td>Ime prezime</td> <td>Email</td>  <td></td> </tr></thead>";
foreach($rezultati as $ucitelj){
    echo "<tbody><tr class='table__row'><td>" . $ucitelj["ime_prezime"] . 
    "</td><td>" . $ucitelj["email_privatni"] . 
    "</td><td>" . "<a class=''href='teacher_admin.php?id_ucitelja=" . $ucitelj["id_ucitelja"] . "'>Uredi</a>" .
    "</td></tr></tbody>";

  
}

echo "</table>";
echo "</div>";

} else {
    header("Location:admin.php");
    exit();
}
?>