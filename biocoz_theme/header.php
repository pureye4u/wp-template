<ul class="side-nav" id="mobile-demo">
    <li><a href="/ceo-message/">ABOUT US</a></li>
    <li class="submenu"><a href="/about-us/ceo-message/">CEO MESSAGE</a></li>
    <li class="submenu"><a href="/about-us/history/">HISTORY</a></li>
    <li><a href="/global-rd-network/">R&amp;D</a></li>
    <li class="submenu"><a href="/rd/global-rd-network/">GLOBAL R&amp;D NETWORK</a></li>
    <li class="submenu"><a href="/rd/rd/">R&amp;D</a></li>
    <li><a href="/archives/category/press/">PRESS</a></li>
    <li><a href="/contact-us/">CONTACT US</a></li>
    <li class="language"><a href="#kr" class="btn-lang-kr">KR</a></li>
    <li class="language"><a href="#en" class="btn-lang-en">EN</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="<?php echo home_url(); ?>" class="brand-logo"><img src="<?php bloginfo('template_url'); ?>/imgs/nav/logo.jpg" /></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="gnb">
            <ul id="menu" class="normal center hide-on-med-and-down">
                <li><a class="dropdown-button" href="/about-us/ceo-message/" data-activates="dropdown1"><span>ABOUT US</span></a></li>
                <li><a class="dropdown-button" href="/rd/global-rd-network/" data-activates="dropdown2"><span>R&amp;D</span></a></li>
                <li><a href="/archives/category/press/"><span>PRESS</span></a></li>
                <li><a href="/contact-us/"><span>CONTACT US</span></a></li>
            </ul>
            <div class="highlight-bar"></div>
        </div>
        <ul class="language-box hide-on-med-and-down">
            <li><a href="#kr" class="btn-lang-kr">KOREAN</a></li>
            <li><a href="#en" class="btn-lang-en">ENGLISH</a></li>
        </ul>
    </div>

    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/about-us/ceo-message/">CEO MESSAGE</a></li>
        <li><a href="/about-us/history/">HISTORY</a></li>
    </ul>

    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="/rd/global-rd-network/">GLOBAL R&amp;D NETWORK</a></li>
        <li><a href="/rd/rd/">R&amp;D</a></li>
    </ul>
</nav>
<script>
var paths = [
    ['about-us/ceo-message', 'about-us/history'],
    [
        'rd/global-rd-network',
        'rd/rd',
        'archives/93',
        'archives/97',
        'archives/117',
        'archives/259',
    ],
    ['archives/category/press'],
    ['contact-us']
];
$(function() {
    var path = location.pathname.replace(/^\/|\/$/g, '');
    console.log('Scan menu selected', paths, path);
    var i;
    var j;
    var l = paths.length;
    for(i = 0; i < l; ++i) {
        var m = paths[i].length
        for(j = 0; j < m; ++j) {
            if(paths[i][j] === path) {
                console.log("Found", i);
                var list = $("#menu > li");
                list.each(function() {
                    var el = $(this);
                    var index = list.index(el);
                    console.log(index, i);
                    if(index === i) {
                        el.addClass("selected");
                    } else {
                        el.removeClass("selected");
                    }
                });
                return;
            }
        }
    }

});
</script>
