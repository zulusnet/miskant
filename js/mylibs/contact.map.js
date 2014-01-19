function contactInit(lang) {
	var center = new google.maps.LatLng(53.457323, 17.543008);
	var myOptions = {
		zoom : 14,
		center : center,
		mapTypeId : google.maps.MapTypeId.ROADMAP
	};
	var corp = new google.maps.LatLng(53.457323, 17.543008);
	var doranImage = 'img/icons/gm_pin_20.png';
	var contactMap = new google.maps.Map(
			document.getElementById("contact_map"), myOptions);

	if (lang == "ru") {
		var descMarker = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">Место нахождения фирмы</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kościuszki 22<br>89-400 Sępólno Krajeńskie</p>'
				+ '</div>';

	} else if (lang == "en") {
		var descMarker = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">DORAN’s headquarter</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kosciuszki 22<br>89-400 Sepolno Krajenskie</p>'
				+ '</div>';

	} else if (lang == "de") {
		var descMarker = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">DORAN Firmasitz</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kosciuszki 22<br>89-400 Sepolno Krajenskie</p>'
				+ '</div>';

	} else {
		var descMarker = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">Siedziba firmy</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kościuszki 22<br>89-400 Sępólno Krajeńskie</p>'
				+ '</div>';

	}
	var infowindow = new google.maps.InfoWindow({
		content : descMarker
	});

	if (lang == "ru") {
		var marker = new google.maps.Marker({
			position : corp,
			icon : doranImage,
			map : contactMap,
			title : "Место нахождения фирмы DORAN"
		});
	} else if (lang == "en") {
		var marker = new google.maps.Marker({
			position : corp,
			icon : doranImage,
			map : contactMap,
			title : "DORAN’s headquarter"
		});
	} else if (lang == "de") {
		var marker = new google.maps.Marker({
			position : corp,
			icon : doranImage,
			map : contactMap,
			title : "DORAN Firmasitz"
		});
	} else {
		var marker = new google.maps.Marker({
			position : corp,
			icon : doranImage,
			map : contactMap,
			title : "Siedziba firmy DORAN"
		});
	}

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(contactMap, marker);
	});
}