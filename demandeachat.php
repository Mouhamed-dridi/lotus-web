<!DOCTYPE html>
<html>
<head>
<title>Demande d'achat</title>
<link rel="stylesheet" href="css.css">
</head>
<body>
<form method="POST" action="submit_demande.php">    
<div class="header">
  <h1>Demande d'achat</h1>
  <div class="logo">
    <img src="Rename.png" alt="Misfat Filtration" class="logo">
  </div>
</div>

<div class="container">
  <div class="section">
    <div class="section-title">Général</div>
    <table>
      <tr>
        <th>Type de la commande:</th>
        <td>
          <input type="radio" name="typecommande" value="annuelle"> Commande annuelle
          <input type="radio" name="typecommande" value="ponctuelle"> Commande ponctuelle
        </td>
      </tr>
      <tr>
        <th>Dossier:</th>
        <td>
          <input type="text" name="dossier" required>
          <br>
          <label for="servicedemandeur">Service demandeur:</label>
          <input type="text" name="servicedemandeur" required>
        </td>
      </tr>
      <tr>
        <th>Delai d'achat souhaité:</th>
        <td>
          <input type="date" name="délaiachat">
        </td>
      </tr>
      <tr>
        <th>Fournisseur proposé:</th>
        <td><input type="text" name="fournisseurpr" required></td>
      </tr>
      <tr>
        <th>Commentaire:</th>
        <td><textarea name="cmnt"></textarea></td>
      </tr>
    </table>
  </div>
  <br>
  <div class="décision">
    <span> Décision : </span>
    <input type="checkbox" name="decision" value="envoyer"> Envoyer au chef hiérarchique
    <div class="button-container">
      <button type="submit">Soumettre</button>
    </div>
  </div>
  <br>

  <div class="section">
    <div class="section-title">Articles</div>
    <div class="button-container">
      <button type="button">Ajouter article</button>
      <button type="button">Modifier</button>
      <button type="button">Supprimer</button>
    </div>
    <table>
      <tr class="table-header">
        <th>Code</th>
        <th>Désignation</th>
        <th>UC</th>
        <th>St sécu.</th>
        <th>St dispo.</th>
        <th>Qté dem.</th>
        <th>Cons. an.</th>
        <th>Prix HT</th>
        <th>Observation</th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>

  <div class="section">
    <div class="section-title">Journal d'Activité</div>
    <textarea name="journal" readonly></textarea>
  </div>
</div>

<div class="footer">
  <p>&copy; 2023 - Misfat Filtration</p>
</div>
</form>
</body>
</html>

