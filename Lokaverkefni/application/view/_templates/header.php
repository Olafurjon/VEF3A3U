<?php session_start();

if(isset($_SESSION['username']))
{
    $session = true;
    $username = $_SESSION['username'];

}
else
{
    $session = false;
};


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lokaverkefni</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://178.62.25.29/css/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?php echo URL?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>/fonts/font-awesome/css/font-awesome.css">
    <!-- Slider
    ================================================== -->
    <link href="<?php echo URL?>/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="<?php echo URL?>/css/owl.theme.css" rel="stylesheet" media="screen">
    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo URL?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>/css/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo URL?>/js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo URL?>/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="<?php echo URL; ?>">Lokaverkefni<?php if($session == true){echo " <p class='under'>- skráður inn sem $username</p>";} else{} ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://178.62.25.29" class="page-scroll">Home</a></li>
                    <li><a href="<?php URL ?>aefingar" class="page-scroll">Æfingar</a></li>
                    <?php if(isset($_SESSION['username'])){ echo "<li><a href=". URL."profile" ." class=\"page-scroll\">Mín Síða</a></li>";}
                    else {echo "<li><a href=". URL."nyskraning" . " class=\"page-scroll\">Nýskráning</a></li>";echo "<li><a href=". URL."innskraning" . " class=\"page-scroll\">Innskraning</a></li>";}?>
                    <li><a href="http://178.62.25.29/#tf-works" class="page-scroll">Flísar</a></li>
                    <li><a href="#tf-testimonials" class="page-scroll">Hvatningarorð</a></li>
                    <?php if(isset($_SESSION['username'])){ echo "<li><a href=". URL. 'profile/logoutlink'." class=\"page-scroll\">Skrá út</a></li>";} ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>