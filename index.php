<?php

$numbers = [
    ['|‾‾|', '|&nbsp&nbsp&nbsp&nbsp|', '&nbsp‾‾&nbsp'],

    ['&nbsp&nbsp&nbsp&nbsp|', '&nbsp&nbsp&nbsp&nbsp|', '&nbsp&nbsp&nbsp&nbsp'],

    ['&nbsp‾‾|', '|‾‾ ', '&nbsp‾‾ '],

    ['&nbsp‾‾|', '&nbsp‾‾|', '&nbsp‾‾ '],

    ['|&nbsp&nbsp&nbsp&nbsp|', '&nbsp‾‾|', '&nbsp&nbsp&nbsp&nbsp'],

    ['|‾‾&nbsp', '&nbsp‾‾|', '&nbsp‾‾&nbsp'],

    ['|‾‾&nbsp', '|‾‾|', '&nbsp‾‾ '],

    ['&nbsp‾‾|&nbsp', '&nbsp&nbsp&nbsp&nbsp|', '&nbsp&nbsp&nbsp&nbsp'],

    ['|‾‾|', '|‾‾|', '&nbsp‾‾&nbsp'],

    ['|‾‾|', '&nbsp‾‾|', '&nbsp‾‾&nbsp']
];

if (isset($_GET['submit'])) {

    $chiffre = $_GET['chiffre'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCD</title>
</head>

<body>
    <style>
        h1,
        .div_input,
        .div_button {
            text-align: center;
        }

        .div_input,
        .div_button {
            margin-bottom: 20px;
        }

        .ecrin {
            display: flex;
            text-align: center;
        }

        input,
        button {
            padding: 10px;
            border-color: blue;
            border-radius: 10px;
            border-width: 4px;
            font-size: 15px;
        }

        input {
            width: 220px;
        }
    </style>

    <h1>Ecrin LCD</h1>
    <form method="get">
        <div class="div_input">
            <input name="chiffre" value="<?php echo $chiffre ?>" placeholder="Entrer un nombre de 0 à 9">
        </div>
        <div class="div_button">
            <button type="submit" name="submit">Valider</button>
        </div>
    </form>
    <div class="ecrin">
        <?php for ($i = 0; $i < strlen($chiffre); $i++) : ?>
            <div style="color: blue;  font-size: 25px; margin-right: 10px;">
                <?php echo implode('<br>', $numbers[$chiffre[$i]]); ?>
            </div>
        <?php endfor; ?>
    </div>
</body>

</html>