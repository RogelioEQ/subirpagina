<?php
include_once('parciales/cab.php'); 
$a=rand(0,10);
$b=rand(0,10);
?>

<div class="container">
	<div class="section">
		
		<div class="row">
			<div class="col s12 center">
				<h3 id="titulo">¡Póngase en contacto con nosotros!</h3>
				<br>
				<h5 class="left-align light">Gracias por su visita a Rubolmet. Por favor, rellene el siguiente formulario y nos pondremos en contacto con usted tan pronto como sea posible.</h5>
			</div>
			<div class="col s12 center"id="res">
				
			</div> 

			<div class="col s12 m12">
				<br>

				<form action="Proceso.php" class="formValidate" id="formValidate" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix amber-text">account_circle</i>
							<input id="nombre" type="text" name="nombre" class="validate"data-error=".errorTxt1">
							<label for="nombre">Nombre Completo:</label>
							<div class="errorTxt1"></div>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix amber-text">email</i>
							<input id="email" type="email" name="email" class="validate"data-error=".errorTxt2">
							<label for="email">Email:</label>
							<div class="errorTxt2"></div>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix amber-text">local_phone</i>
							<input id="tel" type="tel" name="tel" class="validate"data-error=".errorTxt3">
							<label for="tel">Teléfono:</label>
							<div class="errorTxt3"></div>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix amber-text">question_answer</i>
							<textarea id="ccomment" name="ccomment" class="materialize-textarea" style="padding-bottom: 0px; min-height: 8rem; height: 23px;" data-error=".errorTxt4" required></textarea>
							<label for="ccomment">En que le podemos ayudar:</label>
							<div class="errorTxt4"></div>
						</div>	
						<div class="input-field col s6">
							<i class="material-icons prefix amber-text">verified_user</i>
							<input id="verificacion" type="text" name="verificacion" class="validate"data-error=".errorTxt5">
							<input id="valora" type="hidden" name="valora" value="<?=$a?>">
							<input id="valorb" type="hidden" name="valorb" value="<?=$b?>">
							<label for="tel"><?=$a?>+<?=$b?> =</label>
							<div class="errorTxt5"></div>
						</div>
						<div class="col s12 m12 center">

							<button class="btn waves-effect waves-light amber accent-4" type="submit"name="btn">Enviar
								<i class="material-icons right">send</i>
							</button>

						</div>
					</div>
				</form>

			</div>



			<div class="col s12 m12">

				<h3 class="blue-text text-darken-2 center">Nuestra Ubicación</h3>
				<div class="iframe-container">
					
					<h1>hola aqui entra el mapa</h1>
					
				</div>	
				<h6>
					<p><i class="material-icons red-text">place</i>Av.Nestor Galindo, El Alto No.123
						Lorem ipsum dolor sit amet, consectetur adipisicing elit
					</p></h6>


				</div>
				<div class="col s12 m12">
					<h3 class="blue-text text-darken-2 center">VENTAS · ADMINISTRACIÓN</h3>

					<ul class="collection">
						<li class="collection-item avatar grey lighten-2">
							<h5 class="blue-text text-darken-2 center">INFORMACIÓN PARA CONTACTO DIRECTO</h5>

							<p><b>Admin</b><br><i class="fab fa-whatsapp green-text"></i>	76554321<br> <i class="far fa-envelope blue-text"></i> admin@hotmail.com
							</p>
							<p><b>Admin</b><br><i class="fab fa-whatsapp green-text"></i>	23456789-76554321<br> <i class="far fa-envelope blue-text"></i> admin@hotmail.com
							</p>
							<p><b>Admin</b><br><i class="fab fa-whatsapp green-text"></i>	23456789-76554321<br> <i class="far fa-envelope blue-text"></i> admin@hotmail.com
							</p>
							<p><b>Admin</b><br><i class="fab fa-whatsapp green-text"></i>	23456789-76554321<br> <i class="far fa-envelope blue-text"></i> admin@hotmail.com
							</p>

						</li>

					</ul>
				</div>

			</div>

		</div>
	</div>

	<?php include_once('parciales/foot1.php');?>
	<script src="js/contacto.js" type="text/javascript" charset="utf-8" async defer></script>
	<?php include_once('parciales/foot2.php'); ?>
	
