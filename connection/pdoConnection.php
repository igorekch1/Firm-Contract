<?php
    $user ='root';
    $pass = '';

    try {
        $dbh = new PDO('mysql:host=localhost:3308;dbname=firmadogovor', $user, $pass);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>