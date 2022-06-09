<div class="col-sm-12">
  <div id="map" style="height: 550px;"></div>
  <script>
    var map = L.map('map').setView([-2.582764, 117.704316], 5);

    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    <?php foreach ($lokalpem as $value) { ?>
      L.marker([<?php echo $value['latitude'] ?>, <?php echo $value['longitude'] ?>]).addTo(map)
        .bindPopup("Provinsi : <?php echo $value['Provinsi'] ?><br>" +
          "Kasus Positif : <?php echo $value['Confirmed'] ?><br>" +
          "Kasus Sembuh : <?php echo $value['Recovered'] ?><br>" +
          "Kasus Meninggal : <?php echo $value['Deaths'] ?><br>");
    <?php } ?>
  </script>

</div>