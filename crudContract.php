<?php
    require('./connect.php');

    $contractId = $_POST['contract_id'];
    $firmId = $_POST["firm_id"];
    $numberd = $_POST["contract_numberd"];
    $named = $_POST["contract_named"];
    $sumd = $_POST['contract_sumd'];
    $dataStart = $_POST["contract_dataStart"];
    $dataEnd = $_POST["contract_dataEnd"]; 
    $avans = $_POST["contract_avans"];

    if (isset($_POST["submit_create"])) {
        if ($firmId == 0) {
            header('Location: createContract.php');
        } else {
            $query = "INSERT INTO dogovor(id_firm, numberd, named, sumd, datastart, datafinish, avans)". 
            "VALUES('$firmId', '$numberd', '$named', '$sumd', '$dataStart', '$dataEnd', '$avans')";
            mysqli_query($conn, $query);
            header('Location: contracts.php');
        }
    }

    if(isset($_POST["submit_edit"])) {
        $query = "UPDATE dogovor SET id_firm='".$firmId."', numberd ='".$numberd."', named='".$named."', sumd='".$sumd."', datastart='".$dataStart."',".
        "datafinish='".$dataEnd."', avans='".$avans."' WHERE id_d=".$contractId."";
        mysqli_query($conn, $query);
        header('Location: contracts.php');
    }
    
    if(isset($_POST["submit_delete"])) {
        $query = "UPDATE dogovor SET `status`=0 WHERE id_d='".$contractId."'";
        mysqli_query($conn, $query);
        header('Location: contracts.php');
    }
    
    mysqli_close($conn);
?>