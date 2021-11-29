<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Materias</h1>
			</div>

		
		<div class="contenedor">

			<h1 class="intro">Registro de mascota</h1>

			<div class="form2">

				<form method = "post" action = "/php/php_form_introduction.htm">
					<table>
					   <tr>
						  <td>Nombre</td> 
						  <td><input type = "text" name = "nombre_mascota"></td>
					   </tr>
					   
					   <tr>
						  <td>Edad:</td>
						  <td><input type = "text" name = "edad"></td>
					   </tr>
					   
					   <tr>
						  <td>Raza:</td>
						  <td><input type = "text" name = "raza"></td>
					   </tr>
					   
					   <tr>
						  <td>Descripcion:</td>
						  <td><textarea name = "descripcion" rows = "5" cols = "40"></textarea></td>
					   </tr>
					   
					   <tr>
						  <td>Género:</td>
						  <td>
							 <input type = "radio" name = "gender" value = "female">Female
							 <input type = "radio" name = "gender" value = "male">Male
						  </td>
					   </tr>
					   
					   <tr>
						  <td>
							 <input type = "submit" name = "submit" value = "Submit"> 
						  </td>
					   </tr>
					</table>
				 </form>
			</div>

			<div class="img">

				<img src="img/clase.jpg" height="350" width="500">
			</div>

		</div>
<br><br><br>

		</div>
	</section>

<?php include("footer.php"); ?>

</body>
</html>