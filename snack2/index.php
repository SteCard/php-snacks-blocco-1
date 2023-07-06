<?php
    //VERIFICO se esistono i valori NOME,ETA,EMAIL nella variabile $_GET
    $flag_name = false;
    $flag_eta = false;
    $flag_email = false;

    //
    if(isset($_GET['nome']) && isset($_GET['età']) && isset($_GET['email'])){
        if(strlen($_GET['nome']) > 3){
            $flag_name = true;
        }

        //VERIFICARE che il valore in EMAIL contenga @ e .
        if(str_contains($_GET['email'], '@') && str_contains($_GET['email'], '.')){
            $flag_email = true;
        }

        //VERIFICARE che il valore in ETA' sia un numero
        if(is_numeric($_GET['età'])){
            $flag_eta = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-snack2</title>
</head>
<body>
    <h2>Snack 2</h2>
    <form action="index.php" method="GET">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="età" placeholder="Età">
        <button type="submit">Invia</button>
    </form>
    <?php if(isset($_GET['nome']) && isset($_GET['età']) && isset($_GET['email'])){ ?>
        <div>
            <?php if($flag_email && $flag_eta && $flag_name){
                echo 'Accesso riuscito';
            }
            else{
                echo 'Accesso negato';
            }
            ?>
        </div>
    <?php } ?>
</body>
</html>