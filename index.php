<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body background="imagenes/buscamina_fond.jpg">

<div class="container">

		<header>
			<div class="row">

			<div class="col-sm-12">

			<img src="imagenes/encabezado.jpg">
					
			
			</div>
			</div>

		</header>


		<main>

			<div class="row">
			<div class="col-sm-12">
			         	 <br><br><br>
			         	 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"<span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span> Como Jugar ? 
			         	 </button>

			        <div id="myModal" class="modal fade" role="dialog" >
			       	<div class="modal-dialog">

			        <div class="modal-content" style="background-color: gray; color: white;">

			        <div class="modal-header">

			            <button type="button" class="close" data-dismiss="modal">&times;</button>

			              <h4 class="modal-title" background-color="gray">Como jugar buscaminas?</h4>

			        </div>
			        <div class="modal-body" background-color="gray">
			            <p> - Jugar buscaminas es muy facil, apenas cargue la paguina el juego estara listo para que comiences.</p>
			            <p> - El campo estara conformado por una matriz de 3x3, con recuadros de color gris que emulara al campo minado, simplemente dale click a cada recuadros.</p>
			            <p> - Si el recuadro se vuelve verde, quiere decir que estas a salvo.</p>
			            <p> - Si sale un mensaje de GAME OVER y el recuadro se vuelve rojo, quiere decir que estas muerto.</p>
			            <p> - Una vez que pierdas, dale click al boton Reset para iniciar el juego nuevamente.</p>
				    </div>

				        <div class="modal-footer" background-color="gray">
				         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

				    </div>
				    </div>
				    </div>
        	</div>


        			


        			
        		<button type="button" OnClick="location.href='index.php'" class="btn btn-info btn-lg" value="Refresh" <span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span> Reset 
			    </button>
			   
			</div>
			</div>

							<div id="myModal2" class="modal fade" role="dialog" >
					       	<div class="modal-dialog">

					        <div class="modal-content" style="background-color: gray; color: white;">

							        <div class="modal-header">

							            <button type="button" class="close" data-dismiss="modal">&times;</button>

							              <h4 class="modal-title" background-color="gray">Perdiste !!!</h4>

							        </div>
							        <div class="modal-body" background-color="gray">
							            <p> - Pisaste una mina. volaste en 1000 pedazos.</p>
							            
								    </div>

						        <div class="modal-footer" background-color="gray">
						         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

						    </div>
						    </div>
						    </div>
						    </div>


					<div class="row">
					<br>
					<br>
						
						<div class="col-sm-12">

							<table border="1px">
							  
								  <tr style="border: 5px; border-color: black">
									    <td style="width: 300px; height: 300px; background-color: gray" id="click1" onclick="stuff1()"></td>	
									    <td style="width: 300px; height: 300px; background-color: gray" id="click2" onclick="stuff2()"></td>
									    <td style="width: 300px; height: 300px; background-color: gray" id="click3" onclick="stuff3()"></td>
								  </tr>
								  <tr style="border: 5px; border-color: black">
									    <td style="width: 300px; height: 300px; background-color: gray" id="click4" onclick="stuff4()"></td>
									    <td style="width: 300px; height: 300px; background-color: gray" id="click5" onclick="stuff5()"></td>
									    <td style="width: 300px; height: 300px; background-color: gray" id="click6" onclick="stuff6()" onclick="mostrar()">
									    
									    	
											<img src="imagenes/bomba.gif"  width="300px" height="300px" id="click6" style="visibility: hidden">
											

									    </td>
								  </tr>
								  <tr style="border: 5px; border-color: black">
									    <td style="width: 300px; height: 300px; background-color: gray" id="click7" onclick="stuff7()"></td>
									    <td style="width: 300px; height: 300px; background-color: gray" id="click8" onclick="stuff8()"></td>
									    <td style="width: 300px; height: 300px; background-color: gray" id="click9" onclick="stuff9()"></td>
								  </tr>

							</table>



							<script>	

							function stuff1()
							{
							var clicka = document.getElementById("click1");
							clicka.style = "background-color:green; width: 300px; height: 300px";
							}

							function stuff2()
							{
							var clicka = document.getElementById("click2");
							clicka.style = "background-color:green; width: 300px; height: 300px";
							}

							function stuff3()
							{
							var clicka = document.getElementById("click3");
							clicka.style = "background-color:green; width: 300px; height: 300px";
							}

							function stuff4()
							{
							var clicka = document.getElementById("click4");
							clicka.style = "background-color:green; width: 300px; height: 300px";
							}

							function stuff5()
							{
							var clicka = document.getElementById("click5");
							clicka.style = "background-color:green; width: 300px; height: 300px";
							}

							function stuff6()
							{
							var clicka = document.getElementById("click6");
							clicka.style = "background-color:red; width: 300px; height: 300px";
							clicka.style.backgroundImage = "url(imagenes/bomba.gif)";
							$("#myModal2").modal();

							//alert ("GAME  OVER");
							}

							function stuff7()
							{
							var clicka = document.getElementById("click7");
							clicka.style = "background-color:green; width: 300px; height: 300px";
							}

							function stuff8()
							{
							var clicka = document.getElementById("click8");
							clicka.style = "background-color:green; width: 300px; height: 300px";
							}

							function stuff9()
							{
							var clicka = document.getElementById("click9");
							clicka.style = "background-color:green; width: 300px; height: 300px";
							}

							//function mostrar()
							//{
							//var clicka = document.getElementById("oculto");
							//clicka.style = "display: block";
							//}

							//function mostrar()
							//{
							//var clickb = document.getElementById("click6");	
							//document.getElementById("mostrar").style.visibility = "visible";
							//}


							</script>

						</div>
						

</div>	
<br>
<br>	
</body>
</html>