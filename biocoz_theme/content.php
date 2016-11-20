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
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="scroll-box">
            <div class="contents">
                <div class="dim">
                    <div class="detail">
                        <div class="detail-content">
                            <h2 style="display:none">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php the_content(); ?>
                        </div>
                        <div class="detail-btn-box">
                            <a href="/<?php echo get_the_category()[0]->slug; ?>"><img src="<?php bloginfo('template_url'); ?>/imgs/common/btn_list.png" /></a>
                        </div>
                        <a class="btn-close-detail" href="/<?php echo get_the_category()[0]->slug; ?>"><img src="<?php bloginfo('template_url'); ?>/imgs/common/btn_close_detail.png" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; else: ?>
        <h2>Sorry!</h2>
        <?php endif; ?>
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
