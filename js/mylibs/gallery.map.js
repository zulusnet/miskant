function galleryInit(lang) {
	var center = new google.maps.LatLng(53.534594, 17.56691);
	var myOptions = {
		zoom : 9,
		center : center,
		mapTypeId : google.maps.MapTypeId.ROADMAP
	};
	var plant1 = new google.maps.LatLng(53.601877, 17.652225);
	var plant2 = new google.maps.LatLng(53.423855, 17.399483);
	var corp = new google.maps.LatLng(53.457323, 17.543008);
	var doranImage = '/img/icons/gm_pin_20.png';
	var galleryMap = new google.maps.Map(
			document.getElementById("gallery_map"), myOptions);

	if (lang == "ru") {
		var descMarker1 = '<div class="marker">'
				+ '<h1 class="marker_header">20-гектарная плантация Мискантуса гигантского</h1>'
				+ '<p class="marker_body">Производительность плантации оцениваем на 95-98%</p>'
				+ '</div>';
		var infowindow1 = new google.maps.InfoWindow({
			content : descMarker1
		});
		var descMarker2 = '<div class="marker">'
				+ '<h1 class="marker_header">2-гектаровая плантация Мискантуса гигантского</h1>'
				+ '<p class="marker_body">Производительность плантации оцениваем на 90-92%</p>'
				+ '</div>';
		var infowindow2 = new google.maps.InfoWindow({
			content : descMarker2
		});
		var descMarker3 = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">Место нахождения фирмы</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kościuszki 22<br>89-400 Sępólno Krajeńskie</p>'
				+ '</div>';
		var infowindow3 = new google.maps.InfoWindow({
			content : descMarker3
		});
		var descMarker3 = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">Место нахождения фирмы</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kościuszki 22<br>89-400 Sępólno Krajeńskie</p>'
				+ '</div>';
		var infowindow3 = new google.maps.InfoWindow({
			content : descMarker3
		});

		var marker1 = new google.maps.Marker({
			position : plant1,
			map : galleryMap,
			title : "20-гектарная плантация Мискантуса"
		});
		var marker2 = new google.maps.Marker({
			position : plant2,
			map : galleryMap,
			title : "2-гектаровая плантация Мискантуса"
		});
		var marker3 = new google.maps.Marker({
			position : corp,
			icon : doranImage,
			map : galleryMap,
			title : "Место нахождения фирмы DORAN"
		});
	} else if (lang == "en") {
		var descMarker1 = '<div class="marker">'
				+ '<h1 class="marker_header">20-hectare plantation of Miscanthus Giganteus</h1>'
				+ '<p class="marker_body">Adroitness plantation estimate of 95-98%</p>'
				+ '</div>';
		var infowindow1 = new google.maps.InfoWindow({
			content : descMarker1
		});
		var descMarker2 = '<div class="marker">'
				+ '<h1 class="marker_header">2-hectare plantation of Miscanthus Giganteus</h1>'
				+ '<p class="marker_body">Adroitness plantation estimate of 90-92%</p>'
				+ '</div>';
		var infowindow2 = new google.maps.InfoWindow({
			content : descMarker2
		});
		var descMarker3 = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">DORAN’s headquarter</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kosciuszki 22<br>89-400 Sepolno Krajenskie</p>'
				+ '</div>';
		var infowindow3 = new google.maps.InfoWindow({
			content : descMarker3
		});

		var marker1 = new google.maps.Marker({
			position : plant1,
			map : galleryMap,
			title : "20-hectare plantation"
		});
		var marker2 = new google.maps.Marker({
			position : plant2,
			map : galleryMap,
			title : "2-hectare plantation"
		});
		var marker3 = new google.maps.Marker({
			position : corp,
			icon : doranImage,
			map : galleryMap,
			title : "DORAN’s headquarter"
		});
	} else if (lang == "de") {
		var descMarker1 = '<div class="marker">'
				+ '<h1 class="marker_header">20-Ha des Miscanthus X Giganteus Plantage.</h1>'
				+ '<p class="marker_body">Wir schätzen die Effizienz auf  95-98%.</p>'
				+ '</div>';
		var infowindow1 = new google.maps.InfoWindow({
			content : descMarker1
		});
		var descMarker2 = '<div class="marker">'
				+ '<h1 class="marker_header">2-Ha des Miscanthus X Giganteus Plantage.</h1>'
				+ '<p class="marker_body">Wir schätzen die Effizienz auf 90-92%.</p>'
				+ '</div>';
		var infowindow2 = new google.maps.InfoWindow({
			content : descMarker2
		});
		var descMarker3 = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">Firmensitz</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kosciuszki 22<br>89-400 Sepolno Krajenskie</p>'
				+ '</div>';
		var infowindow3 = new google.maps.InfoWindow({
			content : descMarker3
		});

		var marker1 = new google.maps.Marker({
			position : plant1,
			map : galleryMap,
			title : "20-ha-Plantage"
		});
		var marker2 = new google.maps.Marker({
			position : plant2,
			map : galleryMap,
			title : "2-ha-Plantage"
		});
		var marker3 = new google.maps.Marker({
			position : corp,
			icon : doranImage,
			map : galleryMap,
			title : "Firmensitz"
		});
	} else {
		var descMarker1 = '<div class="marker">'
				+ '<h1 class="marker_header">20-ha plantacja Miskanta olbrzymiego</h1>'
				+ '<p class="marker_body">Udatność plantacji oceniamy na 95-98%</p>'
				+ '</div>';
		var infowindow1 = new google.maps.InfoWindow({
			content : descMarker1
		});
		var descMarker2 = '<div class="marker">'
				+ '<h1 class="marker_header">2-ha plantacja Miskanta olbrzymiego</h1>'
				+ '<p class="marker_body">Udatność plantacji oceniamy na 90-92%</p>'
				+ '</div>';
		var infowindow2 = new google.maps.InfoWindow({
			content : descMarker2
		});
		var descMarker3 = '<div class="marker" style="height: 100px">'
				+ '<h1 class="marker_header">Siedziba firmy</h1>'
				+ '<p class="marker_body"><strong>Andrzej Rogulski DORAN</strong><br>ul. Kościuszki 22<br>89-400 Sępólno Krajeńskie</p>'
				+ '</div>';
		var infowindow3 = new google.maps.InfoWindow({
			content : descMarker3
		});

		var marker1 = new google.maps.Marker({
			position : plant1,
			map : galleryMap,
			title : "20-ha plantacja Miskanta"
		});
		var marker2 = new google.maps.Marker({
			position : plant2,
			map : galleryMap,
			title : "2-ha plantacja Miskanta"
		});
		var marker3 = new google.maps.Marker({
			position : corp,
			icon : doranImage,
			map : galleryMap,
			title : "Siedziba firmy DORAN"
		});
	}

	google.maps.event.addListener(marker1, 'click', function() {
		infowindow1.open(galleryMap, marker1);
	});
	google.maps.event.addListener(marker2, 'click', function() {
		infowindow2.open(galleryMap, marker2);
	});
	google.maps.event.addListener(marker3, 'click', function() {
		infowindow3.open(galleryMap, marker3);
	});
}