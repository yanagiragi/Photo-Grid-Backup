<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pixiv</title>
	<script
			  src="https://code.jquery.com/jquery-3.1.0.min.js"
			  integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
			  crossorigin="anonymous"></script>
	
	<style>
		body{
			background: url(http://cdn.wonderfulengineering.com/wp-content/uploads/2016/01/black-wallpaper-3.jpg);
			repeat: norepeat;
		}
		#photos {
		   /* Prevent vertical gaps */
		   line-height: 0;
		   
		   -webkit-column-count: 5;
		   -webkit-column-gap:   0px;
		   -moz-column-count:    5;
		   -moz-column-gap:      0px;
		   column-count:         5;
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
	<div class="title">
		<div class="short-block">
			Welcome,"<a href="Enter_the_Maze/" >Lambs</a>"
		</div>
	</div>
	<div style="overflow: hidden; height: 1920px; opacity: 0.6">	
	<section id="photos">
		<?php
			for($i = 0; $i < 37; ++$i)
				echo '<div class="pixiv"><img src="Assets/bg.png"/></div>';
		?>
		
	</section>
	</div>	
	<script>
		function getRandom(){
			return Math.floor(Math.random()* 37);
		}
		var imgs;
		
		$.getJSON("Assets/img.json",function(data){}).done(function(data){			
			imgs = data;
			for( a2 in data){
				var now = getRandom();
				
				if($('img')[now].src != "http://??????/Assets/bg.png"){
					for(var a = 0; a < 37; ++a){
						if($('img')[a].src == "http://?????/Assets/bg.png"){
							$('img')[a].src = ("Assets/" + data[a2]);
							console.log(a);
							break;
						}
					}
				}else{
					console.log(now);
					$('img')[now].src = ("Assets/" + data[a2]);
				}
			}
		});
	</script>
	
</body>
</html>
