<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido_c">
    <h2>Contáctenos</h2>
    <div id="contactenos">
        <form method="POST" action="enviar_consulta.php">
          <input type="text" name="nombre" placeholder="Nombre" maxlength="30" class="bordes" required>
          <input type="text" name="apellido" placeholder="Apellido" maxlength="50" class="bordes" required>
          <input type="number" name="edad" placeholder="Edad" min="17" max="105" class="bordes" required>
          <input type="email" name="correo" placeholder="Correo Electronico" maxlength="60" class="bordes" required>
          <textarea name="consulta" id="motivoconsulta" cols="30" rows="10" placeholder="Motivo de Consulta" maxlength="150" class="bordes" required></textarea>
          <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje" maxlength="200" class="bordes" required></textarea>
          <input type="submit" class="bordes bg_hover">
        </form>  
        <?php 
        if(isset($_GET['ok'])) {
            echo "<h3>¡Consulta recibida!</h3>";
        }
        ?>
       <p><a href="clientes.php">Información para clientes.</a></p>
    </div>
    </section>
<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>