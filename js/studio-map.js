$(function() {
  var map, latitude, longitude;
  var viewMapLarger;
  var idMap = '.gmap';
  var idPlaceName, idPlaceAddress;
  var numberMap = $('#studio-list').data('number');

  var mapItem = {};

  for(var i = 0 ; i < numberMap; i++) {
    idMap = '.gmap_' + i;
    idPlaceName = '.place_name_' + i;
    idPlaceAddress = '.place_address_' + i;

    latitude = $(idMap).data('lat');
    longitude = $(idMap).data('long');
    var placeName = $(idPlaceName).data('content');
    var placeAddress = $(idPlaceAddress).data('content');
    viewMapLarger = 'https://www.google.com/maps/place/' + latitude + ',' + longitude;
    var html = '<div class="place-name">'+ placeName +'</div>'+
                  '<div class="place-address">'+ placeAddress +'</div>'
                   + '<div class="place-view"><a target="_blank" href="'+ viewMapLarger +'">Google Mapで見る</a></div>';

    // init map
    mapItem[i] = new GMaps({
      el: idMap,
      lat: latitude,
      lng: longitude,
      zoom: 17,
      scrollwheel: false,
    });

    mapItem[i].addMarker({
        lat: latitude,
        lng: longitude,
        infoWindow: {
          content: html
        }
    });

  } // end loop
});
