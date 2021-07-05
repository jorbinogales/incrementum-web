<?php 

function aboutPage(){
    require 'components/aboutValues.php';
    require 'components/aboutTeam.php';
    ?>
        <section id="top">
            <div class="container">
                <div class="container-fluid position-relative">
                    <div class="text">
                        <h3><span>Te llevamos al siguiente nivel</span></h3>
                    </div>
                </div>
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
                                    Somos una firma peruana de asesoría financiera que realiza actividades 
                                    de banca inversión con aliados del sistema financiero local e internacional,
                                    empresas locales y personas naturales con un solo foco de atención: su crecimiento.<br><br>


                                    Nuestro objetivo es impulsar el crecimiento financiero de nuestros clientes, 
                                    enfocándonos en la búsqueda de nuevas oportunidades comerciales, obteniendo para ellos, 
                                    los mejores programas de financiamiento, asesoría comercial y la maximización de ingresos
                                    con la ntención de lograr beneficios significativos para nuestros clientes e inversionistas.<br><br>

                                    Nuestros socios y aliados estratégicos locales e internacionales cuentan con 
                                    amplia experiencia en el ámbito financiero, legal y mercado de capitales, gozando
                                    además de un reconocido prestigio.<br><br>

                                    Las soluciones que proponemos a nuestros clientes, 
                                    se adaptan a sus necesidades, lo nuestro es enfocarnos 
                                    en lograr el máximo valor, la mejor rentabilidad y flexibilidad
                                     en cada una de las soluciones.<br><br>
                                    </p>
                                </div>
                                <div class="d-none d-md-block col-0 col-md-6">
                                    <img src="dist/img/nosotros-incrementum-advisors2.png">
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
                        <div class="col-0 col-lg-3"></div>
                        <?php $i = 1; ?>
                        <?php 
                            foreach ($teams as $team) {

                                if($i == 2 || $i == 3){
                        ?>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div 
                                            class="team"
                                            id="team-<?php echo $i ?>" 
                                            data-toggle="modal" 
                                            data-target="#modal-team-<?php echo $i ?>">
                                            <img src="dist/img/incrementum-advisors-team<?php echo $i ?>.png" alt="nosotros-incrementum-advisors-team">
                                            <h4><?php echo $team['name'] ?></h4>
                                            <p><?php echo $team['position'] ?></p>
                                        </div>
                                    </div>

                                <?php } ?>
                         <?php
                            $i++;
                         }
                         ?>
                         <div class="col-0 col-lg-3"></div>
                    </div>

                    <div class="row">
                        
                        <?php $i = 1; ?>
                        <?php 
                            foreach ($teams as $team) {

                                if($i != 2 && $i != 3){
                        ?>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div 
                                            class="team"
                                            id="team-<?php echo $i ?>" 
                                            data-toggle="modal" 
                                            data-target="#modal-team-<?php echo $i ?>">
                                            <img src="dist/img/incrementum-advisors-team<?php echo $i ?>.png" alt="nosotros-incrementum-advisors-team">
                                            <h4><?php echo $team['name'] ?></h4>
                                            <p><?php echo $team['position'] ?></p>
                                        </div>
                                    </div>

                                <?php } else { ?>

                                    <div class="col-0 col-lg-3"></div>

                                <?php } ?>
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
                                    <img src="dist/img/incrementum-advisors-team<?php echo $i ?>.png" alt="incrementum-advisors-nosotros">
                                </div>
                                <div class="member">
                                    <ul class="d-flex icons">
                                        <li>
                                            <a href="<?php echo $team['linkedin'] ?>"><span class="icon-linkedin"></span></a>
                                        </li>
                                    </ul>
                                    <h4><?php echo $team['name'] ?></h4>
                                    <p><?php echo $team['position'] ?></p>
                                 </div>
                                <div class="body">
                                    <ul class="w-95 m-auto">
                                        <?php 
                                            for($j = 0; $j<count($team['skills']); $j++){
                                                ?>
                                                <li class="position-relative w-100 p-0 m-0">
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