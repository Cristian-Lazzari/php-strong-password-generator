<?php
    include 'function.php';
    $length = $_GET['leng'] ?? '10';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pw gen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <style>
        h1{
            text-align: center;
            padding: 1rem;
            margin-bottom: 2rem;
        }
        .sub-cont{
            padding: 1rem;
            width: 70%;
            margin-inline: auto;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            background-color: rgb(121, 121, 121);

        }
        .sub-cont div{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .rep{
            max-width: 20%;
        }
        
    </style>
</head>
<body>
    <h1>
        STRONG  PASSWORD GENERATOR
    </h1>
    <form class="sub-cont">
        <div>
            <label for="leng">Lunghezza passoword:</label>
            <input type="number" id="len" name="leng">
        </div>
        <div>
            <label for="repeat">Ripetizione:</label>
            <div class="rep">
                <input type="radio" id="repeat" name="repeat" value="true">
                <span>si</span>
                <input type="radio" id="repeat" name="repeat" value="false">
                <span>no</span>
            </div>
        </div>
        <div>
            <label for="l">Lettere</label>
            <input type="checkbox" name="let" id="l">
            <label for="n">Numeri</label>
            <input type="checkbox" name="num" id="n">
            <label for="s">Simboli</label>
            <input type="checkbox" name="sim" id="s">
        </div>
        <div>
        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-secondary" href="/php-strong-password-generator/">Annulla</a>
        </div>
    </form>
    <div><h1>Your password: <?php noset($length) ?></h1></div>
</body>
</html>