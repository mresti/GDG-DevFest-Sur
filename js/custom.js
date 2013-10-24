/* Flex Slider */

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: true,
    pauseOnHover: true,
    slideshowSpeed: 15000
  });

/* Location map */

	var dir = "Avenida Media Azhara. Rectorado de la UCO"; var geocoder, map;
function codeAddress(address) {
    geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        var myOptions = {
        zoom: 17,
        center: results[0].geometry.location,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"), myOptions);

        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            title: 'Rectorado de la Universidad de Córdoba',
               icon: new google.maps.MarkerImage('//maps.gstatic.com/mapfiles/mobile/mobileimgs2.png',
                                                    new google.maps.Size(22,22),
                                                    new google.maps.Point(0,18),
                                                    new google.maps.Point(11,11)),
            panControl: false,
            streetViewControl: false
        });

            var popup = new google.maps.InfoWindow({
        content: 'Rectorado UCO'
        , position: map.getCenter()
    });
 
    	popup.open(map);
      }
    });
}
	codeAddress(dir);

});

