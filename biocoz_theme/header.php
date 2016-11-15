<nav>
    <div class="nav-wrapper">
        <a href="<?php echo home_url(); ?>" class="brand-logo"><img src="<?php bloginfo('template_url'); ?>/imgs/nav/logo.png" /></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="gnb">
            <ul id="menu" class="normal center hide-on-med-and-down">
                <li><a class="dropdown-button" href="#" data-activates="dropdown1"><span>BUSINESS</span></a></li>
                <li><a class="dropdown-button" href="#" data-activates="dropdown2"><span>R&amp;D</span></a></li>
                <li><a href="/contact-us/"><span>CONTACT US</span></a></li>
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
            <li><a href="#kr">KOREAN</a></li>
            <li><a href="#en">ENGLISH</a></li>
        </ul>
    </div>

    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/ceo-message/">CEO MESSAGE</a></li>
        <li><a href="/history/">HISTORY</a></li>
    </ul>

    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="/global-rd-network/">GLOBAL R&amp;D NETWORK</a></li>
        <li><a href="/research-material-list-page-1/">RESEARCH MATERIAL</a></li>
    </ul>
</nav>
<script>
var paths = [
    ['ceo-message', 'history'],
    [
        'global-rd-network',
        'research-material-list-page-1',
        'research-material-list-page-2',
        'research-material-list-page-3',
        'dr-anthony-j-sinskey',
        'dr-martin-c-mihm-jr',
        'glen-gong-phd',
        'kevin-l-ohashi-phd',
        '김찬화-박사'
    ],
    ['contact-us'],
    ['press']
];
$(function() {
    var path = location.pathname.replace(/^\/([^\/]*)\/$/, '$1');
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
