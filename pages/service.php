<?php 
    function servicePage(){
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
                                <div class="col-12 col-md-4 m-auto">
                                    <div class="service">
                                        <span>
                                            <img src="dist/img/serviceIcon<?php echo $i+1 ?>.png" alt="">
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
    }
?>