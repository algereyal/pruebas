<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--script src="_js/v3.14.1/ol.js" type="text/javascript"></script!-->

		<TITLE>Seleccion de Servicios</TITLE>
		<style>
			
			html, body{
			      width:100%;
			      height:100%;
			      padding:0;
			      margin:0;
			}
			
			#cuerpo{
				background:black;
				height:100%;
				width:100%;
				display:table;
				color:white;
				font-size:50px;
				text-align:center;
				vertical-align:middle;
			}
			#att{
				display:table-cell;
				width:50%;
				background:#cd3528;
				vertical-align:middle;
			}
			#telcel{
				display:table-cell;
				width:50%;
				background:#203b7e;
				vertical-align:middle;
			}
		</style>
	</head>
	<body  oncontextmenu="return false" >
	
		<div id="cuerpo" >
			  <div id="att" onclick="abrir('att')">
				   <img src="logos/iusacell.jpg" ><br/> 
				   <!--<img src="logos/att.png" ><br/> 
				  iusacell / att&t-->
			  </div>
			  <div id="telcel" onclick="abrir('telcel')">
				   <img src="logos/telcel.jpg" ><br/> 
				   <!--TELCEL-->
			  </div>
		</div>
		
		<script>
			function abrir(v){
				switch(v){
					case "att":
						window.location = "att"
						break;
					case "telcel":
						window.location = "telcel"
						break
				}
			}
		</script>
	</body>
</html>


