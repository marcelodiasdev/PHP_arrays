<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array </title>
</head>

<body>
    <style>
        body {
            color: white;
            font-family: arial;
        }

        main {
            padding: 10px;
            text-align: center;
            background-color: blue;
            font-size: 20px;
            border-radius: 30px;
        }

        h1 {
            color: yellow;
        }
    </style>
    <main>
        <h1> Arrays </h1>

        <?php
        // Utilizando arrays com PHP //
        $info['nome'] = "Marcelo ";
        $info['idade'] = 25 ;
        $info['cidade'] = " São Paulo ";
        $info['brasil'] = "Brasil ";

        echo $info['nome'];
        echo "- ";
        echo $info['idade']." anos";
        echo " - ";
        echo $info['cidade'];
        echo " - ";
        echo $info['brasil'];

        ?>
    </main>
</body>

</html>