$(document).ready(function () {
  'use strict';

  function liefletMapInIt() {
    if((document.getElementById('searchmap')) != null){
        var container = L.DomUtil.get('searchmap');
          if(container != null){
              container._leaflet_id = null;
          }
        L.HtmlIcon = L.Icon.extend({
          options: {

          },

          initialize: function (options) {
            L.Util.setOptions(this, options);
          },

          createIcon: function () {
            var div = document.createElement('div');
             div.innerHTML = this.options.html;
            if (div.classList)
              div.classList.add('leaflet-marker-icon');
            else
              div.className += ' ' + 'leaflet-marker-icon';
            return div;
          },

          createShadow: function () {
            return null;
          }
        });

        var tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Dark_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
          attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
          maxZoom: 16
        }),
          latlng = L.latLng(4.1755, 73.5093);



        var map = L.map('searchmap', {
          center: latlng,
          zoom: 16,
          scrollWheelZoom: true,
          layers: [tiles]
        });

        var markers = L.markerClusterGroup();
        var k = 1;
        for (var i = 0; i < addressPoints.length; i++) {
          var a = addressPoints[i];
            
          if(k == 20){
            k = 1;
          }
          var catIcon = categoryIcons[a[3]];
          
           var markerHTML = new L.HtmlIcon({
             html: "<img class='leaflet-marker-icon leaflet-zoom-animated leaflet-interactive' src='http://raajjeguide.test/storage/categories/restaurant.png' alt='markericon' />", 
          });

          // markers.on('clusterclick', function() {
          //   k = 1;
          //   var markerHTML = new L.HtmlIcon({
          //     html: "<img class='leaflet-marker-icon leaflet-zoom-animated leaflet-interactive' src='http://raajjeguide.test/storage/categories/restaurant.svg' alt='markericon' />",
          //   });
          // });

          var markerHtml2 = L.divIcon({
            className: `custom-div-icon catCls-${a[3]}`,
            html: `<div class='marker-pin'><img src='${catIcon}' alt='markericon' /></div>`,
            iconSize: [32, 32],
            iconAnchor: [16, 16],
            popupAnchor: [0, 50]
          });
          

          var title = a[2];
          var marker = L.marker(new L.LatLng(a[0], a[1]), { icon: markerHtml2});
          marker.bindPopup(title, {offset: new L.Point(0, -50)});
          markers.addLayer(marker);
          k++;
        }

        map.addLayer(markers);
    }
  }

  liefletMapInIt();


}); 