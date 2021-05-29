<?php function footerPHP($page, $navs){ ?>
    <?php if($page != 'service'){?>
         <?php footerForm() ?>
    <?php } ?>
        <div class="footer-line">
            <div class="row">
                <div class="col-12 col-md-6 email">
                    <i class="icon-mail"></i> consultas@incrementum.pe
                </div>
                <div class="col-12 col-md-6 phone">
                    <i class="icon-phone"></i> +911 0113 0114
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <img src="dist/img/logoCompleto.png">
                            <ul class="d-flex icons">
                                <li>
                                    <span class="icon-whatsapp"></span>
                                </li>
                                <li>
                                    <span class="icon-mail"></span>
                                </li>
                                <li>
                                    <span class="icon-linkedin"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-4">
                            <ul class="nav">
                                 <?php foreach($navs as $nav){?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $nav['page']?>">
                                            <?php echo $nav['text'] ?>
                                        </a>
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