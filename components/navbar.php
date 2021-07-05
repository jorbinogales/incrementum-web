<?php function navbarPHP($navs){ ?>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index">
                    <img src="dist/img/logo.png" width="100" class="d-inline-block align-top" alt="dacapri_logo">
                </a>

                <button class="text-white navbar-toggler" 
                        type="button" 
                        data-toggle="collapse" 
                        data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                    <span class="icon-three-bars"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav ml-auto mt-2 mt-lg-0" style="margin-left:auto;">
                        <ul class="navbar-nav mt-2 mt-lg-0">
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
            </div>
        </nav>
    </header>
<?php } ?>