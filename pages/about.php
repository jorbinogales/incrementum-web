<?php 

function aboutPage(){
    require 'components/aboutValues.php';
    require 'components/aboutTeam.php';
    ?>
        <section id="top">
            <div class="container">
                <div class="container-fluid position-relative">
                    <div class="text">
                        <h3><span>te llevamos al siguiente nivel</span></h3>
                    </div>
                </div>
                <img src="dist/img/arbusto2.png" id="arbusto1">
                <img src="dist/img/arbusto2.png" id="arbusto2">
            </div>
        </section>
        <section id="body">
            <div class="container">
                <div class="container-fluid">
                        <div class="content">
                            <h3>NOSOTROS</h3>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p>
                                    <b>Incrementum Advisors</b> es una firma peruana de asesoría financiera que
                                     realiza actividades de banca e inversión con aliados del sistema 
                                    financiero local e internacional para empresas y personas naturales. <br><br> 

                                    Nuestro objetivo es impulsar el crecimiento financiero de pequeñas y grandes empresas, 
                                    enfocándonos en la búsqueda de oportunidades comerciales, ofreciendo los mejores 
                                    programas de financiamiento, asesoría comercial y la maximización de ingresos 
                                    con  la intención de lograr beneficios significativos para nuestros clientes e inversionistas. <br><br>

                                    Nuestros socios y aliados estratégicos locales e internacionales cuentan con amplia experiencia
                                    en el ámbito financiero, legal y en el mercado de capitales, gozando además de un reconocido
                                    prestigio profesional y ético.<br><br>

                                    Las soluciones que proponemos en Incrementum se adaptan a las necesidades
                                    específicas del cliente, enfocándonos en lograr el máximo valor, rentabilidad y flexibilidad.<br><br>

                                    </p>
                                </div>
                                <div class="d-none d-md-block col-0 col-md-6">
                                    <img src="dist/img/about2.png">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div  class="container container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 p-3">
                        <div class="about h-100">
                            <h3>MISIÓN</h3>
                            <span class="linea"></span>
                            <p>
                                Nuestro objetivo es impulsar el crecimiento financiero de pequeñas y grandes empresas, 
                                enfocándonos en la búsqueda de oportunidades comerciales, ofreciendo los mejores 
                                programas de financiamiento, asesoría comercial y la maximización de ingresos con
                                la intención de lograr beneficios significativos para nuestros clientes e inversionistas.<br><br>
                                
                                Nuestros socios y aliados estratégicos locales e internacionales cuentan con
                                amplia experiencia en el ámbito financiero, legal y mercado de capitales, 
                                gozando además de un reconocido prestigio profesional y ético.<br><br>
                                
                                Las soluciones que propone Incrementum se adaptan a las necesidades específicas del cliente,
                                enfocándonos en lograr el máximo valor, rentabilidad y flexibilidad.<br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-3">
                        <div class="about">
                            <h3>VISIÓN</h3>
                            <span class="linea"></span>
                            <p>
                            Ser la empresa líder en ofrecer soluciones financieras en Perú, posicionándonos como la mejor alternativa
                            en actividades de banca de inversión para empresas y personas naturales. <br><br>
                            </p>
                        </div>
                        <br>
                        <div class="about">
                            <h3>PROMESAS DE VALOR</h3>
                            <span class="linea"></span>
                            <p>
                            Brindar servicios y productos financieros estratégicos de manera independiente e imparcial, 
                            basándose en experticia profesional multidisciplinaria. Las soluciones que brindamos se adaptan
                             a las necesidades específicas de cada cliente, enfocándonos en una máxima rentabilidad, desempeño
                              y reducción de costos en operatividad. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="values">
            <div class="container">
                <div class="container-fluid">
                    <div class="target">
                    <h3>VALORES</h3>
                    <span class="linea"></span>
                        <div class="row">
                            <?php foreach ($values as $value) {
                                ?>
                                    <div class="col-12 col-md-6">
                                        <h4><?php echo $value['title'] ?></h4>
                                        <p><?php echo $value['description'] ?></p>
                                    </div>
                                <?php
                            }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="p-5">
            <div class="container">
                <div class="container-fluid">
                    <h3>NUESTRO EQUIPO</h3>
                    <div class="row">
                        <?php $i = 1; ?>
                        <?php 
                            foreach ($teams as $team) {
                                ?>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div 
                                            class="team"
                                            id="team-<?php echo $i ?>" 
                                            data-toggle="modal" 
                                            data-target="#modal-team-<?php echo $i ?>">
                                            <img src="dist/img/team<?php echo $i ?>.png" alt="">
                                            <h4><?php echo $team['name'] ?></h4>
                                            <p><?php echo $team['position'] ?></p>
                                        </div>
                                    </div>
                         <?php
                            $i++;
                         }
                         ?>
                    </div>
                </div>
            </div>
        </section>

        <?php 
        $i = 1;
        foreach ($teams as $team) {
            ?>
                <!-- Modal -->
                <div class="modal fade" 
                    id="modal-team-<?php echo $i ?>" 
                    tabindex="-1" 
                    role="dialog" 
                    aria-labelledby="modalteam-<?php echo $i ?>" 
                    aria-hidden="true"
                    >
                    <div class="modal-dialog modal-incrementum modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <button class="p-1 btn btn-white" 
                                        type="button" 
                                        class="close" 
                                        data-dismiss="modal" 
                                        aria-label="Close">
                                CERRAR <span class="icon icon-x"></span>
                                </button>
                                <div class="header-team">
                                </div>
                                <div class="member">
                                    <img src="dist/img/team<?php echo $i ?>.png" alt="">
                                    <h4><?php echo $team['name'] ?></h4>
                                    <p><?php echo $team['position'] ?></p>
                                 </div>
                                <div class="body">
                                    <ul class="w-80 m-auto">
                                        <?php 
                                            for($j = 0; $j<count($team['skills']); $j++){
                                                ?>
                                                <li class="position-relative w-100">
                                                    <span class="circle"></span>
                                                    <p class="ml-20"><?php echo $team['skills'][$j] ?></p>
                                                </li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer p-0">
                                <button type="button" class="btn btn-yellow" data-dismiss="modal">CERRAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            $i++;
        }
        ?>
    <?php
}

?>