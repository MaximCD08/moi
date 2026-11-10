
<?php

$langue = "fr";
$titrePage = "Mon Portfolio - Projets";

$titre = "Mes Projets";

// Navigation
$accueil = "Accueil";
$projetsMenu = "Projets";
$contact = "Contact";

// Tableau des projets
$listeProjets = [
    [
        "titre" => "Projet 1 : Création d'une serre sous-marines",
        "description" => "Pour mon projet de bac, nous avons dû créer une serre sous-marine, avec différents capteurs, un Raspberry Pi et du langage Python."
    ],
    [
        "titre" => "Projet 2 :",
        "description" => "Pas encore"
    ]
];

// Bouton
$texteBouton = "EN + DÉCOUVRIR";

// Footer
$annee = date("Y");
$texteFooter = "Mon Portfolio Personnel";
?>

<!DOCTYPE html>
<html lang="<?= $langue ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titrePage ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header class="entete-club">

    <h1><?= $titre ?></h1>

    <nav>
        <a href="index.php"><?= $accueil ?></a> |
        <a href="projets.php"><?= $projetsMenu ?></a> |
        <a href="index.php#contact"><?= $contact ?></a>
    </nav>

</header>

<main>

    <?php foreach ($listeProjets as $projet): ?>

        <section class="carte">

            <h2><?= $projet["titre"] ?></h2>

            <p><?= $projet["description"] ?></p>

        </section>

    <?php endforeach; ?>

    <div class="bouton-centre">

        <button type="button" class="bouton-decouvrir">
            <?= $texteBouton ?>
        </button>

    </div>

</main>

<footer>
    <p>&copy; <?= $annee ?> - <?= $texteFooter ?></p>
</footer>

</body>
</html>
