
<?php

$langue = "fr";
$titrePage = "Mon Portfolio - Accueil";

$titre = "Mon Portfolio";
$description = "Eleve en BTS SIO a Charle Peguys";

// Navigation
$accueil = "Accueil";
$projets = "Projets";
$contact = "Contact";

// Présentation
$titrePresentation = "Présentation";
$prenom = "Maxim";
$nom = "Combet Dalmasso";
$age = 18;

$textePresentation = "Bonjour je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans.";

// Compétences
$titreCompetences = "Mes Compétences";

$competences = [
    "ntnrnrt",
    "gtrhntrtr"
];

// Parcours
$titreParcours = "Mon Parcours / Expériences";
$titreAnnee = "Année / Période";
$titreExperience = "Expérience ou Diplôme";

$parcours = [
    [
        "annee" => "2024 - 2026",
        "experience" => "STI2D"
    ],
    [
        "annee" => "2026",
        "experience" => "BTS SIO"
    ]
];

// Contact
$titreContact = "Me Contacter";

$labelNom = "Nom :";
$labelEmail = "Email :";
$labelSujet = "Sujet :";
$labelMessage = "Message :";

$placeholderNom = "Votre nom...";
$placeholderEmail = "votre@email.com";
$placeholderMessage = "Votre message...";

$optionStage = "Proposition de stage";
$optionAutre = "Autre";

$valeurStage = "Stage";
$valeurAutre = "autre";

$texteEnvoyer = "Envoyer";

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

    <p><?= $description ?></p>

    <nav>
        <a href="index.php"><?= $accueil ?></a> |
        <a href="projets.php"><?= $projets ?></a> |
        <a href="#contact"><?= $contact ?></a>
    </nav>

</header>

<main>

    <section class="carte" id="presentation">

        <h2><?= $titrePresentation ?></h2>

        <p><?= $textePresentation ?></p>

        <h3><?= $titreCompetences ?></h3>

        <ul>
            <?php foreach ($competences as $competence): ?>
                <li><?= $competence ?></li>
            <?php endforeach; ?>
        </ul>

    </section>


    <section class="carte" id="tableau">

        <h2><?= $titreParcours ?></h2>

        <table>

            <thead>
                <tr>
                    <th><?= $titreAnnee ?></th>
                    <th><?= $titreExperience ?></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($parcours as $experience): ?>
                    <tr>
                        <td><?= $experience["annee"] ?></td>
                        <td><?= $experience["experience"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </section>


    <section class="carte" id="contact">

        <h2><?= $titreContact ?></h2>

        <form action="#" method="post">

            <p>
                <label for="nom"><?= $labelNom ?></label>
                <input type="text" id="nom" name="nom"
                       placeholder="<?= $placeholderNom ?>" required>
            </p>

            <p>
                <label for="email"><?= $labelEmail ?></label>
                <input type="email" id="email" name="email"
                       placeholder="<?= $placeholderEmail ?>" required>
            </p>

            <p>
                <label for="sujet"><?= $labelSujet ?></label>

                <select id="sujet" name="sujet">
                    <option value="<?= $valeurStage ?>"><?= $optionStage ?></option>
                    <option value="<?= $valeurAutre ?>"><?= $optionAutre ?></option>
                </select>
            </p>

            <p>
                <label for="message"><?= $labelMessage ?></label>
                <textarea id="message" name="message" rows="4"
                          placeholder="<?= $placeholderMessage ?>" required></textarea>
            </p>

            <button type="submit"><?= $texteEnvoyer ?></button>

        </form>

    </section>

</main>

<footer>
    <p>&copy; <?= $annee ?> - <?= $texteFooter ?></p>
</footer>

</body>
</html>
