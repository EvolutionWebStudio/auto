<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta naem="language" content="sr"/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/modernizr.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="row">
        <header class="large-12 columns">
            <div class="logo large-6 medium-6 columns"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/zuti-logo-auto-rasevic.png"/></div>
            <div class="large-6 medium-6 columns">
                <div class="car-logos show-for-medium-up">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/auto-rasevic-header-car-logos.png"/>
                </div>
                <div class="info-menu">
                    <ul>
                        <li><a href="#">O nama</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="sidebar large-3 columns">
                <nav class="main-menu">
                    <?php echo $this->renderPartial('//common/_main-menu'); ?>
                </nav>
                <div class="promo-area">

                </div>
            </div>

            <div class="large-9 columns content">
                <?php echo $content; ?>
            </div>
        </div>

        <footer class="large-12 columns">
            <div class="copyright">
                Copyright &copy; <?php echo date('Y'); ?> Auto Rašević.<br/>
                Website by <?php echo CHtml::link('matrix web team', 'http://www.matchomp.ba', array('target' => '_blank')); ?>
            </div>

       </footer>
    </div>
    </div>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>

    <!--
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.alerts.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.clearing.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.cookie.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.dropdown.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.forms.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.joyride.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.magellan.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.orbit.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.reveal.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.section.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.tooltips.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.topbar.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.interchange.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.placeholder.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.abide.js"></script>
    -->

    <script>
        $(document).foundation();
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</body>
</html>
