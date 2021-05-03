<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDU team</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="css/demo.css">
  
</head>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand " href="#">MOVIE STOCK</a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav sm-right">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Main</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prochart/charts.php">Graphs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
      </div>
      
      <!-- <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-info" type="submit">Search</button>
      </form> -->
    </nav>
  
 <main>
  <article>
  
	<h2>Netflix Is Americans' Platform of Choice for TV Content</h2>
	<p>% of Americans who prefer to watch video content on TV on the following platforms </p>

	<div id="graph"></div>
	<br>
	<br>
	<hr>
	<h2>Global percentage of Netflix platform users since 2000</h2>
	<div id="graph2"></div>
	<br>
	<br>
	<hr>
	<h2>Netflix platform usage indicator percentage between the two states</h2>
	<p>Kazakhstan vs USA </p>
	<div id="graph3"></div>
	<br>
	<br>
	<br>
	<hr>
	
  </article>
 </main>
 
  <footer class="credit">Author:<a title="Awesome web design code & scripts" href="https://www.netflix.com/kz/" target="_blank">Netflix platform</a></footer>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      
<!-- Graph JS -->
<script src="js/graph.js"></script>
  
      	<script>
		$(function(){
			$('#graph').graphify({
				//options: true,
				start: 'combo',
				obj: {
					id: 'ggg',
					width: 775,
					height: 375,
					xGrid: false,
					legend: true,
					title: 'Age < 18 vs Age > 18',
					points: [
						[7, 26, 33, 74, 12, 49, 33],
						[32, 46, 75, 38, 62, 20, 52]
					],
					pointRadius: 3,
					colors: ['blue', 'red'],
					xDist: 90,
					dataNames: ['Age<18 ', ' Age>18'],
					xName: 'Day',
					tooltipWidth: 15,
					animations: true,
					pointAnimation: true,
					averagePointRadius: 10,
					design: {
						tooltipColor: '#fff',
						gridColor: 'grey',
						tooltipBoxColor: 'green',
						averageLineColor: 'green',
						pointColor: 'green',
						lineStrokeColor: 'grey',
					}
				}
			});
			$('#graph2').graphify({
				start: 'donut',
				obj: {
					id: 'lol',
					legend: false,
					showPoints: true,
					width: 775,
					legendX: 450,
					pieSize: 200,
					shadow: true,
					height: 400,
					animations: true,
					x: [2000, 2001, 2002, 2003, 2004, 2005, 2006],
					points: [17, 33, 64, 22, 87, 45, 38],
					xDist: 90,
					scale: 12,
					yDist: 35,
					grid: false,
					xName: 'Year',
					dataNames: ['Amount'],
					design: {
						lineColor: 'red',
						tooltipFontSize: '20px',
						pointColor: 'red',
						barColor: 'blue',
						areaColor: 'orange'
					}
				}
			});
			var bar = new GraphBar({
				attachTo: '#graph3',
				special: 'combo',
				height: 725,
				width: '100%',
				yDist: 60,
				xDist: 150,
				showPoints: false,
				xGrid: false,
					legend: true,
					points: [
						[17, 21, 51, 74, 12, 49, 33],
						[32, 15, 75, 20, 45, 90, 52]
					],
					colors: ['red', 'orange'],
					dataNames: ['Kazakhstan', 'USA'],
					xName: 'Day',
					tooltipWidth: 15,
					design: {
						tooltipColor: '#fff',
						gridColor: 'black',
						tooltipBoxColor: 'green'
						// averageLineColor: 'blue',
					}
			});
			bar.init();
		});
	</script>
  </body>
</html>