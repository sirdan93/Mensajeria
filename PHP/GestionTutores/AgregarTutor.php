<!--Archivo que se encarga de almacenar los datos para agregar a un nuevo tutor a la base de datos-->
<!DOCTYPE html>
<?php
	include '../modulos/conectar.php';
	include '../modulos/comprobar.php';
?>
<html>
	<head>
		<?php
			include '../modulos/head.php';
		?>
	</head>
	<body>
		<div class="container content-section text-center">
			<!-- Aquí empieza el formulario -->
			<form role="form" method="POST" action="EnviarAgregarTutor.php" class="col-md-4 col-md-offset-4">
			<h3>Ingresa nuevo Tutor</h3>
				<!-- Nombre del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				</div>

				<!-- Apellidos del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				</div>

				<!-- Alias del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="alias" placeholder="Introduce el alias de Telegram" pattern="^@[A-Za-z0-9_-]{1,15}$" required>
				</div>

				<!-- Facultad del tutor -->
				<div class="form-group">
					<select class='form-control' name="facultad">
						<?php
							$query ="SELECT * FROM facultad"; //Selecciona todas las tablas de la tabla facultad
							$result = mysqli_query($link, $query); //Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

							//Este bucle permite recorrer la consulta y que muestre cada elemento, para poder seleccionarlo.
							while ($registro = mysqli_fetch_array($result)) {
									echo "<option value='".$registro['idfacultad']."'>".$registro['facultad']."</option>";
							}
						?>
					</select>
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
				<input type="button" class="btn btn-danger" onclick="window.history.back();" value="Volver atras">
			</form>
		</div>

		<!-- Footer del HTML -->
	    <footer>
			<?php
				include '../modulos/footer.php';
			?>
	    </footer>
	</body>
</html>