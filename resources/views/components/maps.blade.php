<div id="col col-12">
        <div id="map" style="height:400px"></div>
</div>
<div id="col col-12">
    &nbsp;    &nbsp;

</div>


    <script>
      var map;
      var marker;
      
      function addMarker(peta,posisi){
        //   chek marker 
          if(marker){
            //   pindahkan marker
              marker.setPosition(posisi);
          }else{
            //   buat marker baru
            marker = new google.maps.Marker({
                position : posisi,
                map : peta
            })
          }
          document.getElementById('lat').value = posisi.lat();
            document.getElementById('lng').value = posisi.lng();
      }

      function initMap(){
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8,
            mapTypeId: 'terrain'
          });
        map.addListener('click', function(e) {
            addMarker(map,e.latLng);
        });
      }
      // jalankan google maps
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6Gz4LFn1VP4ZV1WckIp0cY4eNF1Mx5Xo&callback=initMap"
    async defer></script>