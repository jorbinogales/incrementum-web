<?php function homePage(){ ?>

    <?php 
        require 'components/homeService.php';   
        require 'components/homeFeatures.php'; 
    ?>

    <section id="top">
        <div class="container">
            <div class="container-fluid position-relative">
                <img src="dist/img/incrementum-te-llevamos-a-la-sima-nubes.png" id="nube" alt="te-llevamos-a-la-sima-incrementum">
                <img src="dist/img/incrementum-te-llevamos-a-la-sima-nubes1.png" id="nube1" alt="incremetum-te-llevamos-a-la-sima">
                <img src="dist/img/incrementum-te-llevamos-a-la-sima-nubes2.png" id="nube2" alt="incrementum-advisors-nubes">
                
                <img src="dist/img/incrementum-te-llevamos-a-la-sima-nubes2.png" id="nube3" alt="nubes-incrementum">
                <img src="dist/img/incrementum-te-llevamos-a-la-sima-nubes1.png" id="nube4" alt="incrementum_advisors">

                <h2><img src='dist/img/incrementum-advisors-logo-isoTipoColor.png' id='logo' alt="incrementum-advisors-logo-isotipo"></h2>

                <h2><b>Te lleva a la cima</b></h2>
            </div>
        </div>
    </section>

    <section id="body">
        <div class="container">
            <div class="container-fluid">
                <div class="target">
                    <div class="text">
                        <h1>Incrementum Advisors</h1>
                        <h3>¿POR QUÉ INCREMENTUM?</h3>
                        <p>
                        Sabemos que el mundo está en constante cambio, que las finanzas 
                        y la economía pueden llegar a ser vulnerables si no contamos con
                        un plan sólido; por ello desde Incrementum acompañamos tus 
                        finanzas, creamos planes que se  adaptan a tus necesidades
                        y asesoramos tu presente para transformar tu futuro
                        </p>
                    </div>
                </div>
                <div class="content">
                   <h3>NOS DISTINGUIMOS POR</h3>
                  <?php $i = 0 ?>
                  <?php foreach($features as $feature){?>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <div class="block">
                                <img src="dist/img/incrementum-advisors-iconhome<?php echo $i+1 ?>.png" 
                                     alt="incrementum_advisors_icon">
                            </div>
                        </div>
                        <div class="col-12 col-md-9">
                            <h4><?php echo $feature['title']?></h4>
                            <p>
                               <?php echo $feature['description']?>
                            </p>
                        </div>
                    </div>
                    <?php $i++ ?>
                  <?php } ?>
                   <span class="linea"></span>
                </div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="gradient"></div>
        <div class="container">
            <div class="container-fluid">
                <h3>Servicios</h3>
                <div class="row p-0">
                    <?php foreach($services as $service){?>
                        <div class="col-12 col-md-4 service p-0">
                            <div class="row p-0">
                                <div class="col-2">
                                    <span class="icon icon-check"></span>
                                </div>
                                <div class="col-10">
                                    <h4><?php echo $service['title']?></h4>
                                    <p><?php echo $service['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="container-fluid">
                <div class="target">
                    <h3><a href="https://blog.incrementum.pe">BLOG</a></h3>
                    <div class="row">
                    <?php 

                    require 'php/connect.php';
                       
                    define("MYSQL_CONN_ERROR", "Unable to connect to database.");

                    mysqli_report(MYSQLI_REPORT_STRICT);

                    try {

                        $usr = 'incremen_wp122';
                        $pw = 'Sumagro01$$';
                        $db = 'incremen_wp122';
                        $host = 'localhost';

                        connect($usr, $pw, $db, $host);

                    } catch (Exception $e){

                        echo $e->errorMessage();

                    } 
                    
                     ?>
                    </div>
                    <span class="linea"></span>
                </div>
            </div>
        </div>
    </section>
    
<?php } ?>