<?php function footerPHP($page, $navs, $inputs){ ?>
    <?php require 'components/chatbot.php'; ?>
    <?php chatbot() ?>
    <?php if($page != 'service'){?>
         <?php footerForm($inputs, 0, null) ?>
    <?php } ?>
        <div class="footer-line">
            <div class="row">
                <div class="col-12 email">
                    <i class="icon-mail"></i> consultas@incrementum.pe
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <img src="dist/img/incrementum-advisors-logo-logoCompleto.png" alt="incrementum-advisors-logo-completo">
                            <ul class="d-flex icons">
                                <li>
                                    <a href="https://www.linkedin.com/company/incrementum-s-a-c/"><span class="icon-linkedin"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/Incrementum-Advisors-105275555118575/?ref=pages_you_manage"><span class="icon-facebook"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-4">
                            <ul class="nav">
                                <?php foreach($navs as $nav){?>
                                <li class="nav-item">
                                    <?php if($nav['page'] != 'contact'){?>
                                        <a class="nav-link text-light" href="<?php echo $nav['page']?>">
                                            <?php echo $nav['text'] ?>
                                        </a>
                                    <?php } else {
                                        ?>
                                        <a href="#form" class="nav-link text-light" href="<?php echo $nav['page']?>">
                                            <?php echo $nav['text'] ?>
                                        </a>
                                        <?php
                                    } ?>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="d-block text-right">Todos los derechos reservados 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="dist/js/chatbot/model.js"></script>

        <script src="dist/js/jquery.min.js"></script>                            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
       
        <script src="dist/js/particles/particles.js"></script>
        <script src="dist/js/particles.js"></script>
        <script src="dist/js/footer.js"></script>
        <script src="dist/js/<?php echo $page ?>.js"></script>
        <script src="dist/js/loading.js"></script>
    </body>
    </html>

<?php } ?>