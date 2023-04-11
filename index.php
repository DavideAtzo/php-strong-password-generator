<?php
$pass_lenght = $_POST['pass_lenght'];
var_dump($pass_lenght)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <div class="mx-3">
            <form action="index.php" method="POST">
                <label for="pass_lenght" class="form-label">Lunghezza password:</label>
                <input type="number" class="form-control" id="pass_lenght" name="pass_lenght">
                <button type="submit" class="btn btn-primary my-2">Crea</button>
            </form>
        </div>
    </div>
</body>

</html>