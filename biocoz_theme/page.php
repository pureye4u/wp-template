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
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.1.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_header(); ?>
    <div class="wrap">
        <div class="scroll-box dual-page">
            <img class="floating-object top left" src="<?php bloginfo('template_url'); ?>/imgs/common/bg_obj01_crop.png" />
            <img class="floating-object right" src="<?php bloginfo('template_url'); ?>/imgs/common/bg_obj02_crop.png" />
            <div class="bg-book">
                <div class="contents">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; else: ?>
                    <h2>Empty!</h2>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php get_footer(); ?>
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
