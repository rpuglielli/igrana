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
            <h3 class="text-center "> Cadastro <text class="text-white">i</text><strong class="text-success">Grana</strong> </h3>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-20" action="" method="POST">

                <div class="form-group ">
                    <div class="">
                        <input class="form-control" type="email" required="required" placeholder="Email">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="">
                        <input class="form-control" type="text" required="required" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <input class="form-control" type="password" required="required" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox" checked="checked">
                            <label for="checkbox-signup">Eu aceito os <a href="#" class="text-primary">termos e condições</a>.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center m-t-20">
                    <div class="">
                        <button class="btn btn-success btn-custom btn-block waves-effect waves-light" type="submit">
                            Cadastrar
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                Já possui uma conta?<a href="<?php echo HOME_URI; ?>/login/" class="text-primary m-l-5"><b>Clique aqui</b></a>
            </p>
        </div>
    </div>

</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>


<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>