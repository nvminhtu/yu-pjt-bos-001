$(function() {
  var map;
  var viewMapLarger = 'https://www.google.com/maps/place/' + '49.46800006494457' + ',' + '17.11514008755796';
  var html = '<div class="place-name">ホテル＆レジデンス六本木</div>'+
                '<div class="place-address">Nhật Bản, 〒106-0031 Tōkyō-to, Minato-ku, Nishiazabu, 1 Chome−11−6, ホテル＆レジデンス六本木</div>'
                 + '<div class="place-view"><a target="_blank" href="'+ viewMapLarger +'">Google Mapで見る</a></div>';
  map = new GMaps({
    el: '#gmap',
    lat: 35.660356,
    lng: 139.72454600000003,
    zoom: 17
  });
  map.addMarker({
      lat: 35.660356,
      lng: 139.72454600000003,
      infoWindow: {
        content: html
      }
    });
});
