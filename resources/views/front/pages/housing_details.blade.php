@extends('front.layout.master')

@section("leaflet-css")
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <style type="text/css">
        #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height:400px;
        }
    </style>
@endsection

@section('content')


<!-- bradcam_area  -->
<div class="property_details_banner">
                <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-8 col-lg-6">
                                <div class="comfortable_apartment">
                                    <h4>{{ $housing->title }}</h4>
                                    <p> <img src="{{ asset('assets/front/img/svg_icon/location.svg') }}" alt=""> {{ $housing->address }}</p>
                                    <div class="quality_quantity d-flex">
                                        <div class="single_quantity">
                                            <img src="{{ asset('assets/front/img/svg_icon/color_box.svg') }}" alt="">
                                            <span>{{ $housing->superficie }}</span>
                                        </div>
                                        <div class="single_quantity">
                                            <img src="{{ asset('assets/front/img/svg_icon/color_bed.svg') }}" alt="">
                                            <span>{{ $housing->capacity }} Person(s)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-4 col-lg-6">
                                <div class="prise_quantity">
                                    <h4>{{ $housing->price }} DH / Mois</h4>
                                    <a href="#">{{ $housing->phone }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
            <!--/ bradcam_area  -->

            <div class="property_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="property_banner">
                        <div class="property_banner_active owl-carousel">
                            <div class="single_property">
                                <img src="{{ $housing->images }}" alt="">
                            </div>
                            <div class="single_property">
                                <img src="{{ $housing->images }}" alt="">
                            </div>
                            <div class="single_property">
                                <img src="{{ $housing->images }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="details_info">
                        <h4>Description</h4>
                       <p>{{ $housing->rating }}</p>
                    </div>

                    <div class="details_info">
                    <div class="container">
                        <div id="map"></div>
                    </div>
                    </div>
                </div>
    </div>

</div>

        
                    <!-- Fichiers Javascript -->
                    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	    <script type="text/javascript">
            // On initialise la latitude et la longitude de Paris (centre de la carte)
            var latitude = 31.794525;
            var longitude = -7.0849336;
            var macarte = null;
            var housings =  <?php echo json_encode($housings); ?>;
            console.log(housings);
            var len = housings.length;
            
            // Fonction d'initialisation de la carte
            function initMap() {
                // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([latitude, longitude], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
            window.onload = function(){
		        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
		        initMap(); 
            };
            function initMap() {
                // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([latitude, longitude], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © OpenStreetMap/ODbL - rendu OSM France',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
                // Nous parcourons la liste des villes
                for (i=0; i < len; i++) {
                
                var marker = L.marker([housings[i]['latitude'], housings[i]['longitude']]).addTo(macarte);
                    marker.bindPopup(housings[i]['title']);
                }         	
            }
        </script>

<br/><br/><br/>

@endsection
