<?php
	require 'components/components.php';
	require 'components/footerForm.php';
	
	$page = 'home';
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}

	echo headerPHP($page);
	echo navbarPHP($navs);
	if(!isset($_GET['page'])){
		require 'pages/home.php';
		homePage();
	} else {
		switch ($_GET['page']) {

			case 'home':
				require 'pages/home.php';
				homePage();
			break;
			case 'about';
				require 'pages/about.php';
				aboutPage();
			break;
			default:
			case 'service';
				require 'pages/service.php';
				servicePage($inputs);
			break;
			case 'faq';
				require 'pages/faq.php';
				faqPage();
			break;
				require 'pages/home.php';
				homePage();
			break;
		}
	}
	echo footerPHP($page, $navs, $inputs);
?>
<!-- Modal -->
<button
    id="btnSuccess"
    data-toggle="modal" 
    data-target="#successEmail"
    style="display:none;">
</button>

<div class="modal fade" 
     id="successEmail"
     tabindex="0" 
     role="dialog" 
     aria-labelledby="successEmail" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Email enviado correctamente</h4>
                    <img src="dist/img/isoTipoColor.png" style="width:100%">
                    <p>Su correo electronico ha sido enviado exitosamente, pronto un miembro del equipo se comunicara contigo</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                </div>
            </div>
    </div>
</div>
