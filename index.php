<?php 
/*  
Oggi creeremo una pagina in grado di generare una password per gli utenti.
L'utente potrà scegliere la lunghezza password e ricevere in un alert una password con il numero di caratteri casuali da lui richiesto!
Lo screen allegato è un riferimento, ma potete variare la grafica.
Milestone 1: creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2: verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php
che includeremo poi nella pagina principale
Milestone 3: invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
*/

include __DIR__. "/logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Pasword Generatore</title>
</head>
<body>
    <div class="container mt-5">

        <h1 class="text-center mb-5">Strong Pasword Generatoer</h1>
        
        <div>
        <?php if(isset($error)){ ?>
            <div class="alert alert-danger">
                <?php echo $error?>
            </div>
        <?php } ?>
        <?php if(isset($password)){ ?>
            <div class="alert alert-success">
                La password generata è: <?= $password ?>
            </div>
        <?php } ?>
        <form class="form-control" action="./index.php" method="GET">
            <div>
                <label>Lunghezza password:</label>
                <input type="number" name="generatedPassword" placeholder="Lunghezza password">
            </div>
            <button type="submit" class="btn btn-primary mt-4">GENERATE</button>
        </form>
    </div>
    </div>
</body>
</html>