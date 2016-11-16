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
  var modData = [];
  var word = "";
  // console.log(data);
  data.forEach(function(d, i) {
  	word += d.longitude.toString() + " : " + d.latitude.toString() + ",\n";
    var item = [d.county, d.latitude, d.longitude];
    modData.push(item);
  });
  var x;
  console.log(word);

  
  var chart = c3.generate({
    data: {
      xs: {
      	word	
      },
      columns: modData,
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