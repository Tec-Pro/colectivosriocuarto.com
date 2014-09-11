<!--
var map;
var contador = 0;
var geocoder;
var marcadorHasta = 'http://localhost/colectivosriocuarto.com/imagenes/hasta.png';
var marcadorDesde = 'http://localhost/colectivosriocuarto.com/imagenes/desdee.png';
var marcadores = []; // Se tiene que crear un array en el que se guarde el número de marcadores que hay en el mapa
var circulos = [];
var mapOptions = {
          center: new google.maps.LatLng(-33.1265506, -64.3414028),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

function initialize() { //Inicializa el mapa en Rio Cuarto
        geocoder = new google.maps.Geocoder();        
       map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);

//click listener para poner marcador en mapa     
google.maps.event.addListener(map, 'click', function(e) { 
    placeMarker(e.latLng, map);
  });
}

// funcion que pone marcador donde se hace click
function placeMarker(position, map) {
 if (contador<2){
  if (contador == 0){
  var markerDesde = new google.maps.Marker({
    position: position,
    map: map,
    icon : marcadorDesde,
    draggable: true});   
  marcadores.push(markerDesde);
  } else {
    var markerHasta = new google.maps.Marker({
      position: position,
      map: map,
      icon : marcadorHasta,
      draggable: true }); 
  marcadores.push(markerHasta);
  }
  if (contador == 0){
    // Add circle overlay and bind to marker
    var circle = new google.maps.Circle({
      map: map,
      radius: 1000,
      strokeColor: '#AA0000',
     strokeWeight: 0,
     strokeOpacity: 0.5,
      fillColor: '#AA0000',
     fillOpacity: 0.5 });
    circle.bindTo('center', markerDesde, 'position');
    circulos.push(circle);
  } 
  if (contador == 1){
  // Add circle overlay and bind to marker
    var circle = new google.maps.Circle({
      map: map,
      radius: 1000,    
      strokeColor: '#22FF00',
      strokeWeight: 0,
      strokeOpacity: 0.5,
      fillColor: '#22FF00',
      fillOpacity: 0.5 });
    circle.bindTo('center', markerHasta, 'position');
    circulos.push(circle);
  }
  map.panTo(position);
  contador++;
}
}


  // coloca los marcadores en las direcciones buscadas
 function codeAddress() {
  if ( (document.getElementById("origen").value != '') && (document.getElementById("destino").value != '')) {
  
for ( var i = 0; i < ( circulos.length) ; i++) { //elimino todos los marcadores
            circulos[i].setMap(null);
          }; 
          for ( var i = 0; i < ( marcadores.length) ; i++) { //elimino todos los marcadores
            marcadores[i].setMap(null);
          }; 
  var address = document.getElementById("origen").value + ",rio cuarto, cordoba";
  marcadores = [];
  circulos = [];  
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var markerDesde = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          icon : marcadorDesde,
          draggable: true
      });
      contador++;
      marcadores.push(markerDesde);
      var circle = new google.maps.Circle({
        map: map,
        radius: 1000,    
        strokeColor: '#AA0000',
        strokeWeight: 0,
        strokeOpacity: 0.5,
        fillColor: '#AA0000',
        fillOpacity: 0.5 });
      circle.bindTo('center', markerDesde , 'position');
      circulos.push(circle);
    } else {
      alert('La direccion de origen no se ha encontrado ' + status);
    }
  });
  var address = document.getElementById("destino").value + ",rio cuarto, cordoba";
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var markerHasta = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          icon : marcadorHasta,
          draggable: true,
      });
      contador++;
      var circle = new google.maps.Circle({
        map: map,
        radius: 1000,    
        strokeColor: '#22FF00',
        strokeWeight: 0,
        strokeOpacity: 0.5,
        fillColor: '#22FF00',
        fillOpacity: 0.5 });
        circle.bindTo('center', markerHasta, 'position');
      marcadores.push(markerHasta);
      circulos.push(circle); 
    } else {
      alert('La direccion de destino no se ha encontrado ' + status);
    }
  });
} else {
  alert('Por favor ingrese ambas drecciones');
}
}

//funcion que regoce la posicion de los markers
function openInfoWindow(marker) {
    var markerLatLng = marker.getPosition();
    infoWindow.setContent([
        '&lt;b&gt;La posicion del marcador es:&lt;/b&gt;&lt;br/&gt;',
        markerLatLng.lat(),
        ', ',
        markerLatLng.lng(),
        '&lt;br/&gt;&lt;br/&gt;Arr&amp;aacute;strame y haz click para actualizar la posici&amp;oacute;n.'
    ].join(''));
    infoWindow.open(map, marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
--> 