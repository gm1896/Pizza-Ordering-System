<!DOCTYPE html>
<html>
 <head>
    <title>IP Demo</title>
    <link type="text/css" rel="stylesheet" href="stylesheet1.css">
  </head>
  <a href="table.php"><button class=myButton>Back</button></a>
<body align="center">
<section id="wrapper" align="center">
<b><p align="center">This outlet will be delivering your pizza.If you want you can go and collect it!</p></b>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<article>
</article>
<script>
function success(position) {
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '600px';
  document.querySelector('article').appendChild(mapcanvas);
  var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  var options = {
    zoom: 15,
    center: coords,
    mapTypeControl: false,
    navigationControlOptions: {
        style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcontainer"), options);
  var marker = new google.maps.Marker({
      position: coords,
      map: map,
      title:"You are here!"
  });
}
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}
</script>
</section>
<a href="table.php"><button class=myButton1>Cancel Order</button></a>
</body>
</html>