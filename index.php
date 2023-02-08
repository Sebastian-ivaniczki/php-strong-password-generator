<?php 

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
        <form class="form-control" action="#" method="GET">
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