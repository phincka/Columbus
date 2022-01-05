export default class GoogleMap {
  contactMap() {
    (function ($) {
      function initMap($el) {
        // Find marker elements within map.
        var $markers = $el.find('.marker');

        // Create gerenic map.
        var mapArgs = {
          zoom: $el.data('zoom') || 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#212121"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#212121"
                }
              ]
            },
            {
              "featureType": "administrative",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "administrative.country",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9E9E9E"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "administrative.locality",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#BDBDBD"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#181818"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#1B1B1B"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#2C2C2C"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#8A8A8A"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#373737"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#3C3C3C"
                }
              ]
            },
            {
              "featureType": "road.highway.controlled_access",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#4E4E4E"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "transit",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#000000"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#3D3D3D"
                }
              ]
            }
          ]
        };
        var map = new google.maps.Map($el[0], mapArgs);

        // Add markers.
        map.markers = [];
        $markers.each(function () {
          initMarker($(this), map);
        });

        // Center map based on markers.
        centerMap(map);

        // Return map instance.
        return map;
      }

      function initMarker($marker, map) {

        // Get position from marker.
        var lat = $marker.data('lat');
        var lng = $marker.data('lng');
        var latLng = {
          lat: parseFloat(lat),
          lng: parseFloat(lng)
        };
        // Create marker instance.
        var marker = new google.maps.Marker({
          position: latLng,
          map: map,
          icon: $marker[0].attributes[3].value,
        });

        // Append to reference for later use.
        map.markers.push(marker);
        
        // marker.setVisible(false);

        // If marker contains HTML, add it to an infoWindow.
        if ($marker.html()) {

          // Create info window.
          var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
          });

          // Show info window when marker is clicked.
          google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
          });
        }
      }

      function centerMap(map) {
        // Create map boundaries from all map markers.
        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function (marker) {
          bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
          });
        });

        // Case: Single marker.
        if (map.markers.length == 1) {
          map.setCenter(bounds.getCenter());

          // Case: Multiple markers.
        } else {
          map.fitBounds(bounds);
        }
      }

      // Render maps on page load.
      $(document).ready(function () {
        $('.acf-map').each(function () {
          var map = initMap($(this));
        });
      });

    })(jQuery);

  }


  init(){
    document.querySelector('.acf-map') ? this.contactMap() : null
  }
}