<?php function footerPHP($page, $navs){ ?>
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
        <script src="dist/js/loading.js"></script>
        <script src="dist/js/jquery.min.js"></script>
        <script src="dist/js/particles/particles.min.js"></script>
        <script src="dist/js/particles.js"></script>
        <script src="dist/js/<?php echo $page ?>.js"></script>
    </body>
    </html>

<?php } ?>