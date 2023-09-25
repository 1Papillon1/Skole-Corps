<link rel="stylesheet" href="./styles/form.css">
<?php 
include("pdo.php");
include("navigation.html");

if (isset($_GET["id_skole"])) {
    $id_skole = $_GET["id_skole"];
    $upit = $db->query("SELECT * FROM skole WHERE id_skole=$id_skole");
    $rezultati = $upit->fetchAll();
    $naziv_skole = $rezultati[0]["naziv_skole"];
    $adresa_skole = $rezultati[0]["adresa_skole"];
    $telefon = $rezultati[0]["telefon"];
    $mail_skole = $rezultati[0]["mail_skole"];
    $gumb = "Uredi";

} else {
    $id_skole="";
$naziv_skole = "";
$adresa_skole = "";
$telefon = "";
$mail_skole = "";
$gumb = "Dodaj";

}


?>


<div class='layout layout--secondary'>
    <form class='form' method='POST' action='teacher_admin_skole_sql.php'>
        <h2 class='subtitle'>Škola</h2>

        <div class='block block--secondary'>

        <fieldset class='fieldset'><legend class='legend'>Podatci škole</legend>
            <label for='naziv_skole' class='label'>Naziv škole:</label>
            <input required type='text' id='naziv_skole' name='naziv_skole' class='input' value='<?php echo $naziv_skole?>'/>

            <label for='adresa_skole' class='label'>Adresa škole:</label>
            <input required type='text' id='adresa_skole' name='adresa_skole' class='input' value='<?php echo $adresa_skole?>'/>

        </fieldset>

        <fieldset class='fieldset'><legend class='legend'>Kontakt podatci</legend>
        <label for='mail_skole' class='label'>Mail škole:</label>
        <input type='email' id='mail_skole' name='mail_skole' class='input' value='<?php echo $mail_skole?>'/>

        <label for='telefon' class='label'>Telefon:</label>
        <input type='text' id='telefon' name='telefon' class='input' value='<?php echo $telefon?>'/>
        </fieldset>

        </div>

        <div class='wrapper wrapper--secondary'>
            <input type="hidden" name="id_ucitelja" value='<?php echo $id_ucitelja ?>'>
            <input type="hidden" name="id" value='<?php echo $id_skole ?>'>
            <input type='submit' name='submit' class='button button--secondary' value='<?php echo $gumb?>'/>
        </div>

    </form>

    <?php 

echo "<br><br><a class='link--secondary' href='ucitelji.php'>&lt; povratak</a>";

?>
</div>