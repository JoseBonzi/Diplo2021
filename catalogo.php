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
 <section id="contenido">
     <h2>Catálogo:</h2>
     <nav id="btn_cat">
         <ul>
             <li><a href="catalogo.php?id=sc#contenido">Sillón Capri</a></li>
             <li><a href="catalogo.php?id=mi#contenido">Mesa Impanema</a></li>
             <li><a href="catalogo.php?id=bv#contendio">Banco Venecia</a></li>
         </ul>
     </nav>
     <?php 
      if  (isset($_GET['id'])) {
     switch ($_GET['id'])   {
         case 'sc':
            $producto = 'Producto: Sillón Capri.';
            $precio = 'Precio: $345.0.';
            $caracteristicas = 'Características: Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
            $imagen = 'sillon1.jpg';
         break;
            
         case 'mi':
            $producto = 'Producto: Mesa Ipanema.';
            $precio = 'Precio: $ 500.00.';
            $caracteristicas = 'Características: Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
            $imagen = 'ipanema.jpg';
         break;
 
         case 'bv':
            $producto = 'Producto: Banco Venecia.';
            $precio = 'Precio: $ 450.00.';
            $caracteristicas = 'Características: Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
            $imagen = 'venecia.jpg';
         break;

        }
      ?>
      <div id="catalogo">
         <div id="primeros3items">
             <p><?php echo $producto; ?></p>
             <p><?php echo $precio; ?></p>
             <p><?php echo $caracteristicas; ?></p>
         </div>
         <div id="imagenprod">
             <img src="imagenes/<?php echo $imagen;?>" class="ajuste-img">
         </div>
      </div>
      <?php } ?>
 </section>
 <footer>
     Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a>
 </footer>
</section>
</body>
</html>