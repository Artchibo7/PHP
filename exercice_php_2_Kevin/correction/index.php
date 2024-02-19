<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../assets/styles/global.css" />
    <link rel="stylesheet" href="./../assets/styles/exercice.css" />
    <link rel="stylesheet" href="./../style.css">
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
                    <a href="../index.php" class="button">Retour à l'exercice</a>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Manipulation de tableau</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            $inventaire = [
                                ['nom' => 'T-shirt blanc', 'prix' => 15.00, 'quantité' => 10, 'catégorie' => 'Vêtements'],
                                ['nom' => 'Jeans bleu', 'prix' => 50.00, 'quantité' => 20, 'catégorie' => 'Vêtements'],
                                ['nom' => 'Casquette verte', 'prix' => 12.00, 'quantité' => 5, 'catégorie' => 'Accessoires'],
                                ['nom' => 'Chaussures de sport', 'prix' => 80.00, 'quantité' => 8, 'catégorie' => 'Chaussures'],
                                ['nom' => 'Sweat à capuche', 'prix' => 35.00, 'quantité' => 6, 'catégorie' => 'Vêtements'],
                                ['nom' => 'Sac à dos', 'prix' => 40.00, 'quantité' => 10, 'catégorie' => 'Accessoires'],
                                ['nom' => 'Baskets mode', 'prix' => 60.00, 'quantité' => 5, 'catégorie' => 'Chaussures'],
                            ];

                            echo ('<ul>');
                            foreach ($inventaire as $item) {
                                echo ("<li>" . $item['nom'] . " - " . $item['prix'] . "€ - " . $item['quantité'] . " exemplaire(s) - catégorie : " . $item['catégorie'] . "</li>");
                            }
                            echo ('</ul>');

                            $totalProduct = 0;

                            echo ('</br>');

                            foreach ($inventaire as $item) {
                                $totalProduct = $totalProduct + $item['quantité'];
                            }

                            echo ("<p>Nombre total de produit : " . $totalProduct . "</p>");

                            echo ('</br>');

                            $totalProductValue = 0;

                            foreach ($inventaire as $item) {
                                $totalProductValue = $totalProductValue + ($item['quantité'] * $item['prix']);
                            }

                            echo ("<p>Valeur total des produits : " . $totalProductValue . "€</p>");

                            echo ('</br>');

                            echo ('<ul>');
                            foreach ($inventaire as $item) {
                                if ($item['catégorie'] === 'Vêtements') {
                                    echo ("<li>" . $item['nom'] . " - " . $item['prix'] . "€ - " . $item['quantité'] . " exemplaire(s) - catégorie : " . $item['catégorie'] . "</li>");
                                }
                            }
                            echo ('</ul>');
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Manipulation de tableau ++</h2>
                        <div class="exerciceboxStorage">
                            <?php
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

                            echo ('<ul>');
                            foreach ($evenements as $evenement) {
                                $eventName = $evenement['nom'];
                                $eventPrice = $evenement['prix'];
                                $eventTotalBookedTicket = 0;

                                foreach ($evenement['reservations'] as $reservertion) {
                                    $eventTotalBookedTicket = $eventTotalBookedTicket + $reservertion['nombreBillets'];
                                }

                                $eventTotalAvailableTicket = $evenement['placesDisponibles'] - $eventTotalBookedTicket;

                                echo ("<li>" . $eventName . " - Place(s) disponible(s) : " . $eventTotalAvailableTicket . " au prix de : " . $eventPrice . "€ / place. Déjà " . $eventTotalBookedTicket . " tickets vendus</li>");
                            }
                            echo ('</ul>');

                            echo ('</br>');

                            foreach ($evenements as $evenement) {
                                $eventTotalBookedTicket = 0;

                                foreach ($evenement['reservations'] as $reservertion) {
                                    $eventTotalBookedTicket = $eventTotalBookedTicket + $reservertion['nombreBillets'];
                                }

                                $eventTotalAvailableTicket = $evenement['placesDisponibles'] - $eventTotalBookedTicket;

                                echo ("<p>Encore " . $eventTotalAvailableTicket . " place(s) disponible(s) pour : " . $evenement['nom'] . "</p>");
                            }

                            echo ('</br>');

                            foreach ($evenements as $evenement) {
                                $totalEventCash = 0;
                                $eventTicketPrice = $evenement['prix'];

                                foreach ($evenement['reservations'] as $reservertion) {
                                    $totalEventCash = $totalEventCash + ($eventTicketPrice * $reservertion['nombreBillets']);
                                }

                                $eventTotalAvailableTicket = $evenement['placesDisponibles'] - $eventTotalBookedTicket;

                                echo ("<p>L'évènement " . $evenement['nom'] . " a généré " . $totalEventCash . "€</p>");
                            }

                            echo ('</br>');

                            $maxReservations = 0;
                            $eventMaxReservations = null;

                            foreach ($evenements as $evenement) {
                                $totalReservations = 0;

                                foreach ($evenement['reservations'] as $reservation) {
                                    $totalReservations += $reservation['nombreBillets'];
                                }

                                if ($totalReservations > $maxReservations) {
                                    $maxReservations = $totalReservations;
                                    $eventMaxReservations = $evenement;
                                }
                            }

                            if ($eventMaxReservations !== null) {
                                echo "<p>L'événement avec le plus grand nombre de réservations est : " . $eventMaxReservations['nom'] . " avec " . $maxReservations . " réservations.</p>";
                            } else {
                                echo "<p>Aucune réservation trouvée.</p>";
                            }
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction conversion de temperature</h2>
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

                                        function celsiusToFahrenheit($celsius)
                                        {
                                            return ($celsius * 9 / 5) + 32;
                                        }

                                        echo ('<p>' . $celsiusAmount . ' celsius = ' . celsiusToFahrenheit($celsiusAmount) . ' fahrenheit</p>');
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

                                        function fahrenheitToCelsius($fahreinheit)
                                        {
                                            return ($fahreinheit - 32) * 5 / 9;
                                        }

                                        echo ('<p>' . $fahrenheitAmount . ' fahrenheit = ' . fahrenheitToCelsius($fahrenheitAmount) . ' celsius</p>');
                                    }

                                    ?>
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
                            include './../components/header.php';
                            include './../components/footer.php';
                            ?>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>