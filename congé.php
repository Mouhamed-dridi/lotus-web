<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $mconge = $_POST['mconge'];
    $periodedebut = $_POST['periodedebut'];
    $periodefin = $_POST['periodefin'];
    $adresseconge = $_POST['adrconge'];
    $tel = $_POST['tele'];
    $remplacant = $_POST['remp'];
    $cmnt = $_POST['cmnt'];
    $duree = $_POST['duree'];
    $decision = isset($_POST['decision']) ? $_POST['decision'] : 'non';

    // Database connection
    $servername = "localhost";
    $username = "hetler";
    $password = "[changeme]";
    $dbname = "demandeachat";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data
    $sql = "INSERT INTO demande_conge (mcongé, periodedebut, periodefin, adressecongé, tel, remplaçant, cmnt, durée, decision) 
            VALUES ('$mconge', '$periodedebut', '$periodefin', '$adresseconge', '$tel', '$remplacant', '$cmnt', '$duree', '$decision')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
