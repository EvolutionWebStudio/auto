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
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/modernizr.js"></script>
</head>
<body>
	<?php
        if(!Yii::app()->user->isGuest):
	        $this->widget('AdminBar');
	    endif;
    ?>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="row">
        <div class="main-wrapper clearfix">
            <header class="large-12 columns">
                <div class="logo large-6 medium-6 columns"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/zuti-logo-auto-rasevic.png"/></div>
                <div class="large-6 medium-6 columns">
                    <div class="car-logos show-for-medium-up">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/auto-rasevic-header-car-logos.png"/>
                    </div>
                    <div class="info-menu">
	                    <ul>
		                    <li><?php echo CHtml::link('O nama',array('site/o_nama')); ?></li>
		                    <li><?php echo CHtml::link('Kontakt',array('site/kontakt')); ?></li>
	                    </ul>
                    </div>
                </div>
            </header>

            <div class="row">
                <div class="sidebar large-3 columns">
                    <nav class="main-menu">
                        <?php $this->widget('MainMenu',array(
	                        'activeCssClass' => 'active',
	                        'activateItems' => true,
                        )); ?>
                    </nav>
                    <div class="promo-area">
                        <?php $this->renderPartial('//_common/_banners'); ?>
                    </div>
                </div>

                <div class="large-9 columns content">
                    <?php echo $content; ?>
                </div>
            </div>

            <footer class="large-12 columns">
                <div class="copyright row">
                    Copyright &copy; <?php echo date('Y'); ?> Auto Rašević.<br/>
                    Website by <?php echo CHtml::link('matrix web team', 'http://www.matchomp.ba', array('target' => '_blank')); ?>
                </div>
           </footer>
        </div>
    </div>

	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>

    <!--
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.forms.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation/foundation.abide.js"></script>
    -->

    <script>
        $(document).foundation();
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-35795186-1', 'autorasevic.com');
        ga('send', 'pageview');
    </script>
</body>
</html>
