$(function() {
  var map, latitude, longitude;
  var viewMapLarger;
  var idPlaceName, idPlaceAddress;
  var mapItemFooter;

  idMap = '#map_footer';
  idPlaceName = '.map_place_name';
  idPlaceAddress = '.map_place_address';

  latitude = $(idMap).data('lat');
  longitude = $(idMap).data('long');
  var placeName = $(idPlaceName).data('content');
  var placeAddress = $(idPlaceAddress).data('content');
  viewMapLarger = 'https://www.google.com/maps/place/' + latitude + ',' + longitude;
  var html = '<div class="place-name">'+ placeName +'</div>'+
                '<div class="place-address">'+ placeAddress +'</div>'
                 + '<div class="place-view"><a target="_blank" href="'+ viewMapLarger +'">Google Mapで見る</a></div>';

    // init map
   mapItemFooter = new GMaps({
      el: idMap,
      lat: latitude,
      lng: longitude,
      zoom: 17,
      scrollwheel: false,
    });

    mapItemFooter.addMarker({
        lat: latitude,
        lng: longitude,
        infoWindow: {
          content: html
        }
    });

});
