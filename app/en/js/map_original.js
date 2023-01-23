jQuery(function ($) {

	var maps = [],
		mapStyles = [{"featureType":"all","elementType":"all","stylers":[{"saturation":"32"},{"lightness":"-3"},{"visibility":"on"},{"weight":"1.18"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"saturation":"-70"},{"lightness":"14"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"saturation":"100"},{"lightness":"-14"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":"12"}]}],
		ibOptions = {
			alignBottom: true,
			content: 'text',
			pixelOffset: new google.maps.Size(-150, -32),
			boxStyle: {
					width: "300px"
			},
			closeBoxMargin: "5px 5px 5px 5px",
			closeBoxURL: 'img/icon-close.png'
		},
		ib = new InfoBox(ibOptions);

	function Map(id, mapOptions) {
		this.map = new google.maps.Map(document.getElementById(id), mapOptions);
		this.markers = [];
		this.infowindows = [];
		this.clusters = null;
	}

	function addMarker(mapId, location, index, string, image) {
		maps[mapId].markers[index] = new google.maps.Marker({
			position: location,
			map: maps[mapId].map,
			icon: {
				url: image
			}
		});

		var content = '<div class="info-box">' + string + '</div>';

		google.maps.event.addListener(maps[mapId].markers[index], 'click', function () {
			ib.setContent(content);
			ib.setPosition(location);
			ib.open(maps[mapId].map);
		});

	}

	function initialize(mapInst) {

		var lat = mapInst.attr("data-lat"),
			lng = mapInst.attr("data-lng"),
			myLatlng = new google.maps.LatLng(lat, lng),
			setZoom = parseInt(mapInst.attr("data-zoom")),
			mapId = mapInst.attr('id');

		var mapOptions = {
			zoom: setZoom,
			disableDefaultUI: true,
			scrollwheel: false,
			zoomControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.LARGE,
				position: google.maps.ControlPosition.RIGHT_BOTTOM
			},
			streetViewControl: false,
			streetViewControlOptions: {
				position: google.maps.ControlPosition.LEFT_BOTTOM
			},
			fullscreenControl: false,
			center: myLatlng,
			styles: mapStyles
		};

		maps[mapId] = new Map(mapId, mapOptions);

		$('.marker[data-rel="' + mapId + '"]').each(function (i, el) {
			addMarker(
				mapId,
				new google.maps.LatLng(
					$(this).attr('data-lat'),
					$(this).attr('data-lng')
				),
				i,
				$(this).attr('data-string'),
				$(this).attr('data-image')
			);
		});

	}

	$('.map').each(function () {
		initialize($(this));
	});

});