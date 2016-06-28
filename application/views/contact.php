<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(8.6415781,99.8955737);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("Map"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<div class="wrapper bgded overlay" style="background-image:url('<?php echo base_url('img/homepage/n1.jpg')?>');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div style="margin: 0;">
        <p class="heading">Jadpai</p>
        <h2 class="heading">Contact</h2>
        <p>ติดต่อพวกเราได้ที judpai@gmail.com โทร:0881234567</p>
        <br><br>
      </div>
    </article>
   			<div id="Map" style="width:500px;height:380px; margin-left:auto; margin-right:auto;" ></div>
    <!-- ################################################################################################ -->
  </div>
</div>
<body>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
</body>
</html>