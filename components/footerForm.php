<?php function footerForm(){ ?>
    <?php 
    require 'components/homeForm.php';
?>
<section id="form">
        <div class="container">
            <div class="container-fluid">
                <h3>CONTACTÁNOS</h3>
                <form id="formContact" method="post">
                    <div class="row">
                        <?php foreach($inputs as $input){ ?>
                            <div class="col-12 col-md-4 col">
                                <label class="form" for="<?php echo $input['id'] ?>">
                                    <input type="<?php echo $input['type'] ?>"
                                           placeholder="<?php echo $input['placeholder']?>"  
                                           id="<?php echo $input['id'] ?>">
                                </label>
                            </div>
                        <?php } ?>
                        <div class="col col-12 col-md-8">
                            <label class="form" for="textForm">
                                <textarea id="textForm" placeholder="CONSULTA"></textarea>
                            </label>
                        </div>
                        <div class="col col-12 col-md-4">
                            <input type="submit" class="btn btn-yellow" value="ENVIAR">
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>

<?php } ?>