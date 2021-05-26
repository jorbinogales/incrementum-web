
<?php function headerPHP($page){ ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Incrementum</title>
        <!-- BOOSTRAP STYLE  -->
        <link rel="stylesheet" href="dist/css/bootstrap/bootstrap.min.css">
        <!-- FONT STYLE  -->
        <link rel="stylesheet" href="dist/css/font/styles.css">
        <!-- GLOBAL STYLE  -->
        <link rel="stylesheet" href="dist/css/styles/global.css">
        <!-- HOJA DE ESTILOS DINAMICOS  -->
        <link rel="stylesheet" href="dist/css/styles/<?php echo $page ?>.css">
    </head>
    <body>

<?php } ?>