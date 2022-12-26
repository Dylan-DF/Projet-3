<?php session_start();
$pdo = new PDO('mysql:host=localhost;dbname=gbaf', 'root', '');
$pdo->exec('SET NAMES UTF8');

if(isset($_GET['id']) AND !empty($_GET['id'])) {

    $getid = htmlspecialchars($_GET['id']);

    $article = $pdo->prepare('SELECT * FROM acteurs WHERE id_acteur = ?');
    $article->execute(array($getid));
    $article = $article->fetch();

    if(isset($_POST['submit_commentaire'])) {
            if(isset($_POST['commentaire']) AND !empty($_POST['commentaire']
            )){                  
                $commentaire = htmlspecialchars($_POST['commentaire']);
                {

                    $ins = $pdo->prepare('INSERT INTO post (id_user, date_add, id_acteur, post)
                        VALUES (?,NOW(),?,?)');
                    $ins->execute(array($_SESSION["id_user"],$getid, $commentaire));
                    $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";   

                }  
               }
            } else {
                $c_msg = "Erreur : Tous les champs doivent être complétés";
            }
    }



?>

<h2>Acteur:</h2>
<p><?= $article['description'] ?></p>

<br /><br />

<h2>commentaires:</h2>
    <form method="POST">
        <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br />
        <input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
</form>
<?php if(isset($c_msg)) { echo $c_msg; } ?>

<?php

?>

<a href="note.php?actor=<?= $getid ?>&note=1"> like</a> 
<a href="note.php?actor=<?= $getid ?>&note=-1"> dislike</a> 
