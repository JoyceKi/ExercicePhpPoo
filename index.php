<?php

require_once 'classes/Impot.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color:aliceblue;">
    <header class="mb-3">

        <nav class="navbar bg-body-tertiary ">
            <div class="container-fluid justify-content-center">
                <span class="navbar-brand mb-0 h1">Déclarez vos impôts</span>
            </div>
        </nav>
    </header>

    <main style="width: 75%; margin:auto;">
        <form action="resultaImpot.php" method="post">
            <div class="mb-3 mt-5">
                <label for="nomPrenom" class="form-label ms-3">Saisissez vos nom et prénom :</label>
                <input type="text" name="nom" class="form-control" id="nomPrenom" placeholder="Dupont Henry">
            </div>
            <div class=" mb-3">
                <label for="revenus" class="form-label ms-3">Saisissez le montant total de vos revenus annuels :</label>
                <div class="input-group">
                    <input type="text" name="revenus" class="form-control text-end" id="revenus" placeholder="0000.00">
                    <span class="input-group-text">€</span>
                </div>
            </div>
            <div class="my-5 ms-3">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </main>

    <footer class="container-fluid fixed-bottom bg-body-tertiary text-center ">
        <p>Pour nous contacter : impots@exemple.com</p>
    </footer>

</body>

</html>