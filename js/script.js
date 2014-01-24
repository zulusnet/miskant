$(function() {
	$('a').focus(function() {
		this.blur();
	});
	SI.Files.stylizeAll();
	slider.init();
	WHCheckCookies();
});
var slider = {
	num : -1,
	cur : 0,
	cr : [],
	al : null,
	at : 10 * 1000,
	ar : true,
	init : function() {

		slider.data = [ {
			"id" : "slide-img-1",
			"desc" : "Jednoroczna sadzonka <br> One-year seedling",
			"url" : "/img/layout/slides/1.jpg"
		}, {
			"id" : "slide-img-2",
			"desc" : "3-letnia plantacja miskanta <br> Three-year plantation",
			"url" : "/img/layout/slides/2.jpg"
		}, {
			"id" : "slide-img-3",
			"desc" : "Żniwa <br> Harvest",
			"url" : "/img/layout/slides/3.jpg"
		}, {
			"id" : "slide-img-4",
			"desc" : "Żniwa część 2 <br> Harvest part 2",
			"url" : "/img/layout/slides/4.jpg"
		}, {
			"id" : "slide-img-5",
			"desc" : "Żniwa część 3 <br> Harvest part 3",
			"url" : "/img/layout/slides/5.jpg"
		}, {
			"id" : "slide-img-6",
			"desc" : "Jednoroczna sadzonka część 2 <br> One-year seedling part 2",
			"url" : "/img/layout/slides/6.jpg"
		} ];

		var d = slider.data;
		slider.num = d.length;
		var pos = Math.floor(Math.random() * d.length);

		for ( var i = 0; i < slider.num; i++) {
			$('#slide-runner').append(
					'<a href="#"><img id="' + d[i].id + '" src="'
							+ d[i].url + '"class="slide" alt="" /></a>');
		}

		$('#slide-runner')
				.append(
						'<div id="slide-controls"><p id="slide-desc" class="text"></p>'
						+ '</div><div id="slide-nav-wrap"><p id="slide-nav"></p></div>');

		for ( var i = 0; i < slider.num; i++) {

			$('#' + d[i].id).css({
				left : ((i - pos) * 1000)
			});
			$('#slide-nav').append(
					'<a id="slide-link-' + i
							+ '" href="#" onclick="slider.slide(' + i
							+ ');return false;" onfocus="this.blur();">'
							+ (i + 1) + '</a>');
		}

		$('img,div#slide-controls', $('div#slide-holder')).fadeIn();
		$('div#slide-nav-wrap').fadeIn();
		slider.text(d[pos]);
		slider.on(pos);
		slider.cur = pos;
		window.setTimeout('slider.auto();', slider.at);
	},
	auto : function() {
		if (!slider.ar)
			return false;

		var next = slider.cur + 1;
		if (next >= slider.num)
			next = 0;
		slider.slide(next);
	},
	slide : function(pos) {
		if (pos < 0 || pos >= slider.num || pos == slider.cur)
			return;

		window.clearTimeout(slider.al);
		slider.al = window.setTimeout('slider.auto();', slider.at);

		var d = slider.data;
		for ( var i = 0; i < slider.num; i++)
			$('#' + d[i].id).stop().animate({
				left : ((i - pos) * 1000)
			}, 1000, 'swing');

		slider.on(pos);
		slider.text(d[pos]);
		slider.cur = pos;
	},
	on : function(pos) {
		$('#slide-nav a').removeClass('on');
		$('#slide-nav a#slide-link-' + pos).addClass('on');
	},
	text : function(di) {
		slider.cr['b'] = di.desc;
		slider.ticker('#slide-desc', di.desc, 0, 'b');
	},
	ticker : function(el, text, pos, unique) {
		if (slider.cr[unique] != text)
			return false;

		ctext = text.substring(0, pos) + (pos % 2 ? '-' : '_');
		$(el).html(ctext);

		if (pos == text.length)
			$(el).html(text);
		else
			window.setTimeout('slider.ticker("' + el + '","' + text + '",'
					+ (pos + 1) + ',"' + unique + '");', 30);
	}
};
// STYLING FILE INPUTS 1.0 | Shaun Inman <http://www.shauninman.com/> |
// 2007-09-07
if (!window.SI) {
	var SI = {};
};
SI.Files = {
	htmlClass : 'SI-FILES-STYLIZED',
	fileClass : 'file',
	wrapClass : 'cabinet',

	fini : false,
	able : false,
	init : function() {
		this.fini = true;
	},
	stylize : function(elem) {
		if (!this.fini) {
			this.init();
		}
		;
		if (!this.able) {
			return;
		}
		;

		elem.parentNode.file = elem;
		elem.parentNode.onmousemove = function(e) {
			if (typeof e == 'undefined')
				e = window.event;
			if (typeof e.pageY == 'undefined' && typeof e.clientX == 'number'
					&& document.documentElement) {
				e.pageX = e.clientX + document.documentElement.scrollLeft;
				e.pageY = e.clientY + document.documentElement.scrollTop;
			}
			;
			var ox = oy = 0;
			var elem = this;
			if (elem.offsetParent) {
				ox = elem.offsetLeft;
				oy = elem.offsetTop;
				while (elem = elem.offsetParent) {
					ox += elem.offsetLeft;
					oy += elem.offsetTop;
				}
				;
			}
			;
		};
	},
	stylizeAll : function() {
		if (!this.fini) {
			this.init();
		}
		;
		if (!this.able) {
			return;
		}
		;
	}
};

function WHCreateCookie(name, value, days) {
    var date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000));
    var expires = "; expires=" + date.toGMTString();
	document.cookie = name+"="+value+expires+"; path=/";
}
function WHReadCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

function WHCheckCookies() {
    if(WHReadCookie('cookies_accepted') != 'T') {
        var message_container = document.createElement('div');
        message_container.id = 'cookies-message-container';
        var html_code = '<div id="cookies-message" style="padding: 10px 0px; font-size: 14px; line-height: 22px; border-bottom: 1px solid #D3D0D0; text-align: center; position: fixed; top: 0px; background-color: #EFEFEF; width: 100%; z-index: 999;">Strona korzysta z plików cookies w celu realizacji usług zgodnie z <a href="http://www.miskantolbrzymi.com.pl/cookies-policy">Polityką Plików Cookies</a>. Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce.<a href="javascript:WHCloseCookiesWindow();" id="accept-cookies-checkbox" name="accept-cookies" style="background-color: #00AFBF; padding: 5px 10px; color: #FFF; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; display: inline-block; margin-left: 10px; text-decoration: none; cursor: pointer;">Zamknij</a></div>';
        message_container.innerHTML = html_code;
        document.body.appendChild(message_container);
    }
}

function WHCloseCookiesWindow() {
    WHCreateCookie('cookies_accepted', 'T', 365);
    document.getElementById('cookies-message-container').removeChild(document.getElementById('cookies-message'));
}