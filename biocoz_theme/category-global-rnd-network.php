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
<script src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/langswitch.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_header(); ?>
    <div class="wrap">
        <div class="scroll-box dual-page">
            <div class="contents">
                <div class="page">
                    <div class="title">
                        <img class="alignnone size-full wp-image-33" src="http://52.193.207.25/wp-content/uploads/2016/11/title.png" alt="title" width="600" height="244" />
                    </div>
<?php
if ( have_posts() ) :
?>
                    <ul class="rnd-list">
<?php
    $index = 0;
    while ( have_posts() ) :
        if ( $index == 2) :
?>
                    </ul>
                </div>
                <div class="page">
                    <ul class="rnd-list">

<?php
        endif;
        the_post();
?>
                        <li class="rnd-list-item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="list-thumb">
                                    <?php
                                      if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( array(124,124));
                                      }
                                    ?>
                                </div>
                                <div class="list-content">
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                    <span class="more">more</span>
                                </div>
                            </a>
                        </li>
<?php
        $index++;
    endwhile;
?>
                    </ul>
                </div>
<?php
else:
?>
            <h2>Empty!</h2>
<?php endif; ?>
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
