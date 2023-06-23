<?php
date_default_timezone_set('America/Sao_Paulo');

if (isset($_POST["titulo"])) {
    $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
    $corpo = filter_input(INPUT_POST, "corpo", FILTER_DEFAULT);
    $cort = filter_input(INPUT_POST, "cort", FILTER_SANITIZE_SPECIAL_CHARS);
    $urlimg = filter_input(INPUT_POST, "urlimg", FILTER_SANITIZE_URL);
    $corbg = filter_input(INPUT_POST, "corbg", FILTER_SANITIZE_SPECIAL_CHARS);

    setcookie("titulo", $titulo, time() + (86400 * 30), "/");
    setcookie("corpo", $corpo, time() + (86400 * 30), "/");
    setcookie("urlimg", $urlimg, time() + (86400 * 30), "/");
    setcookie("cort", $cort, time() + (86400 * 30), "/");
    setcookie("corbg", $corbg, time() + (86400 * 30), "/");
} elseif (isset($_COOKIE["titulo"])) {
    $titulo = $_COOKIE["titulo"];
    $corpo = $_COOKIE["corpo"];
    $urlimg = $_COOKIE["urlimg"];
    $cort = $_COOKIE["cort"];
    $corbg = $_COOKIE["corbg"];
}

if (isset($_COOKIE["datahora"])) {
    $datahora = $_COOKIE["datahora"];
} else {
    $datahora = "";
}
$datahora .= date("d/m/Y - H:i:s") . "<br>";

setcookie("datahora", $datahora, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho T2 - DW2S5/IDSS5</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            color: <?= $cort; ?>;
            background-color: <?= $corbg; ?>;
        }

        img {
            max-width: 60%;
        }
    </style>
    <div class="container">
        <h1 class="my-3"><?= $titulo ?></h1>
        <hr class="clearfix">
        <div class="float-end">
            <a href="praticando_post.php">Voltar ao formulário</a>
        </div>

        <p><?= $corpo ?></p>

        <img src="<?= $urlimg ?>" alt="">

        <br>
        <p class="text-end">
            Você passou por essa página em: <br>
            <?= $datahora ?>
        </p>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>