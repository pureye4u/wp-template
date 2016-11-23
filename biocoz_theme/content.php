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
                <div class="dim">
                    <div class="detail">
                        <div class="detail-content">
<?php if ( have_posts() ) : the_post(); ?>
                            <ul class="hierarchy">
<?php
$categories = get_the_category();
$hierarchy = array();
$useTitleBar = false;
$parentLink = '#';
if( in_category( 'global-rd-network' ) ) {
    array_push( $hierarchy, array("title" => "R&D") );
    array_push( $hierarchy, array("link" => "/global-rd-network", "title" => "GLOBAL R&D NETWORK") );
    $parentLink = $categories[0]->slug;
} elseif (in_category( 'research-material' ) ) {
    array_push( $hierarchy, array("title" => "R&D") );
    array_push( $hierarchy, array("link" => "/research-material-list-page-1", "title" => "RESEARCH MATERIAL") );
    $useTitleBar = true;
    $postId = get_the_ID();
    $parentLinks = array(
        "124" => "/research-material-list-page-2",
        "126" => "/research-material-list-page-2",
        "128" => "/research-material-list-page-2",
        "130" => "/research-material-list-page-2",
        "132" => "/research-material-list-page-3",
        "134" => "/research-material-list-page-3"
    );
    if( array_key_exists( $postId, $parentLinks ) ) {
        $parentLink = $parentLinks[$postId];
    }
} elseif (in_category( 'press' ) ) {
    array_push( $hierarchy, array("link" => "/archives/category/press", "title" => "PRESS") );
    $useTitleBar = true;
    $parentLink = '/archives/category/' . $categories[0]->slug;
}

foreach($hierarchy as $node):
?>
<?php if( array_key_exists("link", $node) ): ?>
                                <li><a href="<?php echo $node["link"]; ?>"><?php echo $node["title"]; ?></a></li>
<?php else: ?>
                                <li><?php echo $node["title"]; ?></li>
<?php endif; ?>
<?php endforeach; ?>
                            </ul>
                            <div class="category-name">
                                <h3><?php echo $categories[0]->cat_name; ?></h3>
                            </div>
<?php if ( $useTitleBar ) : ?>
                            <div class="title-bar">
                                <h2 class="post-title"><?php the_title(); ?></h2>
                                <div class="post-info">
                                    <span class="post-info-author"><?php the_author(); ?></span>
                                    <span class="post-info-date"><?php echo get_the_date(); ?></span>
                                </div>
                            </div>
<?php endif; ?>
                            <div class="content-body">
                                <?php the_content(); ?>
                            </div>
<?php else: ?>
                            내용이 없습니다.
<?php endif; ?>
                        </div>
                        <div class="detail-btn-box">
                            <a href="<?php echo $parentLink; ?>"><img src="<?php bloginfo('template_url'); ?>/imgs/common/btn_list.png" /></a>
                        </div>
                        <a class="btn-close-detail" href="<?php echo $parentLink; ?>"><img src="<?php bloginfo('template_url'); ?>/imgs/common/btn_close_detail.png" /></a>
                    </div>
                </div>
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
