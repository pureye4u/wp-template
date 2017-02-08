
function setLang(lang) {
	var body = $('body');
	if(lang === 'en') {
		body.removeClass('kr');
		body.addClass('en');
		$.cookie('lang', 'en', {path: '/'});
	} else {
		body.removeClass('en');
		body.addClass('kr');
		$.cookie('lang', 'kr', {path: '/'});
	}
}

$(function() {
    var lang = $.cookie('lang');
    setLang(lang);

	$('.btn-lang-en').click(function() {
		setLang('en');
	});

	$('.btn-lang-kr').click(function() {
		setLang('kr');
	});
})
