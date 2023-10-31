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
    <section id="contenido_cl">
       <h2 class="titulo_cl">Informacion para clientes.</h2>
       <div>
        <?php   
         include("conexion.php");
         $devolver_productos = mysqli_query($basedatos, "SELECT * FROM pedidos_cliente");
        
         
         while($listar_pedidos=mysqli_fetch_assoc($devolver_productos)) {

        ?>
        <div class="listado">
            <h5 class="h5"><?php echo $listar_pedidos['producto']; ?></h5>
            <p class="p_cl">Stock:<?php echo $listar_pedidos['cantidad'];?></p>
            <p class="p_cl">Precio:<?php echo $listar_pedidos['precio'];?>$</p>
        </div>
        <?php } ?>
      </div>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>