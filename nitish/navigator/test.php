<html>
 <head>
 </head>
  <body>
  <script src="js/jquery.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  
  <script>
  
	x= navigator.geolocation;
	x.getCurrentPosition(function(position){;
	
		
		// fetch the coordinates
		
		var mylat = position.coords.latitude;
		var mylong = position.coords.longitude;
		
		// google-API-ready latitude and longitude string
		
		var coords = new google.maps.LatLng(mylat, mylong);
	})
	
</script>

 $.ajax({
            type: "POST",
            url: "locations-ajax.php",
            data: {
                var mylat = position.coords.latitude;
		        var mylong = position.coords.longitude;
				
            },
            
        })



</body>
</html>
