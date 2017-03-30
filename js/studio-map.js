$(function() {
  var map, latitude, longitude;
  
  var latitude = $('.maparea').data('lat'),
      longitude = $('.maparea').data('long');

  var viewMapLarger = 'https://www.google.com/maps/place/' + latitude + ',' + longitude;
  var html = '<div class="place-name">ホテル＆レジデンス六本木</div>'+
                '<div class="place-address">Nhật Bản, 〒106-0031 Tōkyō-to, Minato-ku, Nishiazabu, 1 Chome−11−6, ホテル＆レジデンス六本木</div>'
                 + '<div class="place-view"><a target="_blank" href="'+ viewMapLarger +'">Google Mapで見る</a></div>';

  // init map
  map = new GMaps({
    el: '#gmap',
    lat: latitude,
    lng: longitude,
    zoom: 17
  });
  map.addMarker({
      lat: latitude,
      lng: longitude,
      infoWindow: {
        content: html
      }
    });
});
