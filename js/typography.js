// (function() {
// 	if (sessionStorage.fonts) {
// 		document.documentElement.classList.add('wf-active');
// 	}
// })();

WebFontConfig = {
	google: { families: [ 'Lato:400,300,700,100,300italic&subset=latin,latin-ext' ] },
	active: function() {
		sessionStorage.fonts = true;
	}
};

(function(d) {
	var wf = d.createElement('script'), s = d.scripts[0];
	wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
	wf.async = true;
	s.parentNode.insertBefore(wf, s);
})(document);
