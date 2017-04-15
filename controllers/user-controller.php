<?php
/**
 * UserRegisterController
 *
 * @package RPuglielliMVC
 */
class UserController extends MainController
{

	/**
	 * $login_required
	 *
	 * Se a página precisa de login
	 *
	 * @access public
	 */
	public $login_required = false;
	
	public function cad() {
		// Page title
		$this->title = 'Cadastro';
	
		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
	
		// Carrega o modelo para este view
        $modelo = $this->load_model('user-register/user-register-model');
				
		/** Carrega os arquivos do view **/
		
		// /views/_includes/header.php
        //require ABSPATH . '/views/_includes/header.php';
		
		// /views/user-register/index.php
        require ABSPATH . '/views/user/user-register-cad.php';
		
		// /views/_includes/footer.php
        //require ABSPATH . '/views/_includes/footer.php';
		
    }
	
	public function profile() {
		// Título da pagina
		$this->title = 'Perfil de Usuário';
		
		// Verifica se o usuário está logado
		if ( ! $this->logged_in ) {
		
			// Se não; garante o logout
			$this->logout();
			
			// Redireciona para a página de login
			$this->goto_login();
			
			// Garante que o script não vai passar daqui
			return;
		
		}
	
		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
	
		// Carrega o modelo para este view
        $modelo = $this->load_model('user-register/user-register-model');
				
		/** Carrega os arquivos do view **/
		
		// /views/_includes/header.php
        require ABSPATH . '/views/_includes/header.php';
		
		// /views/user-register/user-profile.php
        require ABSPATH . '/views/user/user-profile.php';
		
		// /views/_includes/footer.php
        require ABSPATH . '/views/_includes/footer.php';
		
    } // index
	
}