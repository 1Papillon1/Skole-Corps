<?php
include("pdo.php");

if(isset($_POST["submit"])){

if($_POST["submit"] == "Uredi"){
    $upit = $db->query("UPDATE ucitelji SET
        ime_prezime = '" .$_POST["ime_prezime"] . "',
        username = '" .$_POST["username"] . "',
        password = '" .$_POST["password"] . "',
        email_skole = '" .$_POST["email_skole"] . "',
        email_privatni = '" .$_POST["email_privatni"] . "',
        telefon_sluzbeni = '" .$_POST["telefon_sluzbeni"] . "'
        WHERE id_ucitelja = " . $_POST["id"]

        
    );

    header("Location: ucitelji.php");
} 



if($_POST["submit"] == "Dodaj"){
        
    $upit = $db->query("
    INSERT INTO ucitelji (ime_prezime, username, password, email_skole, email_privatni, telefon_sluzbeni)
    VALUES(
        '" . $_POST["ime_prezime"] . "',
        '" . $_POST["username"] . "',
        '" . $_POST["password"] . "',
        '" . $_POST["email_skole"] . "',
        '" . $_POST["email_privatni"] . "',
        '" . $_POST["telefon_sluzbeni"] . "'
        )
    ");
    header("Location: ucitelji.php");
    }


}





