<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="BIOCOZ Global">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- IE9이하 HTML5 적용을위한 소스 -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav>
        <div class="nav-wrapper">
            <a href="<?php echo home_url(); ?>" class="brand-logo"><img src="<?php bloginfo('template_url'); ?>/imgs/nav/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <div class="gnb">
                <ul class="normal center hide-on-med-and-down">
                    <li class="selected"><a class="dropdown-button" href="#" data-activates="dropdown1"><span>BUSINESS</span></a></li>
                    <li><a class="dropdown-button" href="#" data-activates="dropdown2"><span>R&amp;D</span></a></li>
                    <li><a href="#"><span>CONTACT US</span></a></li>
                    <li><a href="#"><span>PRESS</span></a></li>
                </ul>
                <div class="highlight-bar"></div>
            </div>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="#" data-activates="dropdown1">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li class="language"><a href="">KR</a></li>
                <li class="language"><a href="">EN</a></li>
            </ul>
            <ul class="language-box hide-on-med-and-down">
                <li><a href="">KOREAN</a></li>
                <li><a href="">ENGLISH</a></li>
            </ul>
        </div>

        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#!">CEO MESSAGE</a></li>
            <li><a href="#!">HISTORY</a></li>
        </ul>

        <ul id='dropdown2' class='dropdown-content'>
            <li><a href="#!">GLOBAL R&amp;D NETWORK</a></li>
            <li><a href="#!">RESEARCH MATERIAL</a></li>
        </ul>

    </nav>
    <div class="wrap">
        <div class="scroll-box single-page">
            <div class="contents">
                <div class="title">
                    <img src="imgs/main/txt.png" />
                </div>
                <div class="cover">
                    <img src="imgs/main/img_01.png" />
                </div>
            </div>
        </div>
        <footer>
            <div class="copy-box">
                <span class="copy-text"><img src="imgs/common/copyright.png" alt="<?php bloginfo('description'); ?>" /></span>
                <ul class="sns-button-group">
                    <li><a href="#"><img src="imgs/common/btn_twitter.png" /></a></li>
                    <li><a href="#"><img src="imgs/common/btn_facebook.png" /></a></li>
                </ul>
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>
</body>
<script>
$(function() {
    console.log("DOM ready")
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: "50%", // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left' // Displays dropdown with edge aligned to the left of button
    });
});
</script>
</html>
