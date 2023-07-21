var maps = [],
	ibSize = (window.innerWidth < 768) ? 300 : 490,
	mapStyles = [{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#333333"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}],
	ibOptions = {
		alignBottom: true,
		content: 'text',
		pixelOffset:  (window.innerWidth < 768) ? new google.maps.Size(-150, -35) : new google.maps.Size(-245, -35),
		boxStyle: {
			width: ibSize+'px'
		},
		closeBoxMargin: "0",
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

	var lat = mapInst.getAttribute('data-lat'),
		lng = mapInst.getAttribute("data-lng"),
		myLatlng = new google.maps.LatLng(lat, lng),
		setZoom = parseInt(mapInst.getAttribute("data-zoom")),
		mapId = mapInst.getAttribute('id');

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

	//add marker on map
	const mapMarker = document.querySelectorAll('.marker[data-rel="' + mapId + '"]');
	mapMarker.forEach(el => {
		addMarker(
			mapId,
			new google.maps.LatLng(
				el.getAttribute('data-lat'),
				el.getAttribute('data-lng')
			),
			el,
			el.getAttribute('data-string'),
			el.getAttribute('data-image')
		);
	});

	//close infobox if click on map
	maps[mapId].map.addListener('click', function() {
		ib.close();
	});

}

//initialize map
const mapBlock = document.querySelectorAll('.map');
mapBlock.forEach(map => {
	initialize(map);
});
