<!DOCTYPE html>
<html dir="<?php echo $this->language->__("language.direction"); ?>" lang="<?php echo $this->language->__("language.code"); ?>">
<head>
    <?php echo $this->includeAction('general.header'); ?>

    <link rel="stylesheet" href="<?=BASE_URL?>/css/vars.css.php?color1=<?php echo htmlentities($_SESSION["companysettings.primarycolor"]) ?>&color2=<?php echo htmlentities($_SESSION["companysettings.secondarycolor"]) ?>&v=<?php echo $settings->appVersion; ?>"/>
    <link rel="stylesheet" href="<?=BASE_URL?>/css/main.css?v=<?php echo $settings->appVersion; ?>"/>
    <link rel="stylesheet" href="<?=BASE_URL?>/css/overwrites.css" type="text/css"/>

    <script src="<?=BASE_URL?>/api/i18n"></script>

    <!-- libs -->
    <script src="<?=BASE_URL?>/js/compiled-base-libs.min.js?v=<?php echo $settings->appVersion; ?>"></script>
    <script src="<?=BASE_URL?>/js/compiled-extended-libs.min.js?v=<?php echo $settings->appVersion; ?>"></script>

    <!-- app -->
    <script src="<?=BASE_URL?>/js/compiled-app.min.js?v=<?php echo $settings->appVersion; ?>"></script>

</head>

<body>
<div class="mainwrapper">

    <div class="leftpanel" style="<?php if(isset($_SESSION['menuState']) && $_SESSION['menuState'] == 'closed') echo 'margin-left:-240px;'; ?>">


        <div class="logo" style="<?php if(isset($_SESSION['menuState']) && $_SESSION['menuState'] == 'closed') echo 'margin-left:-260px;'; ?>">

            <a href="<?=BASE_URL ?>" style="background-image:url('<?php echo htmlentities($_SESSION["companysettings.logoPath"]); ?>')">&nbsp;</a>
        </div>

        <div class="leftmenu">

            <?php echo $this->includeAction('general.menu'); ?>

        </div><!--leftmenu-->

    </div><!-- leftpanel -->

    <div class="header" style="<?php if(isset($_SESSION['menuState']) && $_SESSION['menuState'] == 'closed') echo 'margin-left:0px; width:100%;'; ?>">

        <a class="barmenu <?php if(!isset($_SESSION['menuState']) || $_SESSION['menuState'] == 'open') echo 'open'; ?>" href="javascript:void(0);">
            <span class="fa fa-bars"></span>
        </a>

        <div class="headerinner" style="<?php if(isset($_SESSION['menuState']) && $_SESSION['menuState'] == 'closed') echo 'margin-left:0px;'; ?>">


            <div class="userloggedinfo">
                <?php echo $frontController->includeAction('general.loginInfo'); ?>
            </div>

            <?php echo $frontController->includeAction('general.headMenu'); ?>

        </div>
    </div>

    <div class="rightpanel" style="position: relative; <?php if(isset($_SESSION['menuState']) && $_SESSION['menuState'] == 'closed') echo 'margin-left:0px;'; ?>">

        <!--###MAINCONTENT###-->

    </div><!--rightpanel-->

</div><!--mainwrapper-->

</body>
</html>
