<?php 

/**
 * @param $inputs = components/homeForm.php;
 * 
 * @param $id = pages/service.php 
 * 
 * @param $service = pages/service.php
 */

function footerForm($inputs, $id, $service){ ?>

<section id="form">
        <div class="container">
            <div class="container-fluid">
                <h3>CONTÁCTANOS</h3>
                <form id="formContact<?php echo $id ?>" 
                      method="post"
                      onsubmit="sendEmail(event, <?php echo $id ?>)">
                    <div class="row">
                        <?php 
                            if($service != null){
                                ?>
                                    <input type="hidden" name="service" value="<?php echo $service ?>">
                                <?php
                            }
                        ?>
                        <?php foreach($inputs as $input){ ?>
                            <div class="col-12 col-md-4 col">
                                <label class="form" for="<?php echo $input['id'] ?>">
                                
                                    <input type="<?php echo $input['type'] ?>"
                                           placeholder="<?php echo $input['placeholder']?>"  
                                           id="<?php echo $input['id'] ?>"
                                           name="<?php echo $input['id'] ?>"
                                           <?php echo $input['required'] ?>>
                                </label>
                            </div>
                        <?php } ?>
                        <div class="col col-12 col-md-8">
                            <label class="form" for="textForm">
                                <textarea id="textForm" placeholder="CONSULTA" name="message" required></textarea>
                            </label>
                        </div>
                        <div class="col col-12 col-md-4">
                            <input  type="submit" 
                                    class="btn btn-yellow" 
                                    value="ENVIAR">
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
<?php } ?>