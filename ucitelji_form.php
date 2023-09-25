<link rel="stylesheet" href="./styles/form.css">
<?php 
include("pdo.php");
include("navigation.html");

if (isset($_GET["id"])) {
    $id_ucitelja = $_GET["id"];
    $upit = $db->query("SELECT * FROM ucitelji WHERE id_ucitelja=$id_ucitelja");
    $rezultati = $upit->fetchAll();
    $ime_prezime = $rezultati[0]["ime_prezime"];
    $username = $rezultati[0]["username"];
    $password = $rezultati[0]["password"];
    $email_skole = $rezultati[0]["email_skole"];
    $email_privatni = $rezultati[0]["email_privatni"];
    $telefon_sluzbeni = $rezultati[0]["telefon_sluzbeni"];
    $gumb = "Uredi";

} else {
    $id_ucitelja = "";
    $ime_prezime = "";
    $username = "";
    $password = "";
    $email_skole = "";
    $email_privatni = "";
    $telefon_sluzbeni = "";
    $gumb = "Dodaj";

}


?>


<div class='layout layout--secondary'>
    <form class='form' method='POST' action='ucitelji_sql.php'>
        <h2 class='subtitle'>Učitelj</h2>

        <div class='block block--secondary'>

        <fieldset class='fieldset'><legend class='legend'>Osobni podatci</legend>
            <label for='ime_prezime' class='label'>Ime i prezime:</label>
            <input required type='text' id='ime_prezime' name='ime_prezime' class='input' value='<?php echo $ime_prezime?>'/>

            <label for='username' class='label'>Username:</label>
            <input required type='text' id='username' name='username' class='input' value='<?php echo $username?>'/>

            <label for='password' class='label'>Password:</label>
            <input required type='password' id='password' name='password' class='input' value='<?php echo $password?>'/>
        </fieldset>

        <fieldset class='fieldset'><legend class='legend'>Kontakt podatci</legend>
        <label for='email_skole' class='label'>Email (škola):</label>
        <input type='email' id='email_skole' name='email_skole' class='input' value='<?php echo $email_skole?>'/>

        <label for='email_privatni' class='label'>Email (privatni):</label>
        <input type='email' id='email_privatni' name='email_privatni' class='input' value='<?php echo $email_privatni?>'/>

        <label for='telefon_sluzbeni' class='label'>Telefon (službeni):</label>
        <input type='text' id='telefon_sluzbeni' name='telefon_sluzbeni' class='input' value='<?php echo $telefon_sluzbeni?>'/>
        </fieldset>

        </div>

        <div class='wrapper wrapper--secondary'>
            <input type="hidden" name="id" value='<?php echo $id_ucitelja ?>'>
            <input type='submit' name='submit' class='button button--secondary' value='<?php echo $gumb?>'/>
        </div>

    </form>

    <?php

echo "<br><br><a class='link--secondary' href='teacher.php'>&lt; povratak</a>";

    ?>
</div>






