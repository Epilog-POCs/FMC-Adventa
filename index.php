<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

      <link rel="stylesheet" href="css/styles.css">
   </head>
   <body>
      <?php include "modal.php"?>
      <div id="tooltipCentro" class="tooltip"></div>
      <div id="mapaPrincipal"></div>
      <div id="logo">
         <img src="logo.jpg" alt="">
      </div>
      <div id="iconos">
         <div class="container">
            <div class="row">
               <div class="col-2 text-center mx-auto">
                  <img src="img/icons/3.png" alt="">
                  <div>Distrib.</div>
               </div>
               <div class="col-2 text-center mx-auto">
                  <img src="img/icons/5.png" alt="">
                  <div>Subdist.</div>
               </div>
               <div class="col-2 text-center mx-auto">
                  <img src="img/icons/0.png" alt="">
                  <div>Vendedor</div>
               </div>
               <div class="col-2 text-center mx-auto">
                  <img src="img/icons/4.png" alt="">
                  <div>Agrícola</div>
               </div>
               <div class="col-2 text-center mx-auto">
                  <img src="img/icons/2.png" alt="">
                  <div>Otros</div>
               </div>

            </div>
         </div>
      </div>
      <div id="colores">
         <div class="signo">
            +
         </div>
         <div>
            <div class="color color-6"></div>
         </div>
         <div>
            <div class="color color-5"></div>
         </div>
         <div>
            <div class="color color-4"></div>
         </div>
         <div>
            <div class="color color-3"></div>
         </div>
         <div>
            <div class="color color-2"></div>
         </div>
         <div>
            <div class="color color-1"></div>
         </div>
         <div>
            <div class="color color-0"></div>
         </div>
         <div class="signo">
            -
         </div>
      </div>
      <div id="busquedaMapaPrincipal" class="container" >
         <div class="row">
            <div class="form-group col-12">
               <label>Busca un Lugar</label>
               <input id="lugarBuscadoMapaPrincipal" type="text" class="form-control bg-light border-0 small" placeholder="Busca un lugar"/>
            </div>
         </div>

      </div>
      <div id="formulario" class="container">
         <button type="button" id="verStats" class="btn btn-primary hide" data-toggle="modal" data-target="#modalStats">
            Launch demo modal
         </button>
         <div class="row">
            <div class="form-group col-12">
               <label>Tipo</label>
               <select class="form-control" onchange="cambirx(this.value)">
                  <option value="" selected disabled>Seleccione una opción</option>
                  <option value="puntos">Puntos</option>
                  <option value="ventas">Ventas</option>
                  <option value="inventario">Inventario</option>
               </select>
            </div>
            <div class="form-group col-12 quitar hide" id="selcat">
               <label>Categorías</label>
               <select class="form-control">
                  <option>Todas</option>
                  <option>Herbicidas</option>
                  <option>Nematicidas</option>
                  <option>Tratamiento de semilla</option>
                  <option>Insecticidas</option>
                  <option>Fungicidas</option>
                  <option>Acaricidas</option>
               </select>
            </div>
            <div class="form-group col-12 quitar hide" id="selcat">
               <label>SKUs</label>
               <select class="form-control">
                  <option>Todos</option>
                  <option>SKU 0000000001</option>
                  <option>SKU 0000000002</option>
                  <option>SKU 0000000003</option>
                  <option>SKU 0000000004</option>
                  <option>SKU 0000000005</option>
                  <option>SKU 0000000006</option>
                  <option>SKU 0000000007</option>
                  <option>SKU 0000000008</option>
                  <option>SKU 0000000009</option>
                  <option>SKU 0000000010</option>
                  <option>SKU 0000000011</option>
                  <option>SKU 0000000012</option>
                  <option>SKU 0000000013</option>
                  <option>SKU 0000000014</option>
                  <option>SKU 0000000015</option>
                  <option>SKU 0000000016</option>
                  <option>SKU 0000000017</option>
                  <option>SKU 0000000018</option>
                  <option>SKU 0000000019</option>

               </select>
            </div>
            <div class="form-group col-6">
               <label>Desde</label>
               <input type="date" class="form-control"/>
            </div>
            <div class="form-group col-6">
               <label>Hasta</label>
               <input type="date" class="form-control"/>
            </div>
            <button type="button" class="btn btn-danger btn-block" onclick="aleatorizarEstados()">
               Filtrar
            </button>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeamv0IUPzJTUTmP1STnEC8PRSx90ErLY&v=3.exp&libraries=places"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"/></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/data.js"></script>
   <script src="https://code.highcharts.com/modules/drilldown.js"></script>
   <script src="js/turf.js"></script>
   <script src="js/mapas.js"></script>
   <script>
      var estados=[];
      var estadosx=[];
      var tipos=['Distribuidor', 'Subdistribuidor', 'Agrícola', 'Tienda', 'Vendedor', 'Otro']
      var colores=['#ea4f50', '#ef7543', '#f29531', '#f3b306', '#bfb905', '#83bc07', '#1abc0b']
      var markers=[]
      var coordenadas=[
         {
            "latitud": 21.97986495,
            "longitud": -99.23420823
         },
         {
            "latitud": 24.10277228,
            "longitud": -99.67366135
         },
         {
            "latitud": 25.47911903,
            "longitud": -102.3543254
         },
         {
            "latitud": 25.51878377,
            "longitud": -104.7713176
         },
         {
            "latitud": 23.27781971,
            "longitud": -102.0467082
         },
         {
            "latitud": 23.45935221,
            "longitud": -104.3318645
         },
         {
            "latitud": 20.99398552,
            "longitud": -103.4892246
         },
         {
            "latitud": 19.61333064,
            "longitud": -102.3466465
         },
         {
            "latitud": 17.5096764,
            "longitud": -99.38033787
         },
         {
            "latitud": 16.66958614,
            "longitud": -95.97457615
         },
         {
            "latitud": 21.00064512,
            "longitud": -100.8059918
         },
         {
            "latitud": 21.61476102,
            "longitud": -102.0804059
         },
         {
            "latitud": 22.12454292,
            "longitud": -102.9593121
         },
         {
            "latitud": 23.25973728,
            "longitud": -105.5520856
         },
         {
            "latitud": 21.94123135,
            "longitud": -104.9807965
         },
         {
            "latitud": 20.19851043,
            "longitud": -104.629234
         },
         {
            "latitud": 19.28855957,
            "longitud": -103.5086285
         },
         {
            "latitud": 18.60274772,
            "longitud": -103.0032574
         },
         {
            "latitud": 20.09536944,
            "longitud": -103.222984
         },
         {
            "latitud": 21.24659932,
            "longitud": -104.4314801
         },
         {
            "latitud": 22.00236157,
            "longitud": -104.0579449
         },
         {
            "latitud": 21.12367321,
            "longitud": -102.2269368
         },
         {
            "latitud": 22.83514336,
            "longitud": -102.2708821
         },
         {
            "latitud": 24.74505504,
            "longitud": -101.9193196
         },
         {
            "latitud": 24.14496885,
            "longitud": -102.9080891
         },
         {
            "latitud": 25.00420011,
            "longitud": -103.5452962
         },
         {
            "latitud": 15.68462654,
            "longitud": -92.49305006
         },
         {
            "latitud": 16.69746685,
            "longitud": -91.83387037
         },
         {
            "latitud": 19.49582045,
            "longitud": -89.50476881
         },
         {
            "latitud": 20.89804416,
            "longitud": -88.01062819
         },
         {
            "latitud": 18.5819218,
            "longitud": -89.68055006
         },
         {
            "latitud": 17.66309618,
            "longitud": -93.45984694
         },
         {
            "latitud": 16.4025942,
            "longitud": -94.95398756
         },
         {
            "latitud": 16.23389422,
            "longitud": -97.32703444
         },
         {
            "latitud": 18.74845774,
            "longitud": -97.546761
         },
         {
            "latitud": 18.6235711,
            "longitud": -101.1063313
         },
         {
            "latitud": 20.40458734,
            "longitud": -99.91980787
         },
         {
            "latitud": 24.30527079,
            "longitud": -100.7987141
         },
         {
            "latitud": 24.06474234,
            "longitud": -110.6644368
         },
         {
            "latitud": 24.98428519,
            "longitud": -111.5872883
         },
         {
            "latitud": 26.15368237,
            "longitud": -112.0706868
         },
         {
            "latitud": 27.057384,
            "longitud": -112.7518391
         },
         {
            "latitud": 28.18651973,
            "longitud": -113.7406087
         },
         {
            "latitud": 27.27242268,
            "longitud": -114.0921712
         },
         {
            "latitud": 29.55264373,
            "longitud": -114.7513508
         },
         {
            "latitud": 31.33320043,
            "longitud": -115.8719563
         },
         {
            "latitud": 31.37072917,
            "longitud": -115.2347493
         },
         {
            "latitud": 31.93185688,
            "longitud": -114.3778157
         },
         {
            "latitud": 30.61732162,
            "longitud": -112.0047688
         },
         {
            "latitud": 29.85800521,
            "longitud": -111.8509602
         },
         {
            "latitud": 30.33326579,
            "longitud": -110.2249837
         },
         {
            "latitud": 29.60996968,
            "longitud": -110.4007649
         },
         {
            "latitud": 29.26552665,
            "longitud": -111.0599446
         },
         {
            "latitud": 28.91991934,
            "longitud": -111.1917805
         },
         {
            "latitud": 29.07366578,
            "longitud": -108.2254719
         },
         {
            "latitud": 28.47499909,
            "longitud": -108.0478359
         },
         {
            "latitud": 30.7102278,
            "longitud": -107.7182461
         },
         {
            "latitud": 31.36914551,
            "longitud": -106.7953945
         },
         {
            "latitud": 29.35970589,
            "longitud": -106.5976406
         },
         {
            "latitud": 28.30102558,
            "longitud": -106.6635586
         },
         {
            "latitud": 28.97597845,
            "longitud": -104.971664
         },
         {
            "latitud": 27.36838324,
            "longitud": -104.971664
         },
         {
            "latitud": 27.52437892,
            "longitud": -103.6533047
         },
         {
            "latitud": 28.87982293,
            "longitud": -104.1586757
         },
         {
            "latitud": 28.86058113,
            "longitud": -102.0712734
         },
         {
            "latitud": 26.60439885,
            "longitud": -100.299405
         },
         {
            "latitud": 27.3875289,
            "longitud": -101.2222566
         },
         {
            "latitud": 25.3683646,
            "longitud": -99.98647968
         },
         {
            "latitud": 25.54691715,
            "longitud": -97.67935078
         },
         {
            "latitud": 23.3871514,
            "longitud": -100.1622609
         },
         {
            "latitud": 22.19199818,
            "longitud": -100.73355
         },
         {
            "latitud": 19.35729112,
            "longitud": -99.37124531
         },
         {
            "latitud": 25.16966303,
            "longitud": -100.73355
         },
         {
            "latitud": 22.86176568,
            "longitud": -103.0736379
         },
         {
            "latitud": 22.97307625,
            "longitud": -105.051177
         },
         {
            "latitud": 24.06102613,
            "longitud": -106.4684133
         },
         {
            "latitud": 24.8610353,
            "longitud": -107.6878957
         },
         {
            "latitud": 25.98225825,
            "longitud": -108.1383352
         },
         {
            "latitud": 27.21996753,
            "longitud": -108.0174855
         },
         {
            "latitud": 27.14178277,
            "longitud": -106.9737844
         },
         {
            "latitud": 24.9805961,
            "longitud": -106.4134816
         },
         {
            "latitud": 23.76977675,
            "longitud": -105.9850148
         },
         {
            "latitud": 21.85590621,
            "longitud": -105.2709035
         },
         {
            "latitud": 19.88505665,
            "longitud": -104.3810109
         },
         {
            "latitud": 21.34516885,
            "longitud": -101.3158254
         },
         {
            "latitud": 20.7915682,
            "longitud": -100.4052943
         },
         {
            "latitud": 18.36322641,
            "longitud": -99.28340761
         },
         {
            "latitud": 17.24400713,
            "longitud": -100.2172455
         },
         {
            "latitud": 16.53968678,
            "longitud": -98.43746035
         },
         {
            "latitud": 17.31744002,
            "longitud": -96.98726503
         },
         {
            "latitud": 16.00628502,
            "longitud": -96.19413309
         },
         {
            "latitud": 15.47757375,
            "longitud": -92.75541239
         },
         {
            "latitud": 15.86895271,
            "longitud": -93.10697489
         },
         {
            "latitud": 17.65717701,
            "longitud": -94.49125223
         },
         {
            "latitud": 17.88416437,
            "longitud": -95.65246454
         },
         {
            "latitud": 18.41658535,
            "longitud": -95.53161493
         },
         {
            "latitud": 19.61105373,
            "longitud": -96.86096063
         },
         {
            "latitud": 20.22047789,
            "longitud": -97.2784411
         },
         {
            "latitud": 20.61173292,
            "longitud": -97.57507196
         },
         {
            "latitud": 20.74535402,
            "longitud": -97.9815661
         },
         {
            "latitud": 20.45740901,
            "longitud": -97.68493524
         },
         {
            "latitud": 19.89800312,
            "longitud": -97.62174154
         },
         {
            "latitud": 19.97029969,
            "longitud": -97.83048177
         },
         {
            "latitud": 19.66022517,
            "longitud": -97.68765951
         },
         {
            "latitud": 19.35991541,
            "longitud": -97.88541341
         },
         {
            "latitud": 18.76804339,
            "longitud": -97.63272787
         },
         {
            "latitud": 19.19321564,
            "longitud": -90.44862538
         },
         {
            "latitud": 20.15528345,
            "longitud": -90.05311757
         },
         {
            "latitud": 20.71121409,
            "longitud": -89.4378832
         },
         {
            "latitud": 20.36141778,
            "longitud": -88.25135976
         },
         {
            "latitud": 18.03755726,
            "longitud": -89.48182851
         },
         {
            "latitud": 17.39918525,
            "longitud": -91.1956957
         },
         {
            "latitud": 27.03556727,
            "longitud": -104.0091744
         },
         {
            "latitud": 26.61400129,
            "longitud": -106.6458932
         },
         {
            "latitud": 28.29077229,
            "longitud": -110.0296822
         }
      ]
      function rnd(min, max) { // min and max included 
         return Math.floor(Math.random() * (max - min + 1) + min)
      }

      function swapCoordinates(GeoJSON) {
         for (var i = 0; i < GeoJSON.geometry.coordinates.length; i++) {
            var type=GeoJSON.geometry.type
            if (type == "Polygon") {
               var paths = [];
               for (var j = 0; j < GeoJSON.geometry.coordinates[i].length; j++) {
                  if (!paths[i]) {
                     paths[i] = [];
                  }
                  paths[i].push({
                     lat: GeoJSON.geometry.coordinates[i][j][1],
                     lng: GeoJSON.geometry.coordinates[i][j][0]
                  });
               }
            } else if (type == "MultiPolygon") {
               var objectPolygon = [];
               for (var j = 0; j < GeoJSON.geometry.coordinates[i].length; j++) {
                  innerCoords = [];
                  length = GeoJSON.geometry.coordinates[i][j].length;
                  clockwise = turf.booleanClockwise(GeoJSON.geometry.coordinates[i][j]);
                  if (!clockwise) {
                     holes = true;
                  }else{
                     holes=false
                  }
                  for (var k = 0; k < length; k++) {
                     coordinates = {
                        lat: GeoJSON.geometry.coordinates[i][j][k][1],
                        lng: GeoJSON.geometry.coordinates[i][j][k][0]
                     };
                     if (clockwise) {
                        objectPolygon.push(coordinates);
                     }                     else {
                        innerCoords.push(coordinates);
                     }
                  }
               }
               if (!paths) {
                  paths = [];
               }
               if (holes) {
                  paths.push([objectPolygon, innerCoords]);
               } else {
                  paths.push(objectPolygon);
               }
            }
         }
         return paths;
      }

      var mapaPrincipal;
      function iniciarMapa(){
         mapaPrincipal = new google.maps.Map($("#mapaPrincipal")[0], {
            styles: mapStyles[25],
            center: new google.maps.LatLng(19.400426510597388, -99.14631760218009),
            zoom: 5.5,
            minZoom: 5.5, maxZoom: 9,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
            mapTypeControl: false,
            panControl: true,
            gestureHandling: 'greedy',
            zoomControl: true,
            scaleControl: false,
            streetViewControl: true,
            zoomControlOptions: {
               style: google.maps.ZoomControlStyle.MEDIUM,
               position: google.maps.ControlPosition.RIGHT_BOTTOM
            },
            panControlOptions: {
               style: google.maps.ZoomControlStyle.MEDIUM,
               position: google.maps.ControlPosition.LEFT_BOTTOM
            }
         });
         /*google.maps.event.addListener(mapaPrincipal, 'click', function(event) {
            console.log(`${event.latLng.lat()},${event.latLng.lng()}`)
            var marker = new google.maps.Marker({
               position: event.latLng, 
               map: mapaPrincipal
            });
         });*/

         google.maps.event.addListener(mapaPrincipal, 'zoom_changed', function() {
            var zoom = mapaPrincipal.getZoom();
            for (i = 0; i < markers.length; i++) {
               markers[i].setVisible(zoom >=8);
            }
            for (i = 0; i < estadosx.length; i++) {
               estadosx[i].setVisible(zoom <8);
            }
            //zoomLevel = mapaPrincipal.getZoom();
            //alert(zoomLevel)
            /*if (zoomLevel >= minFTZoomLevel) {
               FTlayer.setMap(map);
            } else {
               FTlayer.setMap(null);
            }*/
         });
         mapaPrincipal.controls[google.maps.ControlPosition.RIGHT_CENTER].push($("#colores")[0]);
         mapaPrincipal.controls[google.maps.ControlPosition.TOP_RIGHT].push($("#logo")[0]);
         mapaPrincipal.controls[google.maps.ControlPosition.BOTTOM_CENTER].push($("#iconos")[0]);
         mapaPrincipal.controls[google.maps.ControlPosition.TOP_LEFT].push($("#busquedaMapaPrincipal")[0]);
         mapaPrincipal.controls[google.maps.ControlPosition.LEFT_TOP].push($("#formulario")[0]);
         var autocomplete = new google.maps.places.Autocomplete($('#lugarBuscadoMapaPrincipal')[0]);
         autocomplete.bindTo('bounds', mapaPrincipal);
         google.maps.event.addListener(autocomplete, 'place_changed', function(e) {
            var x = autocomplete.gm_accessors_.place;
            var formattedPrediction;
            $.each(x, function(key, item) {
               if (item.formattedPrediction) {
                  formattedPrediction = item.formattedPrediction
               }
            });
            $("#lugarBuscadoModalBuscar").val(formattedPrediction)
            var place = autocomplete.getPlace();
            if (!place.geometry) {
               return;
            }
            if (place.geometry.viewport) {
               mapaPrincipal.fitBounds(place.geometry.viewport);
            } else {
               mapaPrincipal.panTo(place.geometry.location);
               setTimeout(mapaPrincipal.setZoom(17), 1000);
            }
         });
      }




      var estados;
      var municipios;
      iniciarMapa();
      $.getJSON('json/mexicoHigh.json', function (data) {
         estados=data.features;
         pintarEstados(estados)

      });
      $.getJSON( "json/municipiosMexico.json", function( data ) {
         municipios=data.features;

      })


      function pintarEstados(){
         $.each(estados, function (key, val) {
            var color=colores[rnd(0,6)];
            var daniel=swapCoordinates(val)
            const estado = new google.maps.Polygon({
               paths: daniel,
               geodesic: false,
               fillColor: color,
               fillOpacity:0.6, 
               strokeOpacity: 1.0,
               strokeWeight: 0.5,
            });
            estado.setMap(mapaPrincipal);



            google.maps.event.addListener(estado,"click",function(){
               $("#titulomodal").html(val.properties.name)

               //filtrarEstado(val.properties.name)

               var bounds= new google.maps.LatLngBounds();
               var paths = this.getPaths();
               paths.forEach(function(path){
                  var ar = path.getArray();
                  for(var i=0, l = ar.length; i <l; i++){
                     bounds.extend(ar[i]);
                  }
               })
               mapaPrincipal.fitBounds(bounds)
               setTimeout(function() {
                  $("#verStats").trigger("click")
               }, 1500);
            }); 

            var infowindow = new google.maps.InfoWindow();
            infowindow.opened = false;

            google.maps.event.addListener(estado,"mouseover",function(){
               $(".gm-style-iw").next("div").hide();
               this.setOptions({fillOpacity: 1});
               infowindow.setContent(`<div style='width:200px; height:80px'><b>${val.properties.name}</b><br>Ventas: xxxxxx Kilolitros (15%)<br>Inventario: xxxxx Kilolitros (8%)<br>Pariticapentes: xxxxxx (14%)<br>Puntos: xxxxxx (8%)<br</div>`);
               var bounds= new google.maps.LatLngBounds();
               var paths = this.getPaths();
               paths.forEach(function(path){
                  var ar = path.getArray();
                  for(var i=0, l = ar.length; i <l; i++){
                     bounds.extend(ar[i]);
                  }
               })
               infowindow.setPosition(bounds.getCenter());
               infowindow.open(mapaPrincipal);
            });

            google.maps.event.addListener(estado,"mousemove",function(){
               /*var point = fromLatLngToPoint(this.getPosition(), mapaPrincipal);
               var contenido = "<h3 class='truncate' style='color:white'><b>" + 11111 + ":   </b><span style='color:white'>" + 11111 + "</span></h3><hr><table class='tablaTooltip'><tr><td style='width:50%'><div class='logoEmpresa'><img src='cent/barrio.jpg'></div></td><td><div class='tituloSecundario'><ul class='qq' style='font-size:12px'><li><span style='color:white'>Ventas:</span><br><span class='textoli'>" + 11111 + "<i class='fas fa-caret-up'></i></span></li><li><span style='color:white'>Volumen:</span><br><span class='textoli'>" + 11111 + "<i class='fas fa-caret-down'></i></span></li><li><span style='color:white'>Margen:</span><br><span class='textoli'>" + 11111 + "<i class='fas fa-caret-up'></i></span></li></ul></div></td></tr></table><hr><div id='espacioIconosh'>" + 11111 + "</div>";
               $('#tooltipCentro').html(contenido).css({
                  'left': point.x + $("#mapaPrincipal").offset().left - 15,
                  'top': point.y - 250,
                  'position': 'absolute'
               }).show();*/
            });



            google.maps.event.addListener(estado,"mouseout",function(){
               this.setOptions({fillOpacity: 0.5});
               infowindow.close();
               infowindow.opened = false;
            });

            estadosx.push(estado)

         });
      }

      function fromLatLngToPoint(latLng, map) {
         var topRight = map.getProjection().fromLatLngToPoint(map.getBounds().getNorthEast());
         var bottomLeft = map.getProjection().fromLatLngToPoint(map.getBounds().getSouthWest());
         var scale = Math.pow(2, map.getZoom());
         var worldPoint = map.getProjection().fromLatLngToPoint(latLng);
         return new google.maps.Point((worldPoint.x - bottomLeft.x) * scale, (worldPoint.y - topRight.y) * scale);
      }


      function cambirx(e){
         if(e=="puntos"){
            $(".quitar").hide();
         }else{
            $(".quitar").show();
         }
      }

      function aleatorizarEstados(){    
         $.each(estadosx, function(key,value) {
            value.setOptions({fillColor: colores[rnd(0,6)]});
         });

         $.each(markers, function(key,value) {
            var icon=[rnd(0,5)]
            var color=[rnd(0,6)]
            value.setOptions({icon: `img/icons/${icon}-${color}.png`});
         })
      }
      /*function filtrarEstado(estado){
         var ejemplo=municipios.filter((x) => x.properties.NAME_1 == estado);
         $.each(ejemplo, function (key, val) {
            console.log(val)
            var color=colores[rnd(0,6)];
            var daniel=swapCoordinates(val)
            const estado = new google.maps.Polygon({
               paths: daniel,
               geodesic: false,
               fillColor: color,
               fillOpacity:1, 
               strokeOpacity: 1.0,
               strokeWeight: 2,
            });
            estado.setMap(mapaPrincipal);
            estado.addListener("click", () => {
               alert(val.properties.name)

            });
            google.maps.event.addListener(estado,"mouseover",function(){
               this.setOptions({fillColor: "black"});
            }); 

            google.maps.event.addListener(estado,"mouseout",function(){
               this.setOptions({fillColor: color});
            });
            estados.push(estado)

         })
      }*/





      $.each(coordenadas, function (key, val) {
         var icon=[rnd(0,5)]
         var color=[rnd(0,6)]

         var marker = new google.maps.Marker({
            icon: `img/icons/${icon}-${color}.png`,
            position: new google.maps.LatLng(val.latitud,val.longitud),
            map: mapaPrincipal
         }); 

         marker.addListener('click', function() {
            this.setAnimation(google.maps.Animation.BOUNCE);
            setTimeout(function() {
               markers[key].setAnimation(null);
               var t=tipos[rnd(0,5)]
               var icon=[rnd(0,5)]
               var color=[rnd(0,6)]
               $("#titulomodal").html( `<img src='img/icons/${icon}-${color}.png'> ${t} #REF`)
               $("#verStats").trigger("click")
            }, 1500);
         });


         markers.push(marker)
      })

      Highcharts.chart('barDrilldown', {
         chart: {
            type: 'column'
         },
         title: {
            align: 'left',
            text: 'Total de ventas acumulado por Categorías y productos'
         },
         xAxis: {
            type: 'category'
         },
         legend: {
            enabled: false
         },
         plotOptions: {
            series: {
               borderWidth: 0,
               dataLabels: {
                  enabled: true,
                  format: '{point.y:.1f}%'
               }
            }
         },

         tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> del total<br/>'
         },

         series: [
            {
               name: 'Categoría de Productos',
               colorByPoint: true,
               data: [
                  {
                     name: 'Herbicidas',
                     y: 63.06,
                     drilldown: 'Cat1'
                  },
                  {
                     name: 'Nematicidas',
                     y: 19.84,
                     drilldown: 'Cat2'
                  },
                  {
                     name: 'Tratamiento de Semilla',
                     y: 4.18,
                     drilldown: 'Cat1'
                  },
                  {
                     name: 'Insecticidas',
                     y: 4.12,
                     drilldown: 'Cat2'
                  },
                  {
                     name: 'Fungicidas',
                     y: 2.33,
                     drilldown: 'Cat1'
                  },
                  {
                     name: 'Acaricidas',
                     y: 0.45,
                     drilldown: 'Cat2'
                  }
               ]
            }
         ],
         drilldown: {
            breadcrumbs: {
               position: {
                  align: 'right'
               }
            },
            series: [
               {
                  name: 'SKUs',
                  id: 'Cat1',
                  data: [
                     [
                        'SKU-1',
                        0.1
                     ],
                     [
                        'SKU-2',
                        1.3
                     ],
                     [
                        'SKU-3',
                        53.02
                     ],
                     [
                        'SKU-4',
                        1.4
                     ],
                     [
                        'SKU-5',
                        0.88
                     ],
                     [
                        'SKU-6',
                        0.56
                     ],
                     [
                        'SKU-7',
                        0.45
                     ],
                     [
                        'SKU-8',
                        0.49
                     ],
                     [
                        'SKU-9',
                        0.32
                     ],
                     [
                        'SKU-10',
                        0.29
                     ],
                     [
                        'SKU-11',
                        0.79
                     ],
                     [
                        'SKU-12',
                        0.18
                     ],
                     [
                        'SKU-13',
                        0.13
                     ],
                     [
                        'SKU-14',
                        2.16
                     ],
                     [
                        'SKU-15',
                        0.13
                     ],
                     [
                        'SKU-16',
                        0.11
                     ],
                     [
                        'SKU-17',
                        0.17
                     ],
                     [
                        'SKU-18',
                        0.26
                     ]
                  ]
               },
               {
                  name: 'SKUs',
                  id: 'Cat2',
                  data: [
                     [
                        'SKU-1',
                        1.02
                     ],
                     [
                        'SKU-2',
                        7.36
                     ],
                     [
                        'SKU-3',
                        0.35
                     ],
                     [
                        'SKU-4',
                        0.11
                     ],
                     [
                        'SKU-5',
                        0.1
                     ],
                     [
                        'SKU-6',
                        0.95
                     ],
                     [
                        'SKU-7',
                        0.15
                     ],
                     [
                        'SKU-8',
                        0.1
                     ],
                     [
                        'SKU-9',
                        0.31
                     ],
                     [
                        'SKU-10',
                        0.12
                     ]
                  ]
               }
            ]
         }
      });

      Highcharts.chart('cat1x', {
         chart: {
            type: 'line'
         },
         title: {
            text: ''
         },
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
         },
         yAxis: {
            title: {
               text: ''
            }
         },
         plotOptions: {
            line: {
               dataLabels: {
                  enabled: true
               },
               enableMouseTracking: false
            }
         },
         series: [{
            name: 'SKU 1',
            data: [16.0, 18.2, 23.1, 27.9, 32.2, 36.4, 39.8, 38.4, 35.5, 29.2, 22.0, 17.8]
         }, {
            name: 'SKU 2',
            data: [2.9, 3.6, 0.6, 4.8, 10.2, 14.5, 17.6, 16.5, 12.0, 6.5, 2.0, 0.9]
         }, {
            name: 'SKU 3',
            data: [12.9, 23.6, 16.6, 14.8, 11.2, 14.5, 17.6, 19.5, 32.0, 16.5, 20, 10.9]
         }, {
            name: 'SKU 4',
            data: [11.2, 14.5, 17.6,12.9, 23.6, 16.6, 14.8,  19.5, 32.0, 16.5, 20, 10.9]
         }, {
            name: 'SKU 5',
            data: [32.2, 36.4, 39.8, 38.4,16.0, 18.2, 23.1, 27.9,  35.5, 29.2, 22.0, 17.8]
         }]
      });


   </script>
   </body>
</html>