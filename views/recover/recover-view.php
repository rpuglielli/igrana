<?php if ( ! defined('ABSPATH')) exit; ?>

<?php
if ( $this->logged_in )
{
    header("location:".HOME_URI);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Robison Puglielli">

    <link rel="shortcut icon" href="<?php echo HOME_URI;?>/views/assets/images/favicon_1.ico">

    <title><?php echo $this->title; ?> | iGrana - Gerencie suas contas com facilidade.</title>

    <link href="<?php echo HOME_URI;?>/views/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo HOME_URI;?>/views/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo HOME_URI;?>/views/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo HOME_URI;?>/views/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo HOME_URI;?>/views/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo HOME_URI;?>/views/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo HOME_URI;?>/views/assets/js/modernizr.min.js"></script>
</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Resetar senha </h3>
        </div>

        <div class="panel-body">
            <form method="post" action="" class="text-center">
                <p class="text-left">Informe o seu <b>e-mail</b>, e as instruções para alteração de senha serão enviadas a você!</p>
                <div class="form-group m-b-0">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Informe o e-mail" required="required">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-success w-sm waves-effect waves-light">
                                Resetar
                            </button>
                        </span>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <a href="<?php echo HOME_URI; ?>/login" class="btn btn-inverse waves-effect waves-light">Voltar à tela de login</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>


</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo HOME_URI;?>/views/assets/js/jquery.min.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/bootstrap.min.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/detect.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/fastclick.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/waves.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/wow.min.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/jquery.core.js"></script>
<script src="<?php echo HOME_URI;?>/views/assets/js/jquery.app.js"></script>
</body>
</html>