<div class="col-sm-12">
  <div id="map" style="height: 550px;"></div>
  <script>
    var map = L.map('map').setView([-2.582764, 117.704316], 2);

    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    <?php foreach ($globalpem as $value) { ?>
      L.marker([<?php echo $value['lat'] ?>, <?php echo $value['long'] ?>]).addTo(map)
        .bindPopup("Provinsi : <?php echo $value['countryRegion'] ?><br>" +
          "Kasus Positif : <?php echo $value['confirmed'] ?><br>" +
          "Kasus Sembuh : <?php echo $value['recovered'] ?><br>" +
          "Kasus Meninggal : <?php echo $value['deaths'] ?><br>");
    <?php } ?>
  </script>
</div>