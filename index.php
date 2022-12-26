<?php session_start();
require_once "fonction.php";

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>extranet d'un groupe bancaire</title>
    </head>

    <body>
        <div class="bloc_page">
            <header>
                <div id="logo">
                    <img
                        id="logo_gbaf"
                        src="img/logo_gbaf.png"
                        title="GBAF"
                        alt="Logo GBAF"
                    />
                    
                <?php
                    if(isLogged()){
                        echo "coucou";
                    }else{    
                 ?>       
                    <p> <a href="connexion.php">
                        <img
                            id="icone_profil"
                            src="img/IconProfil.png"
                            alt="icone utilisateur"
                        />Nom & Prénom</a>
                    </p>
                    <?php } ?>
                </div>
            </header>

            <section class="section_presentation">
                <h1>Le Groupement Banque Assurance Français</h1>
                <p>
                    Le GBAF est le représentant de la profession bancaire et des
                    assureurs sur tous les axes de la réglementation financière
                    française. Sa mission est de promouvoir l'activité bancaire
                    à l’échelle nationale. C’est aussi un interlocuteur
                    privilégié des pouvoirs publics.
                </p>
                <div class="illustration">
                    <div class="illustration_banque">
                        <img src="img/banque/bank.png" alt="banque_postale" />
                    </div>
                </div>
            </section>

            <section class="section_acteurs">
                <div class="liste_acteurs">
                    <h2>Les acteurs et les partenaires</h2>
                    <p id="texte_acteur">
                        Une liste complète des différents partenaires avec
                        lesquels nous sommes susceptibles de fonctionner. Vous
                        pourrez ici vous renseigner sur chacun d'entre eux,
                        consulter les avis de confrères, ou y laisser votre
                        propre commentaire afin d'échanger des appréciations
                        constructives et de distinguer les qualités et
                        compétences de chacun de ces partenaires.
                    </p>
                </div>
                <div class="acteurs">



                <?php
                    /*$acteurs = [
                        [
                            'name' => 'Dsa France',
                            'img' => 'img/acteurs/Dsa_france.png',
                            'description' => "Dsa France accélère la croissance du territoire
                            et s’engage avec les collectivités
                            territoriales. Nous accompagnons les entreprises
                            dans les étapes clés de leur évolution. Notre
                            philosophie : s’adapter à chaque entreprise.
                            Nous les accompagnons pour voir plus grand et
                            plus loin et proposons des solutions de
                            financement adaptées à chaque étape de la vie
                            des entreprises

                            <a href=\"https://www.dsa.fr/\">lien</a>",
                        ],
                        [
                            'name' => 'Forma',
                            'img' => 'img/acteurs/formation_co.png',
                            'description' => "Formation&co est une association française présente
                            sur tout le territoire. Nous proposons à des
                            personnes issues de tout milieu de devenir
                            entrepreneur grâce à un crédit et un accompagnement
                            professionnel et personnalisé.

                            <a href=\"https://www.formationsco.com/\">lien</a>",

                        ],
                        [
                            'name' => 'Protectpeople',
                            'img' => 'img/acteurs/protectpeople.png',
                            'description' => "Protectpeople finance la solidarité nationale. Nous
                            appliquons le principe édifié par la Sécurité
                            sociale française en 1945 : permettre à chacun de
                            bénéficier d’une protection sociale.

                           <a href=\"https://www.ameli.fr/\">lien</a>",
                        ],
                        [
                            'name' => 'Cde',
                            '0' => 'Cde',
                            'img' => 'img/acteurs/CDE.png',
                            'description' => "La CDE (Chambre Des Entrepreneurs) accompagne les
                            entreprises dans leurs démarches de formation. Son
                            président est élu pour 3 ans par ses pairs, chefs
                            d’entreprises et présidents des CDE.

                            <a href=\"https://lecde.club/\">lien</a>",
                        ],
                    ];*/

                    $pdo = new PDO('mysql:host=localhost;dbname=gbaf', 'root', '');

                    $pdo->exec('SET NAMES UTF8');

                    $query = $pdo->prepare
                        (
                        'SELECT
                                *
                                FROM acteurs'

                    );

                    $query->execute();

                    $acteurs = $query->fetchAll(PDO::FETCH_ASSOC);

                ?>

                <?php foreach ($acteurs as $acteur): ?>
                    <div class="acteur">
                        <img
                            src="img/Acteurs/<?=$acteur['logo']?>"
                            alt="<?=$acteur["acteur"]?>"
                        />
                        <div>
                            <h3><?=$acteur["acteur"]?></h3>
                            <p><?=$acteur["description"]?></p>
                        </div>
                        <a class="bouton" href="#">lire la suite</a>
                    </div>
                <?php endforeach?>



                </div>
            </section>

            <footer class="contenue_footer">
                <p id="Mention">Mention légales | Contact |</p>
            </footer>
        </div>
    </body>
</html>
