    <div id="map" style="height:400px"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6Gz4LFn1VP4ZV1WckIp0cY4eNF1Mx5Xo&callback=initMap"
    async defer></script>