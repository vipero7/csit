	function initMap() {
		var location = {lat: 27.691520, lng: 85.342049}

	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 4,
		center: location
	});
	var marker = new google.maps.Marker({
		position: location,
		map: map
	})
}