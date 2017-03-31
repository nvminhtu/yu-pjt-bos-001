$(function() {
  var map, latitude, longitude;
  var viewMapLarger;
  var idMap = '#gmap';
  var idPlaceName, idPlaceAddress;
  var numberMap = $('#studio-list').data('number');

  var mapItem = {};

  for(var i = 0 ; i < numberMap; i++) {
    idMap = '#gmap_' + i;

    //console.log(idMapArea);
    latitude = $(idMap).data('lat');
    longitude = $(idMap).data('long');
    viewMapLarger = 'https://www.google.com/maps/place/' + latitude + ',' + longitude;
    var html = '<div class="place-name">ホテル＆レジデンス六本木</div>'+
                  '<div class="place-address">Nhật Bản, 〒106-0031 Tōkyō-to, Minato-ku, Nishiazabu, 1 Chome−11−6, ホテル＆レジデンス六本木</div>'
                   + '<div class="place-view"><a target="_blank" href="'+ viewMapLarger +'">Google Mapで見る</a></div>';

    // init map
    mapItem[i] = new GMaps({
      el: idMap,
      lat: latitude,
      lng: longitude,
      zoom: 17
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
