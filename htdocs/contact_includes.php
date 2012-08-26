<?php 
if ($_SERVER['HTTP_HOST'] ==  'balancegb.com')
{
?>
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAXEw5QPlWo6gkDN8RbZNMqhQnVYdJWkiPRNioiy0VHjMgOnp67xQRy8Gc4lmZNvXaR3o3dD0VGpLejQ" type="text/javascript"></script>
<?php 
}
else
{
?>
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAXEw5QPlWo6gkDN8RbZNMqhSdQHDDDf7Q2Cs8hDOMZ2LmeCdN3BR6XYG5Nx5SaF_Tj8IKPsSvt7DIOQ" type="text/javascript"></script>
<?php 
}
?>
       <script type="text/javascript">

           function load() {

               if (GBrowserIsCompatible()) {

                   var map = new GMap2(document.getElementById("map"));

                   map = new GMap2(document.getElementById("map"));

                   map.addControl(new GLargeMapControl());

                   map.addControl(new GMapTypeControl());



                   var icon = new GIcon();

                   icon.image = "http://www.google.com/mapfiles/marker.png";

                   icon.shadow = "http://www.google.com/mapfiles/shadow50.png";

                   icon.iconSize = new GSize(20, 34);

                   icon.shadowSize = new GSize(37, 34);

                   // JB - 5/24/07 - Replaced double quotes with single quotes to allow for escape character, on the rest that could contain single quote\'

                   var lat = '44.4839130';

                   var lng = '-87.9216170';

               

                   var point = new GPoint(lng, lat);

                   map.setCenter(new GLatLng(lat, lng), 15);

                   var marker = new GMarker(point);

                   map.addOverlay(marker);



                   var html = "<table><tr><td><img src='/images/small_logo.png'/></td><td>Balance Chiropractic of Green Bay</a></td></table>";

                   html = html + "<br/><a href='http://maps.google.com/maps?saddr=3221+Voyager+Dr,+Green+Bay,+WI+54311' target='_blank'>Get Directions</a>";

                   marker.openInfoWindowHtml(html);

               }

           }



           

        </script>



<script type="text/javascript">



    map = new GMap2(document.getElementById("mapcanvas"));

    map.setCenter(new GLatLng(44.26, -88.40), 12);

    map.clearOverlays();

    map.addControl(new GSmallMapControl());

    map.addControl(new GMapTypeControl());



</script>

<style>

        #leftNavigation ul

        {

        	list-style:none;

        	font-family:Tahoma;

        	color:Black;

        }

        

        #leftNavigation img

        {

        	border:none;

        }

        

        

#mapcanvas

{height:600px;

 width:700px;



}#map{ width:587px;

 height:350px;

 margin-top:20px;

   border:1px solid #dadada;

}#content{	padding-top:30px;	padding-left:20px;}

        

    </style>
