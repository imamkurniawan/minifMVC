
<title>:: myMap </title>
</head>
<body>
<div class="box">
  <a href="<?php echo HOME_PATH; ?>home">Back to homepage </a>
  <div id="googleMap" style="width:100%;height:500px;"></div>
</div>


<script>
function myMap() {
  var mapProp= {
    center:new google.maps.LatLng(-6.9,107.62),
  	zoom:15,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC74zwL284WlUuLDdCtPEOvRNd7eE8h_08&callback=myMap"></script>
</body>
</html>
