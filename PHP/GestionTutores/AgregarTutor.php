<!--Archivo que se encarga de almacenar los datos para agregar a un nuevo tutor a la base de datos-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../Recursos/Css/styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="../../Recursos/js/script.js"></script>
		<title>Mensajeria</title>
	</head>
	<body>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='../home.php'><span>Inicio</span></a></li>
				<li><a href='../GestionTutores/GestionTutores.php'><span>Gestionar Tutores</span></a></li>
				<li><a href='../GestionMensajes/GestionMensajes.php'><span>Gestionar Mensajes</span></a></li>
				<li><a href='../GestionEnvios/GestionEnvios.php'><span>Gestionar Envios</span></a></li>
				<li class='last'><a href='../GestionUsuarios/GestionUsuario.php'><span>Gestionar Usuarios</span></a></li>
			</ul>
		</div>
		<div class="formulario">
			<form id="AltaUsuario" name="AltaUsuario" method="post" onsubmit="return validar();" action="EnviarAgregarTutor.php"
			width="150" height="500">
				<span>Nombre:</span><input type="text" class="nombre" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<span>Apellidos:</span><input type="text" class="apellidos" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				<span>Alias:</span><input type="text" class="alias" name="alias" placeholder="Introduce un alias" pattern="^@[A-Za-z0-9_-]{1,15}$" required><br>
				<span>Facultad:</span><br>
				<input type="radio" name="facultad" value="opcion1" required>Opcion1<br>
				<input type="radio" name="facultad" value="opcion2" required>Opcion2<br>
				<input type="radio" name="facultad" value="opcion3" required>Opcion3<br>
				<input type="radio" name="facultad" value="opcion4" required>Opcion4<br>
				<input type="radio" name="facultad" value="opcion5" required>Opcion5<br>
				<input type="radio" name="facultad" value="opcion6" required>Opcion6<br>
				<input type="radio" name="facultad" value="opcion7" required>Opcion7
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	    <a href="javascript:window.history.back();">&laquo; Volver atras</a>
	    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../../recursos/js/main.js"></script>
		<script type="text/javascript" src="../../recursos/js/jquery.fullpage.js"></script>  
	</body>
</html>