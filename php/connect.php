<?php 
        
        function connect($usr,$pw,$db,$host){
            try{
                // TOMAMOS LOS DATOS DE CONEXION
                // DONDE DICE LOCALHOST LA CAMBIAMOS POR IP DEL SERVIDOR AL MOMENTO DE SER SUBIDO
                $conexion = new mysqli($host, $usr, $pw, $db);
                
                $conexion->set_charset('utf8');
                
                if($conexion->connect_error){
                
                    // EN CASO DE QUE LA CONEXION RESULTE ERRONEA SE MUESTRE EL MENSAJE //
                    echo $error -> $conexion->connect_error;
                }
            
            
                $sql = "SELECT ID, post_content, post_title, post_name FROM wpeu_posts WHERE post_status = 'publish' AND post_type = 'post' AND post_parent = 0 ORDER BY ID DESC LIMIT 2";
                
                $result = $conexion->query($sql);
            
                if($result->num_rows > 0){
                    
                    while($posts = $result->fetch_assoc()) {
                        
                        $postID = $posts['ID'];
                        
                        $sqlAttachment = "SELECT * FROM wpeu_posts WHERE post_parent = '$postID' AND post_type = 'attachment'";
                        
                        $resultAttachment = $conexion->query($sqlAttachment);
                        
                        if($resultAttachment->num_rows > 0){
                                
                                $attachment = $resultAttachment->fetch_assoc();
                                
                                $attachmentID = $attachment['ID'];
                                
                                $sqlVariant = "SELECT * FROM wpeu_postmeta WHERE post_id = '$attachmentID' and meta_key = '_wp_attached_file'";
                            
                                $resultVariant = $conexion->query($sqlVariant);
                                
                                if($resultVariant->num_rows > 0){
                            
                                    $variant = $resultVariant->fetch_assoc();
                                    
                                    ?>
                                        <div class="col-12 col-md-6">
                                            <a  class="blog-content" 
                                                href="https://blog.incrementum.pe/<?php echo $posts['post_name'] ?>"
                                                style="background-image: url('https://blog.incrementum.pe/wp-content/uploads/<?php echo $variant['meta_value'] ?>')">
                                                <div class="background-gradient"></div>
                                                <h4><?php echo mb_substr($posts['post_title'], 0, 40); ?></h4>
                                                
                                            </a>
                                        </div>
                                    
                                    <?php
                                }
                        
                            
                            }
                        

                    }
                }
            
           } catch (Exception $e) {
               
               
                
           }
        }

?>