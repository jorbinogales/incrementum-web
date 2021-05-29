
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
        <!-- PARTICLES CON CSS  -->
        <link rel="stylesheet" href="dist/css/styles/particles.css">
        
    </head>
    <body>
    <!-- particles.js container -->
    <div id="particles-js">
        <div class="loading-box">
             <img src="dist/img/loading.png" alt="">
             <div id="progress-bar"></div>
             <divc class="bg"></div>
             <div id="progress"></div>
        </div>
    </div>

    <!-- stats - count particles -->
    <div class="count-particles">
        
        <span class="js-count-particles"></span> 
    </div>

<?php } ?>