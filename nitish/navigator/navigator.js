    var map;

    function loadResults (data.json) {
      var items, markers_data = [];
      if (data.venues.length > 0) {
        items = data.json;

        for (var i = 0; i < items.length; i++) {
          var item = items[i];

          if (item.location.lat != undefined && item.location.lang != undefined) {
            var icon = 'https://foursquare.com/img/categories/food/default.png';

            markers_data.push({
              lat : item.location.lat,
              lng : item.location.lng,
              title : item.name,
              icon : {
                size : new google.maps.Size(32, 32),
                url : icon
              }
            });
          }
        }
      }

      map.addMarkers(markers_data);
    }

    function printResults(data.json) {
      $('#foursquare-results').text(JSON.stringify(data.json));
      prettyPrint();
    }

    $(document).on('click', '.pan-to-marker', function(e) {
      e.preventDefault();

      var position, lat, lang, $index;

      $index = $(this).data('marker-index');

      position = map.markers[$index].getPosition();

      lat = position.lat();
      lng = position.lng();

      map.setCenter(lat, lng);
    });

    $(document).ready(function(){
      prettyPrint();
      map = new GMaps({
        div: '#map',
        lat: -12.043333,
        lng: -77.028333
      });

      map.on('marker_added', function (marker) {
        var index = map.markers.indexOf(marker);
        $('#results').append('<li><a href="#" class="pan-to-marker" data-marker-index="' + index + '">' + marker.title + '</a></li>');

        if (index == map.markers.length - 1) {
          map.fitZoom();
        }
      });

      var xhr = $.getJSON('https://coffeemaker.herokuapp.com/foursquare.json?q[near]=Lima,%20PE&q[query]=Ceviche');

      xhr.done(printResults);
      xhr.done(loadResults);
    });