<!-- Javascript -->

<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous">
</script>
<script src="https://d3js.org/d3.v3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.js"></script>



<script type="text/javascript">


d3.json("data/county_loc.json", function(data) {
  var longitudes = ['x'];
  var latitudes = ['y'];
  // console.log(data);
  data.forEach(function(d, i) {


  	longitudes.push(d.longitude);
  	latitudes.push(d.latitude);


  });


  
  var chart = c3.generate({
    data: {
      xs: {
      	'y' : 'x'	
      },
      columns: [
      	latitudes,
      	longitudes
      ],
      type: 'scatter'
    }
  });
});



// var chart = c3.generate({
//     data: {
//         url: 'data/county_loc.json',
//         mimeType: 'json',
        
//       	x: 'longitude',
//       	y: 'latitude',
	      
//         type: 'scatter'
//     },
//     axis: {
//         x: {
//             label: 'Longitude',
//         },
//         y: {
//             label: 'Latitude'
//         }
//     }
// });





</script>



</body>
</html>