
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <h1>inscription</h>
    <form action="traitement.php" method="post">
        <label for="Nom">Nom :</label>
        <input type="text" name="nom" id="nom">

        <label for="Prenom">Prenom :</label>
        <input type="text" name="prenom"  id="prenom">

        <label for="Nom utilisateur">Utilisateur :</label>
        <input type="text" name="username"  id="username">

        <label for="Mot de passe">Mot de passe :</label>
        <input type="password" name="password" id="password">

        <label for="Question">Question :</label>
        <input type="text" name="question"  id="question">

        <label for="Reponse">Reponse :</label>
        <input type="text" name="reponse"  id="reponse">

        <input type="submit" value="inscription">
    </form>


</body>
</html>