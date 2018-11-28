(function ( $, x5engine ) {
	var x = x5engine,
		s = x.settings,
		p = s.currentPath,
		b = x.boot;

	b.push(function () {
		x.setupDateTime();
		x.imAccess.showLogout();
		x.utils.autoHeight();
		x.cart.ui.updateWidget();
		x.imGrid.init();
	});
	s.menu = {
		verticalScroll: false,
		orientation: 'vertical'
	};
	b.push(function () {
		x.menu({
			target: '#imMnMn',
			showCurrent: false,
			verticalScroll: false,
			orientation: 'vertical',
			menuHeight: 46,
			menuWidth: 168,
			submenuHeight: 22,
			submenuWidth: 160,
			opacity: 0.8,
			type: 'singleColumn',
			alignment: 'left',
			effect: 'fade'
		});
	});
	b.push(function () { x.utils.imPreloadImages([p + 'menu/index_h.png',p + 'menu/krmne-pelety,partikl_h.png',p + 'menu/---foto--_h.png',p + 'menu/-video-_h.png',p + 'menu/krmitkove--sm-si_h.png',p + 'menu/boilies_h.png',p + 'menu/boostery,dipy,pasty_h.png',p + 'menu/vlh-ene,fluoro,rohlik-extrudy_h.png',p + 'menu/kontakt_h.png',p + 'menu/nakupni-kosik_h.png',p + 'menu/extra-carp,haybusa,ngt_h.png',p + 'menu/--novinky--_h.png',p + 'menu/sub.png',p + 'menu/sub_h.png',p + 'menu/sub_f.png',p + 'menu/sub_m.png',p + 'menu/sub_l.png',p + 'menu/sub_f_h.png',p + 'menu/sub_m_h.png',p + 'menu/sub_l_h.png', p + 'res/imLoad.gif', p + 'res/imClose.png']); });

	// ShowBox
	$.extend(s.imShowBox, {
		'effect' : 'fade',
		'shadow' : '',
		'background' : '#000000',
		'borderWidth' : {
			'top': 1,
			'right': 1,
			'bottom': 1,
			'left': 1
		},
		'borderRadius' : '5px 5px 5px 5px',
		'borderColor' : '#000000 #000000 #000000 #000000',
		'textColor' : '#000000',
		'fontFamily' : 'Tahoma',
		'fontStyle' : 'normal',
		'fontWeight' : 'normal',
		'fontSize' : '9pt',
		'textAlignment' : 'left',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.7,
		'radialBg' : true // Works only in Mozilla Firefox and Google Chrome
	});

	// PopUp
	$.extend(s.imPopUp, {
		'effect' : 'fade',
		'width' : 500,
		'shadow' : '',
		'background' : '#000000',
		'borderRadius' : 10,
		'textColor' : '#000000',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.7
	});

	// Tip
	$.extend(s.imTip, {
		'borderRadius' : 1,
		'arrow' : true,
		'position' : 'bottom',
		'effect' : 'none',
		'showTail' : true
	});

	if (s.imAdv.show) {
		b.push(function () {x.imAdv.imShowAdv(400, 100, 'images/_logo_novinka2014.gif', '', function () { x5engine.utils.location('--novinky--.html', null, false); } ); });
	}
	// Captcha
	var codes = s.imCaptcha.offlineCodes;
	s.loaded = true;
})( _jq, x5engine );