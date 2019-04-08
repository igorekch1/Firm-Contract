<?php
    require('./connect.php');

    $firmId = $_POST["firm_id"];
    $firmName = $_POST["firm_name"];
    $firmShef = $_POST["firm_shef"];
    $firmAddress = $_POST["firm_address"]; 

    if (isset($_POST["submit_create"])) {
        $query = "INSERT INTO firm(name, shef, address) VALUES('$firmName','$firmShef','$firmAddress')";
        mysqli_query($conn, $query);
    }

    if(isset($_POST["submit_edit"])) {
        $query = "UPDATE firm SET name='".$firmName."', shef ='".$firmShef."', address='".$firmAddress."' WHERE id_firm=".$firmId."";
        mysqli_query($conn, $query);
    }
    
    if(isset($_POST["submit_delete"])) {
        $query = "UPDATE firm SET `status`=0 WHERE id_firm='".$firmId."';";
        $query .= "UPDATE dogovor SET `status`=0 WHERE id_firm='".$firmId."'";
        mysqli_multi_query($conn, $query);
    }
    
    header('Location: firms.php');
    
    mysqli_close($conn);
?>