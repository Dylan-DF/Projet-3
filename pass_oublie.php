
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
</head>
<body>
    <p>Saisisez vos information pour créer un nouveau mot de passe.</p>
    <form action="nouveau_mdp.php" method="post">
        
        <label for="Nom utilisateur">Nom d utilisateur :</label>
        <input type="text" name="username"  id="username">

        <label for="Reponse">Reponse a votre question secrete :</label>
        <input type="text" name="reponse"  id="reponse">

        <label for="Mot de passe">Nouveau mot de passe :</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="valider">
    </form>


</body>
</html>