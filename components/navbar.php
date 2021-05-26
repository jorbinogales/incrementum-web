<?php function navbarPHP($navs){ ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index">
                <img src="dist/img/logo.png" width="100" class="d-inline-block align-top" alt="dacapri_logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto mt-2 mt-lg-0" style="margin-left:auto;">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <?php foreach($navs as $nav){?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo $nav['page']?>">
                                <?php echo $nav['text'] ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<?php } ?>