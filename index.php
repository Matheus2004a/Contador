<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contadores - Números maiores e menores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="calc-Numeros.php" method="POST">
        <h2>Contador Inteligente</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite um número:</label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="num">
        </div>
        <p style="display:none;">
            <?php
                echo $_SESSION['msg-error'];
                unset($_SESSION['msg-error']);
            ?>
        </p>
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</body>

</html>