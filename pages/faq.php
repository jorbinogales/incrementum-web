<?php 
    function faqPage(){
        require 'components/faqQuesting.php'
        ?>
        <section id="top">
            <div class="container">
                <div class="container-fluid position-relative">

                    <div class="text">
                        <h3>“Por difícil que sea el camino, sabemos como<br><span>llegar a la meta, tu tranquilidad...”</span></h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="body">
            <div class="container">
                <div class="container-fluid">
                        <div class="content">
                            <h3>PREGUNTAS FRECUENTES</h3>
                            <div class="row">
                                <?php 
                                    $i = 1;
                                    foreach ($questions as $question) {
                                        ?>
                                        <div class="col-12 faq" style="position:relative;">
                                            <span class="circle"><?php echo $i ?></span>
                                            <h4><?php echo $question['question'] ?></h4>
                                            <p><?php echo $question['resp'] ?></p>
                                            <ul>
                                                <?php 
                                                    if(isset($question['list'])){
                                                        for($j=0; $j<count($question['list']); $j++){
                                                            ?>
                                                            <li class="mt-2 item-list position-relative">
                                                                <span class="circle circle-gray"></span>
                                                                <?php echo $question['list'][$j] ?>
                                                            </li>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                        <?php
                                        $i++;
                                    }
                                ?>
                            </div>
                        </div>
                </div>
            </div>
        </section>

<?php
    }

?>