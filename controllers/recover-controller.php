<?php
/**
 * RecoverController
 *
 * @package RPuglielliMVC
 * @since 0.1
 */
class RecoverController extends MainController
{

    /**
     * Carrega a página de recuperação de senha
     */
    public function index() {

        // Título da página
        $this->title = 'Recuperar senha';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        /** Carrega os arquivos do view **/

        // /views/_includes/header.php
        //require ABSPATH . '/views/_includes/header.php';

        // /views/home/login-view.php
        require ABSPATH . '/views/recover/recover-view.php';

        // /views/_includes/footer.php
        //require ABSPATH . '/views/_includes/footer.php';

    }

}