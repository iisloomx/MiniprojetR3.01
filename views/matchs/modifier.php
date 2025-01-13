<?php include '../views/header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Match</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <h1>Modifier le Match</h1>

    <form action="MatchsController.php?action=modifier&id_match=<?= $match['id_match'] ?>" method="POST">

        <!-- Équipe 1 -->
        <label for="equipe1">Nom de l'équipe:</label>
        <input type="text" name="equipe1" id="equipe1" value="<?= htmlspecialchars($match['equipe1'] ?? '') ?>">

        <!-- Équipe 2 -->
        <label for="equipe2">Nom de l'équipe adverse:</label>
        <input type="text" name="equipe2" id="equipe2" value="<?= htmlspecialchars($match['nom_equipe_adverse'] ?? '') ?>">

        <!-- Date du match -->
        <label for="date_match">Date :</label>
        <input type="date" name="date_match" id="date_match" value="<?= htmlspecialchars($match['date_match']) ?>" required>

        <!-- Heure du match -->
        <label for="heure_match">Heure :</label>
        <input type="time" name="heure_match" id="heure_match" value="<?= htmlspecialchars($match['heure_match']) ?>">


        <!-- Lieu de rencontre -->
        <label for="lieu_de_rencontre">Lieu de rencontre :</label>
        <select name="lieu_de_rencontre" id="lieu_de_rencontre">
            <option value="">-- Sélectionner --</option>
            <option value="Domicile" <?= isset($match['lieu_de_rencontre']) && $match['lieu_de_rencontre'] === 'Domicile' ? 'selected' : '' ?>>Domicile</option>
            <option value="Extérieur" <?= isset($match['lieu_de_rencontre']) && $match['lieu_de_rencontre'] === 'Extérieur' ? 'selected' : '' ?>>Extérieur</option>
        </select>

        <!-- Résultat (only editable if match is in the past) -->
        <label for="resultat">Résultat :</label>
        <select name="resultat" id="resultat" <?= $isMatchInThePast ? '' : 'disabled' ?> required>
            <option value="">-- Sélectionner --</option>
            <option value="Victoire" <?= isset($match['resultat']) && $match['resultat'] === 'Victoire' ? 'selected' : '' ?>>Victoire</option>
            <option value="Match nul" <?= isset($match['resultat']) && $match['resultat'] === 'Match nul' ? 'selected' : '' ?>>Match nul</option>
            <option value="Défaite" <?= isset($match['resultat']) && $match['resultat'] === 'Défaite' ? 'selected' : '' ?>>Défaite</option>
        </select>

        <button type="submit">Modifier</button>
    </form>
</div>
</body>
</html>
<?php include '../views/footer.php'; ?>
