<?php 
session_start();
if (isset($_SESSION['id_ucitelja'])) {
include("pdo.php");

?>
<link rel="stylesheet" href="./styles/layout.css">
<link rel="stylesheet" href="./styles/table.css">
<?php

$id_ucitelja = $_SESSION['id_ucitelja'];




$upit = $db->query("
select * from ucitelji u
INNER JOIN ucitelji_skole uc ON u.id_ucitelja = uc.id_ucitelja
INNER JOIN skole s ON uc.id_skole = s.id_skole
where uc.id_ucitelja = '$id_ucitelja';
");
$rezultati = $upit->fetchAll();

if("$id_ucitelja" == $rezultati[0]["id_ucitelja"]) {

echo "<div class='layout'>";
echo "<br><br><a class='layout__link'href='logout.php'>Odjava</a>";
echo "<h2 class='title'>O učitelju</h2>";
echo "<strong class='strong'>Username:</strong> " . $rezultati[0]["username"] . "<br>";
echo "<strong class='strong'>Password:</strong> " . $rezultati[0]["password"] . "<br>";
echo "<strong class='strong'>Ime i prezime:</strong> " . $rezultati[0]["ime_prezime"] . "<br>";
echo "<strong class='strong'>Školski email:</strong> " . $rezultati[0]["email_skole"] ."<br>";
echo "<strong class='strong'>Privatni email:</strong> " . $rezultati[0]["email_privatni"] ."<br>";
echo "<strong class='strong'>Broj mobitela:</strong> " . $rezultati[0]["telefon_sluzbeni"] ."<br>";
echo "<a class='' href='ucitelji_form.php?id=" . $rezultati[0]["id_ucitelja"] . "'>Uredi</a>";

echo "<h2 class='subtitle'>O školama</h2>";
echo "<table><thead><tr><td>Škola</td> <td>Adresa</td> <td>Telefon</td> <td>Mail</td> <td></td></tr></thead>";
foreach($rezultati as $skola){
     
    echo "<tbody><tr class='table__row'><td>" . $skola["naziv_skole"] . 
    "</td><td>" . $skola["adresa_skole"] . 
    "</td><td>" . $skola["telefon"] . 
    "</td><td>" . $skola["mail_skole"] . 
    "</td><td>" . "<a class=''href='skole_form.php?id_skole=" . $skola["id_skole"] . "'>Uredi</a>" .
    "</td></tr></tbody>";

  
}

echo "</table>";



} else {
    echo "<h2>Osoba nije pronađena</h2>";
}
echo "</div>";




} else {
    header("Location:pronadi_osobu.php");
    exit();
}
?>