<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <!-- Add your metadata here -->

    <!-- Judul pada tab browser -->
    <title>SIMBA</title>

    <!-- Tab browser icon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/simba2.png">

    <!-- Leaflet CSS Library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Montserrat:wght@500&display=swap"
        rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tab browser icon -->
    <link rel="icon" type="image/x-icon"
        href="assets/img/logo/simba2.png">

    <!-- Search CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-search/leaflet-search.css" />

    <!-- Geolocation CSS Library for Plugin -->
    <link rel="stylesheet"
        href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css" />

    <!-- Leaflet Mouse Position CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.css" />

    <!-- Leaflet Measure CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-measure/leaflet-measure.css" />

    <!-- EasyPrint CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-easyprint/easyPrint.css" />

    <!-- Marker Cluster -->
    <link rel="stylesheet" href="assets/plugins/leaflet-markercluster/MarkerCluster.css">
    <link rel="stylesheet" href="assets/plugins/leaflet-markercluster/MarkerCluster.Default.css">

    <!--Routing-->
    <link rel="stylesheet" href="assets/plugins/leaflet-routing/leaflet-routing-machine.css" />

    <!-- Search JavaScript Library -->
    <script src="assets/plugins/leaflet-search/leaflet-search.js"></script>

    <!-- Geolocation Javascript Library -->
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>

    <!-- Leaflet Mouse Position JavaScript Library -->
    <script src="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.js"></script>

    <!-- Leaflet Measure JavaScript Library -->
    <script src="assets/plugins/leaflet-measure/leaflet-measure.js"></script>

    <!-- Marker Cluster -->
    <script src="assets/plugins/leaflet-markercluster/leaflet.markercluster.js"></script>
    <script src="assets/plugins/leaflet-markercluster/leaflet.markercluster-src.js"></script>

    <!--Routing-->
    <script src="assets/plugins/leaflet-routing/leaflet-routing-machine.js"></script>
    <script src="assets/plugins/leaflet-routing/leaflet-routing-machine.min.js"></script>

    <!-- EasyPrint JavaScript Library -->
    <script src="assets/plugins/leaflet-easyprint/leaflet.easyPrint.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Tampilan peta fullscreen */
        html,
        body,
        #map {
            height: 30%;
            width: 100%;
            margin: 0px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #cbb990">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-top-menu shadow mb-0s"
        style="background-color: rgb(193, 165, 63)">
        <div class="container">
                <a class="navbar-brand" href="/">
                    <img src='assets/img/logo/simba2.png' alt="" width="60" height="50"> WebGIS Wisata</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><i class="fa-solid fa-house-chimney"></i></i>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="destinasi.html"><i class="fa-solid fa-location-dot"></i>
                                Destination</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-map-location-dot"></i> Maps</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="petawisata.php">Peta Wisata</a></li>
                                <li><a class="dropdown-item" href="petarute.html">Peta Rute</a></li>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.html"><i class="fa-solid fa-address-book"></i> Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <center>
                    <h2>Persebaran Wisata Manggarai Barat</h2>
                </center>
            </div>
            <div class="card-body">
                <div id="map" style="height: 500px;"></div>
            </div>
        </div>
    </div>
  
    
    <!-- Footer -->
  <div class="text-center">
    <img src="assets/img/logo/simba2.png" class="rounded">
            <h5>WebGIS Wisata</h5>
            <p>Kabupaten Manggarai Barat</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="https://www.instagram.com/wulanindahs_/" class="text-dark me-3"><i
                    class="fab fa-instagram fa-2x"></i></a>
            <a href="https://twitter.com/escontonglw" class="text-dark me-3"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="https://www.tiktok.com/@gasukajamu" class="text-dark me-3"><i class="fab fa-tiktok fa-2x"></i></a>
        </div>

        <div class="text-center mt-2">
            <small class="text-secondary">Copyright &copy; 2023 WebGIS Kabupaten Manggarai Barat | All Rights
                Reverse</small>
    </div>   
    <script>
        var map = L.map('map').setView([-8.4, 119.93], 9); // lat, long, zoom

        // Basemaps
        var basemap1 = L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {
                    maxZoom: 19,
                    attribution:
                        'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                }
            );

            var basemap2 = L.tileLayer(
                "https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}",
                {
                    attribution:
                        'Tiles &copy; Esri | <a href="DIVSIGUGM" target="_blank">DIVSIG UGM</a>',
                }
            );

            var basemap3 = L.tileLayer(
                "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
                {
                    attribution:
                        'Tiles &copy; Esri | <a href="Lathan WebGIS" target="_blank">DIVSIG UGM</a>',
                }
            );

            var basemap4 = L.tileLayer(
                "https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png",
                {
                    attribution:
                        '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
                }
            );

            basemap1.addTo(map);

            var baseMaps = {
                OpenStreetMap: basemap1,
                "Esri World Street": basemap2,
                "Esri Imagery": basemap3,
                "Stadia Dark Mode": basemap4,
            };

            L.control.layers(baseMaps).addTo(map);

        //Image watermark//
        L.Control.Watermark = L.Control.extend({
                onAdd: function (map) {
                    var img = L.DomUtil.create('img');
                    img.src = 'assets/img/logo/simba2.png';
                    img.style.width = '100px';
                    return img;
                }
            });

            L.control.Watermark = function (opts) {
                return new L.Control.Watermark(opts);
            }
            L.control.Watermark({ position: 'bottomleft' }).addTo(map);

            L.Control.Legend = L.Control.extend({
                onAdd: function (map) {
                    var img = L.DomUtil.create('img');
                    img.src = 'assets/img/legend/legend2.png';
                    img.style.width = '150px';
                    return img;
                }
            });

            L.control.Legend = function (opts) {
                return new L.Control.Legend(opts);
            }

            L.control.Legend({ position: 'topleft' }).addTo(map);  

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "responsi";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM wisata_mamba";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lat = $row["latitude"];
                $long = $row["longitude"];
                $nama = $row["wisata"];
                $kecamatan = $row["kecamatan"];
                echo "L.marker([$lat, $long]).addTo(map).bindPopup('Wisata $nama <br> terletak di Kecamatan $kecamatan');";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    // Plugin Search //
        var searchControl = new L.Control.Search({
                position: "topleft",
                layer: petawisata, //Nama variabel layer
                propertyName: "NAMOBJ", //Field untuk pencarian
                marker: false,
                moveToLocation: function (latlng, title, map) {
                    var zoom = map.getBoundsZoom(latlng.layer.getBounds());
                    map.setView(latlng, zoom);
                },
            });
            searchControl
                .on("search:locationfound", function (e) {
                    e.layer.setStyle({
                        fillColor: "#ffff00",
                        color: "#0000ff",
                    });
                })
                .on("search:collapse", function (e) {
                    featuresLayer.eachLayer(function (layer) {
                        featuresLayer.resetStyle(layer);
                    });
                });
            map.addControl(searchControl);

            /*Plugin Geolocation */
            var locateControl = L.control
                .locate({
                    position: "topleft",
                    drawCircle: true,
                    follow: true,
                    setView: true,
                    keepCurrentZoomLevel: false,
                    markerStyle: {
                        weight: 1,
                        opacity: 0.8,
                        fillOpacity: 0.8,
                    },
                    circleStyle: {
                        weight: 1,
                        clickable: false,
                    },
                    icon: "fas fa-crosshairs",
                    metric: true,
                    strings: {
                        title: "Click for Your Location",
                        popup: "You're here. Accuracy {distance} {unit}",
                        outsideMapBoundsMsg: "Not available",
                    },
                    locateOptions: {
                        maxZoom: 16,
                        watch: true,
                        enableHighAccuracy: true,
                        maximumAge: 10000,
                        timeout: 10000,
                    },
                })
                .addTo(map);

            /*Plugin Mouse Position Coordinate */
            L.control.mousePosition({ position: "bottomright", separator: ",", prefix: "Point Coodinate: " }).addTo(map);

            /*Plugin Measurement Tool */
            var measureControl = new L.Control.Measure({
                position: "topleft",
                primaryLengthUnit: "meters",
                secondaryLengthUnit: "kilometers",
                primaryAreaUnit: "hectares",
                secondaryAreaUnit: "sqmeters",
                activeColor: "#FF0000",
                completedColor: "#00FF00",
            });
            measureControl.addTo(map);

            /*Plugin EasyPrint */
            L.easyPrint({
                title: "Print",
            }).addTo(map);

            /*Plugin Routing */
            L.Routing.control({
                waypoints: [
                    L.latLng(),
                    L.latLng()
                ],
                routeWhileDragging: true
            }).addTo(map);

            /*Plugin Layer Marker */
            var addressPoints = [
                [-8.494730546808958, 119.75874998067361, "Pulau Kanawa"],
                [-8.633402457764554, 119.71050016612038, "Pulau Kambing"],
                [-8.469551670518623, 119.55805523080643, "Gili Lawa"],
                [-8.680900294610916, 119.55708603511063, "Pulau Padar"],
                [-8.680900294610916, 119.55708603511063, "Pulau Padar"],
                [-8.483610648644428, 119.83933885776861, "Pulau Bidadari"],
                [-8.570740725185527, 119.70971620767934, "Pulau Papagarang"],
                [-8.655666418315185, 119.55930468317567, "Pink Beach"],
                [-8.476662892449383, 119.88049468640492, "Pantai Wae Rana"],
                [-8.82117085811829, 120.20038867535762, "Pantai Watu Weri"],
                [-8.464085866363073, 119.87184675720819, "Pantai Waecicu"],
                [-8.567844937101457, 119.80857968101964, "Pantai Manjarite"],
                [-8.508907146270488, 119.87622485794266, "Pantai Pede"],
                [-8.508425564080468, 119.61092745537331, "Manta Point"],
                [-8.545162881122124, 119.6483031345824, "Turtle Point"],
                [-8.539496356390803, 119.99462842483355, "Air Terjun Cunca Wulang"],
                [-8.625727613070563, 119.99720311685242, "Air Terjun Cunca Rami"],
                [-8.582625268880555, 119.9826992038345, "Air Terjun Cunca Perlamping"],
                [-8.612027119297096, 120.02253964705409, "Air Terjun Cunca Plias"],
                [-8.479347025339779, 119.89920607703503, "Gua Batu Cermin"],
                [-8.388794010185475, 119.8529023364692, "Gua Rangko"],
                [-8.6537181867236, 119.71692306564803, "Taman Nasional Komodo Loh Buaya"],
                [-8.526541877544174, 119.48295437639595, "Taman Nasional Komodo Loh Liang"],
                [-8.71224891221532, 119.98849202378275, "Danau Sano Nggoang"]
            ];

            var markers = L.markerClusterGroup();

            for (var i = 0; i < addressPoints.length; i++) {
                var a = addressPoints[i];
                var title1 = a[2];
                var marker = L.marker(new L.LatLng(a[0], a[1]), {
                    title: title1
                });

                marker.bindPopup(title1);
                markers.addLayer(marker);
            }
            map.addLayer(markers);
    </script>
</body>

</html>
