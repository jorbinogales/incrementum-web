
<?php function headerPHP($page){ ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="Sabemos que el mundo está en constante cambio, que las 
                                          finanzas y la economía pueden llegar a ser vulnerables si no contamos con
                                          un plan sólido; por ello desde Incrementum acompañamos tus finanzas, 
                                          creamos planes que se  adaptan a tus necesidades 
                                          y asesoramos tu presente para transformar tu futuro">
        <meta name="keywords" content="incrementum, negocios, comercios, advisors, empresas">
        <meta name="author" content="Jorbi Nogales (NogalesWeb)">
        <title>Incrementum Advisors | Te llevamos a la sima</title>
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

        <link rel="icon" href="dist/img/logo.png">

        <link rel="alternate" hreflang="x-default" href="http://www.incrementum.pe/home.php" />
        <link rel="alternate" hreflang="x-default" href="http://www.incrementum.pe/faq.php" />
        <link rel="alternate" hreflang="x-default" href="http://www.incrementum.pe/about.php" />
        <link rel="alternate" hreflang="x-default" href="http://www.incrementum.pe/service.php" />

        <!-- DEFINICION DEL LOGOTIPO COMO DATO ESTRUCTURADO PARA CUESTIONES DE SEO  -->
        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "http://www.incrementum.pe",
        "logo": "http://www.incrementum.pe/dist/img/logo.png"
        }
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q7BTQSLDLE"></script>
        <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
            
              gtag('config', 'G-Q7BTQSLDLE');
        </script>
    </head>
    <body>
    <!-- particles.js container -->
    <div id="particles-js">
        <div class="loading-box">
             <img src="dist/img/incrementum-loading.png" alt="loading_incrementum">
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