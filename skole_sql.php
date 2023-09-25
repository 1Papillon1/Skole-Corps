<?php
include("pdo.php");


if(isset($_POST["submit"])){

    if($_POST["submit"] == "Uredi"){
        $upit = $db->query("UPDATE skole SET
            naziv_skole = '" .$_POST["naziv_skole"] . "',
            adresa_skole = '" .$_POST["adresa_skole"] . "',
            telefon = '" .$_POST["telefon"] . "',
            mail_skole = '" .$_POST["mail_skole"] . "'
            WHERE id_skole = " . $_POST["id"]
    
            
        );
    
        header("Location: teacher.php");
    } 
    
    
    
    if($_POST["submit"] == "Dodaj"){
            
        $upit = $db->query("
    INSERT INTO skole (naziv_skole, adresa_skole, telefon, mail_skole)
    VALUES(
        '" . $_POST["naziv_skole"] . "',
        '" . $_POST["adresa_skole"] . "',
        '" . $_POST["telefon"] . "',
        '" . $_POST["mail_skole"] . "'
        )
    ");
    header("Location: teacher.php");
    }
    
    
    }






