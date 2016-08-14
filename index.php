<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panties</title>
	<style>
		body{
			background: url(http://cdn.wonderfulengineering.com/wp-content/uploads/2016/01/black-wallpaper-3.jpg);
			repeat: norepeat;
		}
		#photos {
		   /* Prevent vertical gaps */
		   line-height: 0;
		   
		   -webkit-column-count: 9;
		   -webkit-column-gap:   0px;
		   -moz-column-count:    9;
		   -moz-column-gap:      0px;
		   column-count:         9;
		   column-gap:           0px;
		}

		#photos img {
		  /* Just in case there are inline attributes */
		  width: 100% !important;
		  height: auto !important;
		}

		@media (max-width: 1200px) {
		  #photos {
		  -moz-column-count:    4;
		  -webkit-column-count: 4;
		  column-count:         4;
		  }
		}
		@media (max-width: 1000px) {
		  #photos {
		  -moz-column-count:    3;
		  -webkit-column-count: 3;
		  column-count:         3;
		  }
		}
		@media (max-width: 800px) {
		  #photos {
		  -moz-column-count:    2;
		  -webkit-column-count: 2;
		  column-count:         2;
		  }
		}
		@media (max-width: 400px) {
		  #photos {
		  -moz-column-count:    1;
		  -webkit-column-count: 1;
		  column-count:         1;
		  }
		}
		.title{
			position: absolute;
			z-index: 999;
			font-family: monospace;
			font-size: 7em;
			text-align: center;
			width: 100%;
			height: 100%;
			margin-top: 20%;
		}
		.short-block{
			background-color:snow;
			opacity: 0.7;
			width: 100%;
			margin-left: 0%;
			border-radius: 30px;
		}
		.short-block:hover{
			transform : rotateY("180deg");
		}
		a{
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body style="overflow: hidden; margin: 0px;">
	<div>
	<section id="photos">
		<?php
			for($i = 0; $i < 62; ++$i)
				echo '<div class="pixiv"><img src="Assets/Storage/' . $i .'.jpeg"/></div>';
		?>
	</section>
	</div>	
</body>
</html>
