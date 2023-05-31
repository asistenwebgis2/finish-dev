<!-- <h1>Hello World</h1> -->
<div class="content">
    <div id="map" style="width: 100%; height: 530px; color:black;"></div>
</div>
<script>
    var rs = new L.LayerGroup();
    var puskesmas = new L.LayerGroup();
    var klinik = new L.LayerGroup();
    var jalan = new L.LayerGroup();
    var admin = new L.LayerGroup();
    var tenkes = new L.LayerGroup();

    var map = L.map('map', {
        center: [-1.7912604466772375, 116.42311966554416],
        zoom: 5,
        zoomControl: false,
        layers: []
    });
    var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 30,
        attribution: 'Latihan Web GIS'
    }).addTo(map);

    // 7.1 Menambah basemap ESRI
    var Esri_NatGeoWorldMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
        maxZoom: 16
    });

    // 7.1.2 Menambah basemap Google
    var GoogleMaps = new
    L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        opacity: 1.0,
        attribution: 'Latihan Web GIS'
    });
    var GoogleRoads = new
    L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
        opacity: 1.0,
        attribution: 'Latihan Web GIS'
    });

    // 5.2.1 Install leaflet-groupedlayercontrol || 7.1 Menambah basemap ESRI || 7.1.2 Menambah basemap Google
    var baseLayers = {
        'Google Satellite Hybrid': GoogleSatelliteHybrid,
        'Esri_NatGeoWorldMap': Esri_NatGeoWorldMap,
        'GoogleMaps': GoogleMaps,
        'GoogleRoads': GoogleRoads
    };

    var groupedOverlays = {
        "Peta Dasar": {
            'Batas Administrasi': admin,
            'Tenaga Kesehatan': tenkes
        },
        "Fasilitas Kesehatan": {
            'Rumah Sakit': rs,
            'Puskesmas': puskesmas,
            'Klinik': klinik,
        },
        "Jaringan Jalan": {
            'Jalan': jalan
        }
    };

    L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);

    // 5.2.2 Install leaflet-groupedlayercontrol
    var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
    var osmAttrib = 'Map data &copy; OpenStreetMap contributors';
    var osm2 = new L.TileLayer(osmUrl, {
        minZoom: 0,
        maxZoom: 13,
        attribution: osmAttrib
    });
    var rect1 = {
        color: "#ff1100",
        weight: 3
    };
    var rect2 = {
        color: "#0000AA",
        weight: 1,
        opacity: 0,
        fillOpacity: 0
    };
    var miniMap = new L.Control.MiniMap(osm2, {
        toggleDisplay: true,
        position: "bottomleft",
        aimingRectOptions: rect1,
        shadowRectOptions: rect2
    }).addTo(map);

    // 5.2.3 Install Leaflet control geocoder
    L.Control.geocoder({
        position: "topleft",
        collapsed: true
    }).addTo(map);

    // 5.2.4 Install koordinat
    /* GPS enabled geolocation control set to follow the user's location */
    var locateControl = L.control.locate({
        position: "topleft",
        drawCircle: true,
        follow: true,
        setView: true,
        keepCurrentZoomLevel: true,
        markerStyle: {
            weight: 1,
            opacity: 0.8,
            fillOpacity: 0.8
        },
        circleStyle: {
            weight: 1,
            clickable: false
        },
        icon: "fa fa-location-arrow",
        metric: false,
        strings: {
            title: "My location",
            popup: "You are within {distance} {unit} from this point",
            outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
        },
        locateOptions: {
            maxZoom: 18,
            watch: true,
            enableHighAccuracy: true,
            maximumAge: 10000,
            timeout: 10000
        }
    }).addTo(map);

    // 5.2.5 Install leaflet Control ZoomBar
    var zoom_bar = new L.Control.ZoomBar({
        position: 'topleft'
    }).addTo(map);

    // 5.2.6. Install Leaflet.Coordinates
    L.control.coordinates({
        position: "bottomleft",
        decimals: 2,
        decimalSeperator: ",",
        labelTemplateLat: "Latitude: {y}",
        labelTemplateLng: "Longitude: {x}"
    }).addTo(map);
    /* scala */
    L.control.scale({
        metric: true,
        position: "bottomleft"
    }).addTo(map);

    // 5.2.7 Install arah mata angin
    var north = L.control({
        position: "bottomright"
    });
    north.onAdd = function(map) {
        var div = L.DomUtil.create("div", "info legend");
        div.innerHTML = '<img src="<?= base_url() ?>assets/direction.png"style=width:100px;>';
        return div;
    }
    north.addTo(map);

    // 7.2.1.1 Menampilkan data titik
    $.getJSON("<?= base_url() ?>assets/Rumah Sakit.geojson", function(data) {
        var ratIcon = L.icon({
            iconUrl: '<?= base_url() ?>assets/pngegg.png',
            iconSize: [12, 10]
        });
        L.geoJson(data, {
            pointToLayer: function(feature, latlng) {
                var marker = L.marker(latlng, {
                    icon: ratIcon
                });
                marker.bindPopup(feature.properties.Nama_Rumah);
                return marker;
            }
        }).addTo(rs);
    })

    $.getJSON("<?= base_url() ?>assets/Puskesmas.geojson", function(data) {
        var ratIcon = L.icon({
            iconUrl: '<?= base_url() ?>assets/pngegg (1).png',
            iconSize: [12, 10]
        });
        L.geoJson(data, {
            pointToLayer: function(feature, latlng) {
                var marker = L.marker(latlng, {
                    icon: ratIcon
                });
                marker.bindPopup(feature.properties.Nama);
                return marker;
            }
        }).addTo(puskesmas);
    });

    $.getJSON("<?= base_url() ?>assets/Klinik.geojson", function(data) {
        var ratIcon = L.icon({
            iconUrl: '<?= base_url() ?>assets/pngegg_4.png',
            iconSize: [12, 10]
        });
        L.geoJson(data, {
            pointToLayer: function(feature, latlng) {
                var marker = L.marker(latlng, {
                    icon: ratIcon
                });
                marker.bindPopup(feature.properties.Nama);
                return marker;
            }
        }).addTo(klinik);
    });

    // 7.3.1 Menampilkan data garis
    $.getJSON("<?= base_url() ?>/assets/Jalan.geojson", function(kode) {
        L.geoJson(kode, {
            style: function(feature) {
                var color,
                    kode = feature.properties.kode;
                if (kode < 2) color = "#ff7e07";
                else if (kode > 0) color = "#ff7e07";
                else color = "#ff7e07"; // no data
                return {
                    color: "#ff7e07",
                    weight: 1,
                    color: color,
                    fillOpacity: .8
                };
            },
            onEachFeature: function(feature, layer) {
                layer.bindPopup()
            }
        }).addTo(jalan);
    });

    // 7.4.1 Menambah data poligon
    $.getJSON("<?= base_url() ?>/assets/Administrasi.geojson", function(Kode) {
        L.geoJson(Kode, {
            style: function(feature) {
                var fillColor,
                    Kode = feature.properties.Kode;
                if (Kode > 17) fillColor = "#006837";
                else if (Kode > 16) fillColor = "#8c510a"
                else if (Kode > 15) fillColor = "#01665e"
                else if (Kode > 14) fillColor = "#e41a1c"
                else if (Kode > 13) fillColor = "#636363"
                else if (Kode > 12) fillColor = "#762a83"
                else if (Kode > 11) fillColor = "#1b7837"
                else if (Kode > 10) fillColor = "#d53e4f"
                else if (Kode > 9) fillColor = "#67001f"
                else if (Kode > 8) fillColor = "#c994c7"
                else if (Kode > 7) fillColor = "#fdbb84"
                else if (Kode > 6) fillColor = "#dd1c77"
                else if (Kode > 5) fillColor = "#3182bd"
                else if (Kode > 4) fillColor = "#f03b20"
                else if (Kode > 3) fillColor = "#31a354";
                else if (Kode > 2) fillColor = "#78c679";
                else if (Kode > 1) fillColor = "#c2e699";
                else if (Kode > 0) fillColor = "#ffffcc";
                else fillColor = "#f7f7f7"; // no data
                return {
                    color: "#ffffcc",
                    weight: 1,
                    fillColor: fillColor,
                    fillOpacity: .6
                };
            },
            onEachFeature: function(feature, layer) {
                layer.bindPopup(feature.properties.KECAMATAN)
            }
        }).addTo(admin);
    });

    $.getJSON("<?= base_url() ?>/assets/Tenaga Kesehatan.geojson", function(Kode) {
        L.geoJson(Kode, {
            style: function(feature) {
                var fillColor,
                    Kode = feature.properties.Kode;
                if (Kode > 3) fillColor = "#f20707";
                else if (Kode > 2) fillColor = "#f20707";
                else if (Kode > 1) fillColor = "#f28585";
                else if (Kode > 0) fillColor = "#ffffcc";
                else fillColor = "#f7f7f7"; // no data
                return {
                    color: "#ffffcc",
                    weight: 1,
                    fillColor: fillColor,
                    fillOpacity: .6
                };
            },
            onEachFeature: function(feature, layer) {
                layer.bindPopup(feature.properties.Kelas)
            }
        }).addTo(tenkes);
    });

    // 8 Membuat legenda
    const legend = L.control.Legend({
            position: "bottomright",
            title: "Legenda",
            collapsed: true,
            symbolWidth: 20,
            opacity: 1,
            column: 1,
            legends: [{
                label: "Rumah Sakit",
                type: "image",
                url: "<?= base_url() ?>/assets/pngegg.png",
            }, {
                label: "Puskesmas",
                type: "image",
                url: "<?= base_url() ?>/assets/pngegg (1).png",
            }, {
                label: "Klinik",
                type: "image",
                url: "<?= base_url() ?>/assets/pngegg_4.png",
            }, {
                label: "Jalan",
                type: "image",
                url: "<?= base_url() ?>/assets/Jalan.png"
            }, {
                title: "Chloroplet"
            }, {
                label: "Tenkes Rendah",
                font: 10,
                type: "polygon",
                sides: 3,
                color: "#ffffcc",
                fillColor: "#ffffcc",
                weight: 1
            }, {
                label: "Tenkes Sedang",
                font: 10,
                type: "polygon",
                sides: 3,
                color: "#f28585",
                fillColor: "#f28585",
                weight: 1
            }, {
                label: "Tenkes Tinggi",
                font: 10,
                type: "polygon",
                sides: 3,
                color: "#f20707",
                fillColor: "#f20707",
                weight: 1
            }]
        })
        .addTo(map);
</script>