<i>** Klik pada icon untuk melihat detail **<i><br><br>
<div id="mapid" style="height: 500px;"></div>

<script>
    var mymap = L.map('mapid').setView([-6.59162800000001, 106.79328900000003], 14);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',

    }).addTo(mymap);

    var icon_sekolah = L.icon({
        iconUrl: '<?= base_url('icon/sekolah.png') ?>',
        iconSize:     [35, 45], // size of the icon
    });
    <?php foreach ($sekolah as $key => $value) { ?>
        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>],{icon:icon_sekolah}).addTo(mymap)
        .bindPopup("<b>Nama Sekolah: <?= $value->nama_sekolah ?></b><br/>"+
        "Alamat: <?= $value->alamat ?></br>"+
        "Status: <?= $value->status_sekolah ?></br>"+
        "Akreditasi: <?= $value->akreditasi ?></br>");
    <?php } ?>
    

</script>