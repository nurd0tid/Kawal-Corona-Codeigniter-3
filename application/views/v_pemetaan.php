<div class="col-sm-12">
  <div id="mapid" style="height: 550px;"></div>
  <script>
  var mymap = L.map('mapid').setView([-2.582764, 117.704316], 5);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
  }).addTo(mymap);

  <?php foreach ($pemetaan['features'] as $key => $value) { ?>
    L.marker([<?php echo $value['geometry']['y'] ?>, <?php echo $value['geometry']['x'] ?>]).addTo(mymap)
    .bindPopup("Provinsi : <?php echo $value['attributes']['Provinsi'] ?><br>"+
    "Kasus Positif : <?php echo $value['attributes']['Kasus_Posi'] ?><br>"+
    "Kasus Sembuh : <?php echo $value['attributes']['Kasus_Semb'] ?><br>"+
    "Kasus Meninggal : <?php echo $value['attributes']['Kasus_Meni'] ?><br>");
    <?php } ?>
    </script>
  </div>
