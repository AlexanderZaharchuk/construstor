$(document).ready(function () {
    var map;
    var elevator;
    var myOptions = {
        zoom: 1,
        center: new google.maps.LatLng(0, 0),
        mapTypeId: 'terrain'
    };
    map = new google.maps.Map($('#map_canvas')[0], myOptions);

    var addresses = $("#addressMap").html();

    $.ajax({
        type: "GET",
        url: 'http://maps.googleapis.com/maps/api/geocode/json?address='+addresses+'&sensor=true',
        dataType : 'json',
        success: function(data){
            var p = data.results[0].geometry.location;
            var latlng = new google.maps.LatLng(p.lat, p.lng);
            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            map.setCenter(marker.getPosition());
            map.setZoom(15);
        }
    });
});
