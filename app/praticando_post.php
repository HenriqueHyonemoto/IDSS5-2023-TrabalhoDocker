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
    <?php
    if (isset($_COOKIE["titulo"])) {
        $titulo = $_COOKIE["titulo"];
        $corpo = $_COOKIE["corpo"];
        $urlimg = $_COOKIE["urlimg"];
        $cort = $_COOKIE["cort"];
        $corbg = $_COOKIE["corbg"];
    } else {
        $titulo = "";
        $corpo = "";
        $urlimg = "";
        $cort = "";
        $corbg = "#bec4c0";
    }
    ?>
    <div class="container">

        <h1 class="my-3">Trabalho T2 - DW2S5/IDSS5</h1>
        <hr>
        <div class="row">
            <div class="col">
                <h3>Objetivos DW2S5</h3>
                <p>Revisar e treinar uso de cookies</p>
            </div>
            <div class="col">
                <h3>Objetivos IDSS5</h3>
                <p>Publicação de um container docker no Docker Hub</p>
            </div>
        </div>
        <hr>

        <h4>Gerador de páginas v.1.5</h4>
        <form class="row g-3 mt-2" action="destino-post.php" method="POST">
            <div class="row mb-2">
                <label for="titulo" class="col-sm-3 col-form-label text-end">Título:</label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" name="titulo" id="titulo" required value="<?= $titulo ?>">
                </div>
                <label for="cort" class="col-sm-2 col-form-label text-end">Cor texto:</label>
                <div class="col-sm-1">
                    <input class="form-control" type="color" name="cort" id="cort" required value="<?= $cort ?>">
                </div>
            </div>
            <div class="row mb-2">
                <label for="corpo" class="col-sm-3 col-form-label text-end">Corpo:</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="corpo" id="corpo" required><?= $corpo ?></textarea>
                </div>
                <label for="corbg" class="col-sm-2 col-form-label text-end">Cor background:</label>
                <div class="col-sm-1">
                    <input class="form-control" type="color" name="corbg" id="corbg" required value="<?= $corbg ?>">
                </div>
            </div>

            <div class="row mb-2">
                <label for="urlimg" class="col-sm-3 col-form-label text-end">URL de uma imagem:</label>
                <div class="col-sm-5">
                    <input class="form-control" type="url" name="urlimg" id="urlimg" required value="<?= $urlimg ?>">
                </div>
                <div class="col-sm-3 text-center">
                    <a href="limpa_cookies.php">Limpar cookies</a>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="limpa_cookies.php" class="btn btn-warning">Limpar</a>
                </div>
            </div>
        </form>


    </div>
</body>

</html>