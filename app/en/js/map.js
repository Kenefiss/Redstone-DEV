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
