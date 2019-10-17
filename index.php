<?php include("php_file_tree.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos Online</title>

    <link href="https://vjs.zencdn.net/7.6.5/video-js.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/default/default.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/miestilo.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

</head>
<body>

<!-- efecto de estrellas -->
<div id="particles-js"> </div>

<div class="container">
    <div class="row">

    <div class="col-lg" id="instructions">   
            <video id="my_video_1" class="vjs-16-9 vjs-big-play-centered video-js"
                controls preload="none" data-setup='{"playbackRates": [0.5, 1, 1.25, 1.5, 2] }'>
              <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
            </video>       
          </div>

          <div class="col-lg-3 mt-4 rounded shadow-lg listado">
            <h4 class="text-center">Listado de Cursos</h4>
            <hr class="bg-light">
	
            <?php	echo php_file_tree("./", "javascript:changevideo('[link]');");		?>
        </div>
          
    </div>
</div>

    <script src='https://vjs.zencdn.net/7.6.5/video.js'></script>
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/php_file_tree.js" type="text/javascript"></script>

</body>
</html>