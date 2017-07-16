<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvPwt41hrJ0Mrn79-pqM3Tor4ciY5YcFI&libraries=places"></script>
<script>
	var address = "Alcantara 99 las condes";
	var latitude;
	var longitude;
	$.ajax({
	  url:"http://maps.googleapis.com/maps/api/geocode/json?address="+address+"&sensor=false",
	  type: "POST",
	  success:function(res){
		 latitude = (res.results[0].geometry.location.lat);
		 longitude = (res.results[0].geometry.location.lng);
		 initMap(latitude, longitude);
	  }
	});
	var map;
	var infowindow;

	function initMap(latitude, longitude) {
		var pyrmont = {lat: latitude, lng: longitude};
		console.log(pyrmont);

		map = new google.maps.Map(document.getElementById('map'), {
			center: pyrmont,
			zoom: 15
		});

		infowindow = new google.maps.InfoWindow();
		var service = new google.maps.places.PlacesService(map);
		service.nearbySearch({
			location: pyrmont,
			radius: 500,
			type: ['store']
		}, callback);
	}

	function callback(results, status) {
		if (status === google.maps.places.PlacesServiceStatus.OK) {
			for (var i = 0; i < results.length; i++) {
				createMarker(results[i]);
			}
		}
	}

	function createMarker(place) {
		var placeLoc = place.geometry.location;
		var marker = new google.maps.Marker({
			map: map,
			position: place.geometry.location
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(place.name);
			infowindow.open(map, this);
		});
	}


</script>

<div id="map" style="height:300px;"></div>