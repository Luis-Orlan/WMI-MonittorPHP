<?php
	class PainelControle{

		public $pagina = "PainelControle"; 

		public function index(){
			if (!empty($_SESSION['sessionUser'][0]['USER_Status'])) {
				require_once __DIR__.'/../../../www/body'._INDEX;
			}else{
				header("Location: \\Login");
				exit;
			}
		}

		public function main(){
			require_once __DIR__.'/../../../www/body/main'.'/'.$this->pagina._INDEX;
		}
	}
?>
