<?php 
    function servicePage($inputs){
        require 'components/homeService.php';
    ?>
        <section id="top">
            <div class="container">
                <div class="container-fluid position-relative">

                    <div class="text">
                        <h3>Te ayudamos a alcanzar <br><span>tus objetivos</span></h3>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="body">
            <div class="container">
                <div class="container-fluid">
                        <div class="content">
                            <h3>SERVICIOS</h3>
                            <div class="row">
                            <?php
                                $i = 0;
                                foreach($services as $service){?> 
                                    <div class="col-12 col-md-6 col-lg-4 m-auto">
                                        <div class="service" 
                                            id="service-<?php echo $i ?>" 
                                            data-toggle="modal" 
                                            data-target="#modal-service-<?php echo $i ?>">
                                            <span class="icon-service">
                                                <img src="dist/img/incrementum-service-serviceIcon<?php echo $i+1 ?>.png" alt="service_incrementum_advisors">
                                            </span>
                                            <h4><?php echo $service['title']?></h4>
                                            <p><?php echo $service['description'] ?></p>
                                        </div>
                                    </div>    
                                            
                                <?php $i++; ?>
                            <?php } ?>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <?php 
        $i = 0;
        foreach ($services as $service) {
            ?>
                <!-- Modal -->
                <div class="modal fade" 
                    id="modal-service-<?php echo $i ?>" 
                    tabindex="-1" 
                    role="dialog" 
                    aria-labelledby="modalservice-<?php echo $i ?>" 
                    aria-hidden="true"
                    >
                    <div class="modal-dialog modal-incrementum modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button class="p-1 btn btn-white" 
                                        type="button" 
                                        class="close" 
                                        data-dismiss="modal" 
                                        aria-label="Close">
                                CERRAR <span class="icon icon-x"></span>
                                </button>
                                <div class="header mt-5">
                                    <span class="line"></span>
                                    <span class="icon-service">
                                        <img src="dist/img/incrementum-service-serviceIcon<?php echo $i+1 ?>.png" alt="service_incrementum_advisors">
                                    </span>
                                </div>
                                <h4><?php echo $service['title']?></h4>
                                <p><?php echo $service['description'] ?></p>
                                <div class="body">
                                    <p><?php echo $service['parrafo'] ?></p>
                                    <ul class="w-80 m-auto">
                                        <?php 
                                            if(isset($service['list'])){
                                                for($j = 0; $j<count($service['list']); $j++){
                                                    ?>
                                                    <li class="position-relative w-100">
                                                        <span class="circle"></span>
                                                        <p class="ml-20"><?php echo $service['list'][$j] ?></p>
                                                    </li>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <?php footerForm($inputs, $i, $service['mailing']) ?>    
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