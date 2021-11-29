<?php include("header.php");  ?>



	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro</h1>
			</div>

<div class="contenedor">

	<h1 class="intro">Introduzca sus datos:</h1>
	<div class="form">

		<form action="/action_page.php" method="POST">
			<label for="fname">Nombre:</label>
			<input type="text" id="fname" name="nombre_usuario"><br><br>
			<label for="lname">Apellido Paterno:</label>
			<input type="text" id="lname" name="apellido"><br><br>
			<label for="fname">CURP:</label>
			<input type="text" id="fname" name="curp"><br><br>
			<label for="lname">Direccion:</label>
			<input type="text" id="lname" name="direccion"><br><br>
			<label for="lname"> Teléfono:</label>
			<input type="text" id="lname" name="telefono"><br><br>
			<label for="fname">Correo:</label>
			<input type="text" id="fname" name="correo"><br><br>
			<label for="lname">Contraseña:</label>
			<input type="text" id="lname" name="pasword"><br><br>
			<input type="submit" name="register">
		</form>
	</div>

	<div class="img">
		<img src="img/alum.jpg" height="350" width="500">
	</div>



</div>
			

			

<br><br><br><br>

			
			


		
	</section>

<?php include('footer.php') ?>

</body>
</html>

<?php 
	if(isset($_POST['register']))



?>