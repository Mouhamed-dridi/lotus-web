<?php
$servername = "localhost";
$username = "hetler";
$password = "[changeme]";
$dbname= 'demandeachat';

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO demande_achat(typecommande,dossier,délaiachat,fournisseurpr,cmnt,servicedemandeur,decision) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss",$typecommande,$dossier,$délaiachat,$fournisseurpr,$cmnt,$servicedemandeur,$decision);

$typecommande = $_POST['typecommande'];
$dossier = $_POST['dossier'];
$délaiachat = $_POST['délaiachat'];
$fournisseurpr = $_POST['fournisseurpr'];
$cmnt = $_POST['cmnt'];
$servicedemandeur = $_POST['servicedemandeur'];
$decision = isset($_POST['decision'])? $POST['decision']:'';

if ($stmt->execute()){
    echo "New record created successfully";
}else {
    echo "Error :" .$stmt->error;
}

$stmt->close();
$conn->close();
?>
