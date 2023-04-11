<?php
function passGenerator($length)
{
    $chars = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&*+?@[\]^_`~";
    $passRandom = array();
    $PassLength = strlen($chars) - 1;
    for ($i = 0; $i < $length; $i++) {
        $number = rand(0, $PassLength);
        $passRandom[] =  $chars[$number];
    }
    return implode($passRandom);
}

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
            <form action="index.php" method="GET">
                <label for="pass_lenght" class="form-label">Lunghezza password:</label>
                <input type="number" class="form-control" id="pass_lenght" name="pass_lenght">
                <button type="submit" class="btn btn-primary my-2">Crea</button>
            </form>
        </div>
    </div>
    <div class="container">
        <p>la tua bellissima password è: <?php echo passGenerator($_GET['pass_lenght']); ?></p>
    </div>
</body>

</html>