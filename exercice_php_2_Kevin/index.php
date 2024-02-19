<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/styles/global.css" />
    <link rel="stylesheet" href="./assets/styles/exercice.css" />
    <link rel="stylesheet" href="./style.css">
    <title>Exercices PHP</title>
</head>

<body>
    <main>
        <article class="exercicePlayground">
            <div class="exerciceHeader">
                <div class="exerciceToolbar">
                    <div class="exerciceToolbarLeftboxStorage">
                        <h1>Exercices PHP</h1>
                    </div>
                    <a href="correction/index.php" class="button">Voir la correction</a>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Manipulation de tableau</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice : Gestion d'Inventaire de Produits en PHP
                            // ========================================================================
                            // Objectif : Créer un script PHP pour gérer et afficher des informations à partir d'un inventaire de produits complexe.
                            
                            // 1. Voici le tableau associatif représentant l'inventaire. 
                            //    Chaque produit est représenté par un tableau associatif contenant son nom, prix, quantité et catégorie.
                            
                            $inventaire = [
                                ['nom' => 'T-shirt blanc', 'prix' => 15.00, 'quantité' => 10, 'catégorie' => 'Vêtements'],
                                ['nom' => 'Jeans bleu', 'prix' => 50.00, 'quantité' => 20, 'catégorie' => 'Vêtements'],
                                ['nom' => 'Casquette verte', 'prix' => 12.00, 'quantité' => 5, 'catégorie' => 'Accessoires'],
                                ['nom' => 'Chaussures de sport', 'prix' => 80.00, 'quantité' => 8, 'catégorie' => 'Chaussures'],
                                ['nom' => 'Sweat à capuche', 'prix' => 35.00, 'quantité' => 6, 'catégorie' => 'Vêtements'],
                                ['nom' => 'Sac à dos', 'prix' => 40.00, 'quantité' => 10, 'catégorie' => 'Accessoires'],
                                ['nom' => 'Baskets mode', 'prix' => 60.00, 'quantité' => 5, 'catégorie' => 'Chaussures'],
                            ];

                            // 2. Tâches à réaliser :
                            //    a. Affichez la liste <ul> complète des produits, avec pour chaque produit un <li> avec son nom, prix, quantité et catégorie.
                            //    b. Calculez et affichez le total de produits en inventaire.
                            //    c. Calculez et affichez la valeur totale de l'inventaire (somme des produits multipliée par leur quantité respective).
                            //    d. Sélectionnez et affichez uniquement les produits de la catégorie 'Vêtements' sous forme de liste comme au point a.
                            echo "<ul>";
                            foreach($inventaire as $produits){
                                echo("<li>" . $produits["nom"] .", prix " . $produits["prix"] . "euros" . ", quantité " . $produits["quantité"] .", catégorie : " . $produits["catégorie"] . "</li>");
                            }
                            $produitsTotal = 0;
                            foreach($inventaire as $produits){
                      
                                $produitsTotal = $produitsTotal + $produits["quantité"];
                            }
                            echo"</ul>";

                            echo"<br>";

                            echo("<p>Le stock total des produits est : " . $produitsTotal . " piéces. </p>");

                            echo"<br>";

                            $valeurTotal = 0;
                            foreach($inventaire as $produits){
                                $valeurTotal = $valeurTotal + $produits["quantité"] * $produits["prix"];
                            }
                            echo "<p> Le prix total des produits est " . $valeurTotal ."€. </p>";

                            echo"<br>";

                            echo"<ul>";
                            foreach($inventaire as $produits){
                                if($produits["catégorie"] === "Vêtements"){
                                    echo"<li>" . $produits["nom"] . ", " . "au prix de " . $produits["prix"] . "€ unité, " . $produits["quantité"] . " en stok,". " categorie - " . $produits["catégorie"] . "</li>";
                                }
                            }
                            echo"</ul>";
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Manipulation de tableau ++</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice : Système de Réservation de Billets pour Événements en PHP
                            // ========================================================================
                            // Objectif : Créer un script PHP pour gérer les réservations de billets pour différents événements.
                            
                            // 1. Voici le tableau associatif représentant les événements et les réservations. 
                            // Chaque événement est un tableau associatif contenant son nom, le nombre total de places disponibles, le prix du billet et un tableau des réservations.
                            
                            $evenements = [
                                [
                                    'nom' => 'Concert Rock',
                                    'placesDisponibles' => 100,
                                    'prix' => 50.00,
                                    'reservations' => [
                                        ['nom' => 'Alice', 'nombreBillets' => 2],
                                        ['nom' => 'Bob', 'nombreBillets' => 5],
                                    ],
                                ],
                                [
                                    'nom' => 'Pièce de Théâtre',
                                    'placesDisponibles' => 50,
                                    'prix' => 35.00,
                                    'reservations' => [
                                        ['nom' => 'Charlie', 'nombreBillets' => 3],
                                        ['nom' => 'Diana', 'nombreBillets' => 4],
                                    ],
                                ],
                                [
                                    'nom' => 'Exposition d\'Art Moderne',
                                    'placesDisponibles' => 80,
                                    'prix' => 20.00,
                                    'reservations' => [
                                        ['nom' => 'Eva', 'nombreBillets' => 2],
                                        ['nom' => 'Frank', 'nombreBillets' => 2],
                                    ],
                                ],
                            ];

                            // 2. Tâches à réaliser :
                            //    a. Affichez la liste des événements, avec pour chaque événement son nom, le nombre total de places disponibles, le prix du billet et le nombre total de réservations.
                            //    b. Pour chaque événement, calculez et affichez le nombre de places restantes après les réservations.
                            //    c. Calculez et affichez le revenu total généré par les réservations pour chaque événement.
                            //    d. Identifiez et affichez l'événement ayant le plus grand nombre de réservations.
                            echo"<ul>";

                            foreach($evenements as $evenement){
                                $evenementNom = $evenement["nom"];
                                $evenementPrix = $evenement["prix"];
                                $evenementPlaceDispo = $evenement["placesDisponibles"];

                            
                                $totalPlaceReserve = 0;
                                foreach($evenement["reservations"] as $reservation){
                                    $totalPlaceReserve = $totalPlaceReserve + $reservation["nombreBillets"];
                                }
                                $totalRestant = $evenementPlaceDispo - $totalPlaceReserve;
                               
                                echo"<br>";

                                echo("<li>L'évènement: " . $evenementNom . " au prix de " . $evenementPrix . "€ le billet, " . "place disponilbe " . $evenementPlaceDispo . ", " . $totalPlaceReserve . " places réservé. </li>");
                                echo"<br>";

                                echo("Il reste " . $totalRestant . " billet.");

                                echo"<br>";
                                
                                $prixTotalreservation = $evenementPrix * $totalPlaceReserve;
                                echo(" le prix total des réservations est de " . $prixTotalreservation . ".");

                                echo"<br>";

                                $plusGrandNombreDereservation = 0;
                                if($totalPlaceReserve >= $plusGrandNombreDereservation){
                                    $plusGrandNombreDereservation = $totalPlaceReserve;
                                    $plusGrandNombreDereservation = $evenementNom;                             
                                }   
                            }
                            echo"</ul>";
                            echo"<br>";

                            echo("L'évènements ayant vendu plus de réservation c'est " . $plusGrandNombreDereservation);


                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Conversion de temperature</h2>
                        <div class="exerciceboxStorage">
                            <form class="form" method="POST">
                                <div class="inputboxStorage">
                                    <label for="celsiusAmount">Temperature en Celsius</label>
                                    <input type="number" name="celsiusAmount" id="celsiusAmount">
                                </div>
                                <input type="submit" value="Calculer" id="celsiusAmountButton" class="button" />
                                <div id="celsiusDetail">
                                    <?php
                                    if (isset($_POST) && isset($_POST["celsiusAmount"])) {
                                        // VALEUR SAISIE PAR L'UTILISATEUR.
                                        $celsiusAmount = $_POST["celsiusAmount"];
                                        // `console.log()` DE LA VALEUR SAISIE PAR L'UTILISATEUR.
                                        print_r($celsiusAmount);

                                        // ========================================================================
                                        // Exercice A : Convertisseur de Température en PHP
                                        // ========================================================================
                                        // Objectif : Créer un script PHP capable de convertir des températures entre les échelles Celsius et Fahrenheit.
                                    
                                        // 1. Créez une fonction `celsiusToFahrenheit`.
                                        //    a. La fonction prend en paramètre une température en Celsius et la convertit en Fahrenheit.
                                        //    b. Utilisez les formules de conversion suivantes :
                                        //       - Celsius en Fahrenheit : (C * 9/5) + 32
                                    function celsiusToFahrenheit($celsius){
                                        $fahrenheit = ($celsius * 9/5) +32;
                                        return $fahrenheit;
                                    }
                                    echo "<p>" . celsiusToFahrenheit($celsiusAmount) . "</p>";
                                }
                                    ?>
                                </div>
                            </form>
                            <form class="form" method="POST">
                                <div class="inputboxStorage">
                                    <label for="fahrenheitAmount">Temperature en Fahrenheit</label>
                                    <input type="number" name="fahrenheitAmount" id="fahrenheitAmount">
                                </div>
                                <input type="submit" value="Calculer" id="fahrenheitButton" class="button" />
                                <div id="fahrenheitDetail">
                                    <?php
                                    if (isset($_POST) && isset($_POST["fahrenheitAmount"])) {
                                        // VALEUR SAISIE PAR L'UTILISATEUR.
                                        $fahrenheitAmount = $_POST["fahrenheitAmount"];
                                        // `console.log()` DE LA VALEUR SAISIE PAR L'UTILISATEUR.
                                        print_r($fahrenheitAmount);

                                        // ========================================================================
                                        // Exercice B : Convertisseur de Température en PHP
                                        // ========================================================================
                                    
                                        // 1. Créez une fonction `fahrenheitToCelsius`.
                                        //    a. La fonction prend en paramètre une température en Fahrenheit et la convertit en Celsius.
                                        //    c. Utilisez les formules de conversion suivantes :
                                        //       - Fahrenheit en Celsius : (F - 32) * 5/9
                                        function fahrenheitToCelsius($fahrenheit){
                                            $celsius = ($fahrenheit * 5/9) -32;
                                            return $celsius;
                                        }
                                    }
                                    echo ("<p>" . fahrenheitToCelsius($fahrenheitAmount) . "</p>");

                                    ?>
                                    <p>Remplacer ce paragraphe par un echo() avec la conversion Fahrenheit > Celsius</p>
                                </div>
                            </form>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Modularité PHP</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice : Inclure le contenu d'autres fichier PHP.
                            // ========================================================================
                            
                            // 1. L'objectif de cet exercice est de pratiquer l'utilisation des fonctions d'inclusion de PHP pour réutiliser le code
                            //    HTML dans différentes parties de votre site Web. Cela permet de maintenir votre code organisé et de faciliter les mises à jour globales.
                            //    L'en-tête (`header`) et le pied de page (`footer`) se trouvent dans des fichiers PHP au sein du dossier `components`.
                            //    Trouvez sur internet le moyen d'inclure ces deux fichiers ici même, vous pouvez avoir un appercu de ce qui attendu dans la partie correction.
                                    include "components/header.php";
                                    include "components/footer.php";
                            
                            ?>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>