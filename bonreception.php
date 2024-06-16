<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon de Réception</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<header>
    <h1>Bon de Réception</h1>
    <img src="Rename.png" alt="Misfat Filtration" class="logo">
</header>
<main>
    <section>
        <h2>Général</h2>
        <form method="POST" action="submit_bonreception.php">
            <table>
                <tr>
                    <th>Type:</th>
                    <td>
                        <input type="radio" id="mise-a-niveau" name="domaine" value="mise-a-niveau">
                        <label for="mise-a-niveau">Dans le cadre de mise à niveau</label>
                        <input type="radio" id="charges" name="domaine" value="charges">
                        <label for="charges">Charges</label>
                        <input type="radio" id="investissement" name="domaine" value="investissement">
                        <label for="investissement">Investissement</label>
                    </td>
                </tr>
                <tr>
                    <th>Dossier:</th>
                    <td><input type="text" id="dossier" name="dossier"></td>
                </tr>
                <tr>
                    <th>Numéro de bon de commande:</th>
                    <td><input type="number" id="Ncommande" name="numboncommande"></td>
                </tr>
                <tr>
                    <th>Date de bon de commande:</th>
                    <td><input type="date" id="date-commande" name="datebon"></td>
                </tr>
                <tr>
                    <th>Fournisseur:</th>
                    <td>
                        <select id="select" name="fournisseur">
                            <option value="hp">hp</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Observation:</th>
                    <td><input type="text" id="observation" name="observation"></td>
                </tr>
                <tr>
                    <th>Commentaire:</th>
                    <td><textarea id="commentaire" name="cmnt"></textarea></td>
                </tr>
            </table>
            <div class="decision">
                <input type="checkbox" id="decision" name="decision" value="envoyer">
                <label for="decision">Envoyer au chef hiérarchique</label>
            </div>
            <button type="submit">Soumettre</button>
        </form>
    </section>
    <section>
        <h2>Journal d'Activité</h2>
        <textarea name="journal" readonly></textarea>
    </section>
</main>
<footer>
    <p>&copy; 2023 - Misfat Filtration</p>
</footer>
</body> 
</html>
