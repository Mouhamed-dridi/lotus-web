<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $domaine = $_POST['domaine'];
    $dossier = $_POST['dossier'];
    $numboncommande = $_POST['numboncommande'];
    $datebon = $_POST['datebon'];
    $fournisseur = $_POST['fournisseur'];
    $observation = $_POST['observation'];
    $cmnt = $_POST['cmnt'];
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

    // Prepare the SQL statement
    $sql = "INSERT INTO bonreception (domaine, dossier, numboncommande, datebon, fournisseur, observation, cmnt, decision) 
            VALUES ('$domaine', '$dossier', '$numboncommande', '$datebon', '$fournisseur', '$observation', '$cmnt', '$decision')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
