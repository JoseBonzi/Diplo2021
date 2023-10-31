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
    <section id="contenido_n">
    <h2 class="titulo_n">Noticias</h2>
    <?php 
    $noticias = array (
        array('titulo'=>'Comienzo de Tecnicatura de Programación.','texto'=>'El comienzo de las clases se van a dar el díez de abril y se van a dar las clases semi-presencial, pidiendo el pase sanitario.','imagen'=>'utn.png'), 
        array('titulo'=>'Curso de Desarrollador de Videojuegos.','texto'=>'El curso comienza 10-03-2022, consta con una duracion de 3 meses (90 horas). Con modalidad virtual. Dictada por la UTN.','imagen'=>'desarrollovideojuego.jpg'),
        array('titulo'=>'Mercado Libre busca cubrir puestos en Córdoba.','texto'=>'La  empresa argentina sumará 225 nuevos colaboradores.','imagen'=>'meli.jpg'),
        array('titulo'=>'Trabajo en Córdoba: VN Global busca sumar empleados.','texto'=>'La firma busca cubrir cerca de mil puestos. Las vacantes y cómo postularse.','imagen'=>'vnglobal.jpg')
    ); 

    for ($i=0; $i<count($noticias); $i++) {
    ?>
    <div class="noticias">
        <h3 class="titulophp"><?php echo $noticias[$i]['titulo'];?></h3>
        <p class="textophp"><?php echo  $noticias[$i]['texto']; ?></p>
        <img src="imagenes/<?php echo $noticias[$i]['imagen']?>" class="ajuste-img">
    </div>    
    <?php } ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>