<?php
date_default_timezone_set("America/Bogota");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Distribuidora Osman</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{background:#f5f6fa;}

/* HEADER */
header{
background:#111;
padding:15px 5%;
display:flex;
justify-content:space-between;
align-items:center;
color:white;
position:sticky;
top:0;
z-index:1000;
}

.logo{display:flex;align-items:center;gap:10px;}
.logo img{width:50px;border-radius:50%;}

nav a{
color:white;
text-decoration:none;
margin-left:25px;
transition:0.3s;
}

nav a:hover{color:#25D366;}

/* HERO */
.hero{
background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
url('https://images.unsplash.com/photo-1602810319428-019690571b5b');
background-size:cover;
background-position:center;
height:60vh;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:white;
}

.hero-logo{
width:220px;
margin-bottom:20px;
}

.btn{
padding:12px 25px;
background:#25D366;
color:white;
text-decoration:none;
border-radius:30px;
transition:0.3s;
}

.btn:hover{
background:#1ebc59;
transform:scale(1.05);
}

/* PRODUCTOS */
.productos{padding:60px 5%;}
.productos h2{text-align:center;margin-bottom:40px;}

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

.card{
background:white;
border-radius:15px;
overflow:hidden;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
transition:0.3s;
}

.card:hover{transform:translateY(-8px);}

.card img{
width:100%;
height:250px;
object-fit:cover;
}

.card-content{padding:20px;}
.precio{color:#25D366;font-weight:bold;margin:10px 0;}

.card button{
width:100%;
padding:10px;
border:none;
background:#111;
color:white;
border-radius:8px;
cursor:pointer;
}

.card button:hover{background:#25D366;}

/* MODAL */
.modal{
position:fixed;
inset:0;
background:rgba(0,0,0,0.8);
display:none;
justify-content:center;
align-items:center;
z-index:2000;
}

.modal-content{
background:white;
width:95%;
max-width:500px;
border-radius:15px;
padding:20px;
text-align:center;
position:relative;
}

.modal-content img{
width:100%;
height:300px;
object-fit:cover;
border-radius:10px;
margin-bottom:15px;
}

.cerrar{
position:absolute;
top:10px;
right:15px;
cursor:pointer;
font-weight:bold;
font-size:20px;
}

.modal-content button{
width:100%;
padding:12px;
border:none;
background:#25D366;
color:white;
border-radius:8px;
cursor:pointer;
margin-top:15px;
}

/* FOOTER */
footer{
background:#111;
color:white;
text-align:center;
padding:20px;
margin-top:40px;
}

/* WHATSAPP FLOAT */
.whatsapp{
position:fixed;
bottom:20px;
right:20px;
width:65px;
animation:float 2s infinite ease-in-out;
}

.whatsapp img{width:100%;}

@keyframes float{
0%{transform:translateY(0);}
50%{transform:translateY(-8px);}
100%{transform:translateY(0);}
}
</style>
</head>

<body>

<header>
<div class="logo">
<img src="img/DistribuidoraOsman.jpeg">
<h2>Distribuidora Osman</h2>
</div>

<nav>
<a href="#">Inicio</a>
<a href="#productos">Productos</a>
<a href="#">Contacto</a>
</nav>
</header>

<section class="hero">
<div>
<img src="img/DistribuidoraOsman.jpeg" class="hero-logo">
<h1>Productos Importados de China</h1>
<p>Los mejores precios para tu negocio
 
</p>
<p>- </p>
<a href="#productos" class="btn">Ver Productos</a>
</div>
</section>

<section class="productos" id="productos">
<h2>Nuestros Productos</h2>

<div class="grid">

<!-- ================== PRODUCTO 01 ================== -->
<div class="card">
<img src="img/productos/01.jpeg">
<div class="card-content">
<h3>Tabla de picar</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal01')">Ver Detalles</button>
</div>
</div>

<!-- ================== PRODUCTO 02 ================== -->
<div class="card">
<img src="img/productos/02.jpeg">
<div class="card-content">
<h3>Cortina</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal02')">Ver Detalles</button>
</div>
</div>


<!-- PRODUCTO 04 -->
<div class="card">
<img src="img/productos/04.jpeg">
<div class="card-content">
<h3>Cortina</h3>
<div class="precio">$5.000</div>
<button onclick="abrirModal('modal04')">Ver Detalles</button>
</div>
</div>

<!-- PRODUCTO 05 -->
<div class="card">
<img src="img/productos/05.jpeg">
<div class="card-content">
<h3>Pegante</h3>
<div class="precio">$2.000</div>
<button onclick="abrirModal('modal05')">Ver Detalles</button>
</div>
</div>

<!-- PRODUCTO 06 -->
<div class="card">
<img src="img/productos/06.jpeg">
<div class="card-content">
<h3>Sombrilla</h3>
<div class="precio">$11.500</div>
<button onclick="abrirModal('modal06')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 07 -->
<div class="card">
<img src="img/productos/07.jpeg">
<div class="card-content">
<h3>Cortina</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal07')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 08 -->
<div class="card">
<img src="img/productos/08.jpeg">
<div class="card-content">
<h3>Cortina</h3>
<div class="precio">$16.000</div>
<button onclick="abrirModal('modal08')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 09 -->
<div class="card">
<img src="img/productos/09.jpeg">
<div class="card-content">
<h3>Cortina</h3>
<div class="precio">$5.000</div>
<button onclick="abrirModal('modal09')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 10 -->
<div class="card">
<img src="img/productos/10.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$15.000</div>
<button onclick="abrirModal('modal10')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 11 -->
<div class="card">
<img src="img/productos/11.jpeg">
<div class="card-content">
<h3>Vela</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal11')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 12 -->
<div class="card">
<img src="img/productos/12.jpeg">
<div class="card-content">
<h3>Pebetero</h3>
<div class="precio">$6.800</div>
<button onclick="abrirModal('modal12')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 13 -->
<div class="card">
<img src="img/productos/13.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$24.000</div>
<button onclick="abrirModal('modal13')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 14 -->
<div class="card">
<img src="img/productos/14.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal14')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 15 -->
<div class="card">
<img src="img/productos/15.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$28.000</div>
<button onclick="abrirModal('modal15')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 16 -->
<div class="card">
<img src="img/productos/16.jpeg">
<div class="card-content">
<h3>Cartuchera</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal16')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 17 -->
<div class="card">
<img src="img/productos/17.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal17')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 18 -->
<div class="card">
<img src="img/productos/18.jpeg">
<div class="card-content">
<h3>Colores</h3>
<div class="precio">$8.000</div>
<button onclick="abrirModal('modal18')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 19 -->
<div class="card">
<img src="img/productos/19.jpeg">
<div class="card-content">
<h3>Colores</h3>
<div class="precio">$8.000</div>
<button onclick="abrirModal('modal19')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 20 -->
<div class="card">
<img src="img/productos/20.jpeg">
<div class="card-content">
<h3>Marcador</h3>
<div class="precio">$4.500</div>
<button onclick="abrirModal('modal20')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 21 -->
<div class="card">
<img src="img/productos/21.jpeg">
<div class="card-content">
<h3>Crayola</h3>
<div class="precio">$4.000</div>
<button onclick="abrirModal('modal21')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 22 -->
<div class="card">
<img src="img/productos/22.jpeg">
<div class="card-content">
<h3>Marcador</h3>
<div class="precio">$2.500</div>
<button onclick="abrirModal('modal22')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 23 -->
<div class="card">
<img src="img/productos/23.jpeg">
<div class="card-content">
<h3>Bolso-Peluche</h3>
<div class="precio">$8.000</div>
<button onclick="abrirModal('modal23')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 24 -->
<div class="card">
<img src="img/productos/24.jpeg">
<div class="card-content">
<h3>Bolso-Peluche-Infantil</h3>
<div class="precio">$14.500</div>
<button onclick="abrirModal('modal24')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 25 -->
<div class="card">
<img src="img/productos/25.jpeg">
<div class="card-content">
<h3>Colores</h3>
<div class="precio">$4.000</div>
<button onclick="abrirModal('modal25')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 26 -->
<div class="card">
<img src="img/productos/26.jpeg">
<div class="card-content">
<h3>Termo P</h3>
<div class="precio">$24.000</div>
<button onclick="abrirModal('modal26')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 27 -->
<div class="card">
<img src="img/productos/27.jpeg">
<div class="card-content">
<h3>Termo P</h3>
<div class="precio">$26.000</div>
<button onclick="abrirModal('modal27')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 28 -->
<div class="card">
<img src="img/productos/28.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$9.500</div>
<button onclick="abrirModal('modal28')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 29 -->
<div class="card">
<img src="img/productos/29.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal29')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 30 -->
<div class="card">
<img src="img/productos/30.jpeg">
<div class="card-content">
<h3>Termo P</h3>
<div class="precio">$24.500</div>
<button onclick="abrirModal('modal30')">Ver Detalles</button>
</div>
</div>

<!-- PRODUCTO 31 -->
<div class="card">
<img src="img/productos/31.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal31')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 32 -->
<div class="card">
<img src="img/productos/32.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal32')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 33 -->
<div class="card">
<img src="img/productos/33.jpeg">
<div class="card-content">
<h3>Vaso Pitillo</h3>
<div class="precio">$16.000</div>
<button onclick="abrirModal('modal33')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 34 -->
<div class="card">
<img src="img/productos/34.jpeg">
<div class="card-content">
<h3>Marcador</h3>
<div class="precio">$4.000</div>
<button onclick="abrirModal('modal34')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 35 -->
<div class="card">
<img src="img/productos/35.jpeg">
<div class="card-content">
<h3>Sombrilla</h3>
<div class="precio">$14.000</div>
<button onclick="abrirModal('modal35')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 36 -->
<div class="card">
<img src="img/productos/36.jpeg">
<div class="card-content">
<h3>Sombrilla</h3>
<div class="precio">$14.000</div>
<button onclick="abrirModal('modal36')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 37 -->
<div class="card">
<img src="img/productos/37.jpeg">
<div class="card-content">
<h3>Lapicero</h3>
<div class="precio">$2.000</div>
<button onclick="abrirModal('modal37')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 38 -->
<div class="card">
<img src="img/productos/38.jpeg">
<div class="card-content">
<h3>Crayola</h3>
<div class="precio">$3.000</div>
<button onclick="abrirModal('modal38')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 39 -->
<div class="card">
<img src="img/productos/39.jpeg">
<div class="card-content">
<h3>Portaminas</h3>
<div class="precio">$3.000</div>
<button onclick="abrirModal('modal39')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 40 -->
<div class="card">
<img src="img/productos/40.jpeg">
<div class="card-content">
<h3>Marcadores</h3>
<div class="precio">$7.500</div>
<button onclick="abrirModal('modal40')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 41 -->
<div class="card">
<img src="img/productos/41.jpeg">
<div class="card-content">
<h3>Colores</h3>
<div class="precio">$4.000</div>
<button onclick="abrirModal('modal41')">Ver Detalles</button>
</div>
</div>


<!-- PRODUCTO 42 
<div class="card">
<img src="img/productos/42.jpeg">
<div class="card-content">
<h3>Termo Acero 500ml</h3>
<div class="precio">$25.000</div>
<button onclick="abrirModal('modal42')">Ver Detalles</button>
</div>
</div>-->


<!-- PRODUCTO 43 -->
<div class="card">
<img src="img/productos/43.jpeg">
<div class="card-content">
<h3>Bolso Silicona</h3>
<div class="precio">$4.800</div>
<button onclick="abrirModal('modal43')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 44 -->
<div class="card">
<img src="img/productos/44.jpeg">
<div class="card-content">
<h3>Gorro de lana</h3>
<div class="precio">$5.500</div>
<button onclick="abrirModal('modal44')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 45 -->
<div class="card">
<img src="img/productos/45.jpeg">
<div class="card-content">
<h3>Bolso Peluche Infantil</h3>
<div class="precio">$17.000</div>
<button onclick="abrirModal('modal45')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 46 -->
<div class="card">
<img src="img/productos/46.jpeg">
<div class="card-content">
<h3>Termo P</h3>
<div class="precio">$40.000</div>
<button onclick="abrirModal('modal46')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 47 -->
<div class="card">
<img src="img/productos/47.jpeg">
<div class="card-content">
<h3>Termo P</h3>
<div class="precio">$24.000</div>
<button onclick="abrirModal('modal47')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 48 -->
<div class="card">
<img src="img/productos/48.jpeg">
<div class="card-content">
<h3>Termo P</h3>
<div class="precio">$24.000</div>
<button onclick="abrirModal('modal48')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 49 -->
<div class="card">
<img src="img/productos/49.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal49')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 50 -->
<div class="card">
<img src="img/productos/50.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal50')">Ver Detalles</button>
</div>
</div>

<!-- PRODUCTO 51 -->
<div class="card">
<img src="img/productos/51.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal51')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 52 -->
<div class="card">
<img src="img/productos/52.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal52')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 53 -->
<div class="card">
<img src="img/productos/53.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal53')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 54 -->
<div class="card">
<img src="img/productos/54.jpeg">
<div class="card-content">
<h3>Lampara Solar Portátil</h3>
<div class="precio">$13.500</div>
<button onclick="abrirModal('modal54')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 55 -->
<div class="card">
<img src="img/productos/55.jpeg">
<div class="card-content">
<h3>Marcador</h3>
<div class="precio">$4.000</div>
<button onclick="abrirModal('modal55')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 56 -->
<div class="card">
<img src="img/productos/56.jpeg">
<div class="card-content">
<h3>Pelota</h3>
<div class="precio">$6.800</div>
<button onclick="abrirModal('modal56')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 57 -->
<div class="card">
<img src="img/productos/57.jpeg">
<div class="card-content">
<h3>Termo P</h3>
<div class="precio">$28.000</div>
<button onclick="abrirModal('modal57')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 58 -->
<div class="card">
<img src="img/productos/58.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$26.000</div>
<button onclick="abrirModal('modal58')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 59 -->
<div class="card">
<img src="img/productos/59.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal59')">Ver Detalles</button>
</div>
</div>

<!-- PRODUCTO 60 
<div class="card">
<img src="img/productos/05.jpeg">
<div class="card-content">
<h3>Termo Acero 500ml</h3>
<div class="precio">$25.000</div>
<button onclick="abrirModal('modal05')">Ver Detalles</button>
</div>
</div>

<!-- PRODUCTO 61 -->
<div class="card">
<img src="img/productos/61.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal61')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 62 -->
<div class="card">
<img src="img/productos/62.jpeg">
<div class="card-content">
<h3>Termo</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal62')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 63 -->
<div class="card">
<img src="img/productos/63.jpeg">
<div class="card-content">
<h3>Sombrilla</h3>
<div class="precio">$7.500</div>
<button onclick="abrirModal('modal63')">Ver Detalles</button>
</div>
</div>

<!-- PRODUCTO 64 
<div class="card">
<img src="img/productos/05.jpeg">
<div class="card-content">
<h3>Termo Acero 500ml</h3>
<div class="precio">$25.000</div>
<button onclick="abrirModal('modal05')">Ver Detalles</button>
</div>
</div>-->


<!-- PRODUCTO 65 -->
<div class="card">
<img src="img/productos/65.jpeg">
<div class="card-content">
<h3>Cartuchera</h3>
<div class="precio">$6.500</div>
<button onclick="abrirModal('modal65')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 66 -->
<div class="card">
<img src="img/productos/66.jpeg">
<div class="card-content">
<h3>Sombrilla</h3>
<div class="precio">$14.000</div>
<button onclick="abrirModal('modal66')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 67 -->
<div class="card">
<img src="img/productos/67.jpeg">
<div class="card-content">
<h3>Lapicero</h3>
<div class="precio">$2.000</div>
<button onclick="abrirModal('modal67')">Ver Detalles</button>
</div>
</div>

<!-- PRODUCTO 68 
<div class="card">
<img src="img/productos/05.jpeg">
<div class="card-content">
<h3>Termo Acero 500ml</h3>
<div class="precio">$25.000</div>
<button onclick="abrirModal('modal05')">Ver Detalles</button>
</div>
</div>-->


<!-- PRODUCTO 69 -->
<div class="card">
<img src="img/productos/69.jpeg">
<div class="card-content">
<h3>Colores</h3>
<div class="precio">$3.500</div>
<button onclick="abrirModal('modal69')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 70 -->
<div class="card">
<img src="img/productos/70.jpeg">
<div class="card-content">
<h3>TMarcador</h3>
<div class="precio">$4.000</div>
<button onclick="abrirModal('modal70')">Ver Detalles</button>
</div>
</div>
<!-- PRODUCTO 71 -->
<div class="card">
<img src="img/productos/71.jpeg">
<div class="card-content">
<h3>TMochila Stitch</h3>
<div class="precio">$26.000</div>
<button onclick="abrirModal('modal71')">Ver Detalles</button>
</div>
</div>




<!-- DUPLICA DESDE AQUÍ PARA MÁS PRODUCTOS -->

</div>
</section>

<footer>
© <?php echo date("Y"); ?> Distribuidora Osman
</footer>

<!-- ================== MODALES ================== -->


<!-- =============   1   =============== -->
<div id="modal01" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal01')">&times;</span>
<img src="img/productos/01.jpeg">
<h3>tabla de picar</h3>
<p>descripción.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TABLA DE PICAR','6500','GOL-1060')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   2   =============== -->
<div id="modal02" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal02')">&times;</span>
<img src="img/productos/02.jpeg">
<h3>Cortina</h3>
<p>descripción.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('CORTINA','6500','FX-5232')">
Comprar por WhatsApp
</button>
</div>
</div>

<!-- =============   4   =============== -->
<div id="modal04" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal04')">&times;</span>
<img src="img/productos/04.jpeg">
<h3>Cortina</h3>
<p>descripcion.</p>
<div class="precio">$5.000</div>
<button onclick="comprarWhatsApp('CORTINA','5000','FX-5404')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   5   =============== -->
<div id="modal05" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal05')">&times;</span>
<img src="img/productos/05.jpeg">
<h3>Pegante</h3>
<p>descripcion.</p>
<div class="precio">$2.000</div>
<button onclick="comprarWhatsApp('PEGANTE','2000','FX-8770')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   6   =============== -->
<div id="modal06" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal06')">&times;</span>
<img src="img/productos/06.jpeg">
<h3>Sombrilla</h3>
<p>descripcion.</p>
<div class="precio">$11.500</div>
<button onclick="comprarWhatsApp('SOMBRILA','11500','ZF-00864')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   7   =============== -->
<div id="modal07" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal07')">&times;</span>
<img src="img/productos/07.jpeg">
<h3>Cortina</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('CORTINA','6500','FX-5231')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   8   =============== -->
<div id="modal08" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal08')">&times;</span>
<img src="img/productos/08.jpeg">
<h3>Cortina</h3>
<p>descripcion.</p>
<div class="precio">$16.000</div>
<button onclick="comprarWhatsApp('CORTINA','16000','FX-3226')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   9   =============== -->
<div id="modal09" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal09')">&times;</span>
<img src="img/productos/09.jpeg">
<h3>Cortina</h3>
<p>descripcion.</p>
<div class="precio">$5.000</div>
<button onclick="comprarWhatsApp('CORTINA','5000','FX-5401')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   10   =============== -->
<div id="modal10" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal10')">&times;</span>
<img src="img/productos/10.jpeg">
<h3>Termo</h3>
<p>descripcion</p>
<div class="precio">$15.000</div>
<button onclick="comprarWhatsApp('TERMO','15000','GOL-1727')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   11   =============== -->
<div id="modal11" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal11')">&times;</span>
<img src="img/productos/11.jpeg">
<h3>Vela</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('VELA','6500','FX7303')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   12   =============== -->
<div id="modal12" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal12')">&times;</span>
<img src="img/productos/12.jpeg">
<h3>Pebetero</h3>
<p>descripcion.</p>
<div class="precio">$6.800</div>
<button onclick="comprarWhatsApp('PEBETERO','6800','FX-8899')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   13   =============== -->
<div id="modal13" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal13')">&times;</span>
<img src="img/productos/13.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$24.000</div>
<button onclick="comprarWhatsApp('TERMO','24000','SUBJ-060')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   14   =============== -->
<div id="modal14" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal14')">&times;</span>
<img src="img/productos/14.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1728')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   15   =============== -->
<div id="modal15" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal15')">&times;</span>
<img src="img/productos/15.jpeg">
<h3>Termo </h3>
<p>descripcion.</p>
<div class="precio">$28.000</div>
<button onclick="comprarWhatsApp('TERMO','28000','SBJU-0036')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   16   =============== -->
<div id="modal16" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal16')">&times;</span>
<img src="img/productos/16.jpeg">
<h3>Cartuchera</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('CARTUCHERA','6500','JC-2006')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   17   =============== -->
<div id="modal17" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal17')">&times;</span>
<img src="img/productos/17.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1739')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   18   =============== -->
<div id="modal18" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal18')">&times;</span>
<img src="img/productos/18.jpeg">
<h3>Colores</h3>
<p>descripcion.</p>
<div class="precio">$8.000</div>
<button onclick="comprarWhatsApp('COLORES','8000','TB-8890-24')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   19   =============== -->
<div id="modal19" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal19')">&times;</span>
<img src="img/productos/19.jpeg">
<h3>Colores</h3>
<p>descripcion.</p>
<div class="precio">$8.000</div>
<button onclick="comprarWhatsApp('COLORES','8000','SB-8894-24')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   20   =============== -->
<div id="modal20" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal20')">&times;</span>
<img src="img/productos/20.jpeg">
<h3>Marcador</h3>
<p>descripcion.</p>
<div class="precio">$4.500</div>
<button onclick="comprarWhatsApp('MARCADOR','4500','SB-6949')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   21   =============== -->
<div id="modal21" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal21')">&times;</span>
<img src="img/productos/21.jpeg">
<h3>Crayola</h3>
<p>descripcion.</p>
<div class="precio">$4.000</div>
<button onclick="comprarWhatsApp('CRAYOLA','4000','6088-12')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   22   =============== -->
<div id="modal22" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal22')">&times;</span>
<img src="img/productos/22.jpeg">
<h3>Marcador</h3>
<p>descripcion.</p>
<div class="precio">$2.500</div>
<button onclick="comprarWhatsApp('MARCADOR','2500','HQX-816')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   23   =============== -->
<div id="modal23" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal23')">&times;</span>
<img src="img/productos/23.jpeg">
<h3>Bolso-Peluche</h3>
<p>descripcion.</p>
<div class="precio">$8.000</div>
<button onclick="comprarWhatsApp('BOLSO-PELUCHE','8000','SB-1814')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   24   =============== -->
<div id="modal24" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal24')">&times;</span>
<img src="img/productos/24.jpeg">
<h3>Bolso-Peluche-Infantil</h3>
<p>descripcion.</p>
<div class="precio">$14.500</div>
<button onclick="comprarWhatsApp('BOLSO-PELUCHE-INFANTIL','14500','SB-2695')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   25   =============== -->
<div id="modal25" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal25')">&times;</span>
<img src="img/productos/25.jpeg">
<h3>Colores</h3>
<p>descripcion.</p>
<div class="precio">$4.000</div>
<button onclick="comprarWhatsApp('COLORES','4000','9040-1-12')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   26   =============== -->
<div id="modal26" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal26')">&times;</span>
<img src="img/productos/26.jpeg">
<h3>Termo P</h3>
<p>descripcion.</p>
<div class="precio">$24.000</div>
<button onclick="comprarWhatsApp('TERMO P','24000','SBJU-006')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   27   =============== -->
<div id="modal27" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal27')">&times;</span>
<img src="img/productos/27.jpeg">
<h3>Termo P</h3>
<p>descripcion.</p>
<div class="precio">$26.000</div>
<button onclick="comprarWhatsApp('TERMO P','26000','SBJU-019')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   28   =============== -->
<div id="modal28" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal28')">&times;</span>
<img src="img/productos/28.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$9.500</div>
<button onclick="comprarWhatsApp('TERMO','9500','SB-8521')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   29   =============== -->
<div id="modal29" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal29')">&times;</span>
<img src="img/productos/29.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1735')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   30   =============== -->
<div id="modal30" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal30')">&times;</span>
<img src="img/productos/30.jpeg">
<h3>Termo P</h3>
<p>descripcion.</p>
<div class="precio">$24.500</div>
<button onclick="comprarWhatsApp('TERMO P','24500','SBJU-018')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   31   =============== -->
<div id="modal31" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal31')">&times;</span>
<img src="img/productos/31.jpeg">
<h3>termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1738')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   32   =============== -->
<div id="modal32" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal32')">&times;</span>
<img src="img/productos/32.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1740')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   33   =============== -->
<div id="modal33" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal33')">&times;</span>
<img src="img/productos/33.jpeg">
<h3>Vaso Pitilllo</h3>
<p>descripcion.</p>
<div class="precio">$16.000</div>
<button onclick="comprarWhatsApp('VASO PITILLO','16000','FX-8533')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   34   =============== -->
<div id="modal34" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal34')">&times;</span>
<img src="img/productos/34.jpeg">
<h3>Marcador</h3>
<p>descripcion.</p>
<div class="precio">$4.000</div>
<button onclick="comprarWhatsApp('MARCADOR','4000','JS-057')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   35   =============== -->
<div id="modal35" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal35')">&times;</span>
<img src="img/productos/35.jpeg">
<h3>Sombrilla</h3>
<p>descripcion.</p>
<div class="precio">$14.000</div>
<button onclick="comprarWhatsApp('SOMBRILLA','14000','FX9057')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   36   =============== -->
<div id="modal36" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal36')">&times;</span>
<img src="img/productos/36.jpeg">
<h3>Sombrilla</h3>
<p>descripcion.</p>
<div class="precio">$14.000</div>
<button onclick="comprarWhatsApp('SOMBRILLA','14000','FX-9056')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   37   =============== -->
<div id="modal37" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal37')">&times;</span>
<img src="img/productos/37.jpeg">
<h3>Lapicero</h3>
<p>descripcion.</p>
<div class="precio">$2.000</div>
<button onclick="comprarWhatsApp('LAPICERO','2000','FX-5531')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   38   =============== -->
<div id="modal38" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal38')">&times;</span>
<img src="img/productos/38.jpeg">
<h3>Crayola</h3>
<p>descripcion.</p>
<div class="precio">$3.000</div>
<button onclick="comprarWhatsApp('CRAYOLA','3000','LD-2007-12')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   39   =============== -->
<div id="modal39" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal39')">&times;</span>
<img src="img/productos/39.jpeg">
<h3>Portaminas</h3>
<p>descripcion.</p>
<div class="precio">3.000</div>
<button onclick="comprarWhatsApp('PORTAMINAS','3000','QY-17')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   40   =============== -->
<div id="modal40" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal40')">&times;</span>
<img src="img/productos/40.jpeg">
<h3>MArcadores</h3>
<p>descripcion.</p>
<div class="precio">$7.500</div>
<button onclick="comprarWhatsApp('MARCADORES','7500','95000')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   41   =============== -->
<div id="modal41" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal41')">&times;</span>
<img src="img/productos/41.jpeg">
<h3>Colores</h3>
<p>descripcion.</p>
<div class="precio">$4.000</div>
<button onclick="comprarWhatsApp('COLORES','4000','TB-8893-12/24')">
Comprar por WhatsApp
</button>
</div>
</div>


<!-- =============   42  
<div id="modal02" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal02')">&times;</span>
<img src="img/productos/02.jpeg">
<h3>Termo Acero 500ml</h3>
<p>Conserva bebidas frías y calientes hasta 8 horas.</p>
<div class="precio">$25.000</div>
<button onclick="comprarWhatsApp('Termo Acero 500ml','25000')">
Comprar por WhatsApp
</button>
</div>
</div> =============== -->


<!-- =============  43   =============== -->
<div id="modal43" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal43')">&times;</span>
<img src="img/productos/43.jpeg">
<h3>Bolso Silicona</h3>
<p>descripcion.</p>
<div class="precio">$4.800</div>
<button onclick="comprarWhatsApp('BOLSO SILICONA','4800','SB-6993')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   44   =============== -->
<div id="modal44" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal44')">&times;</span>
<img src="img/productos/44.jpeg">
<h3>Gorro de Lana</h3>
<p>descripcion.</p>
<div class="precio">$5.500</div>
<button onclick="comprarWhatsApp('GORRO DE LANA','5500','SB-4710')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   45   =============== -->
<div id="modal45" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal45')">&times;</span>
<img src="img/productos/45.jpeg">
<h3>Bolso Peluche Infantil</h3>
<p>descripcion.</p>
<div class="precio">$17.000</div>
<button onclick="comprarWhatsApp('BOLSO PELUCHE-INFANTIL','17000','SB-6495')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   46   =============== -->
<div id="modal46" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal46')">&times;</span>
<img src="img/productos/46.jpeg">
<h3>Termo p</h3>
<p>descripcion.</p>
<div class="precio">$40.000</div>
<button onclick="comprarWhatsApp('Termo P','40000','SBJU-037')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   47   =============== -->
<div id="modal47" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal47')">&times;</span>
<img src="img/productos/47.jpeg">
<h3>Termo P</h3>
<p>descripcion.</p>
<div class="precio">$24.000</div>
<button onclick="comprarWhatsApp('TERMO P','24000','SBJU-020')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   48   =============== -->
<div id="modal48" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal48')">&times;</span>
<img src="img/productos/48.jpeg">
<h3>Termo P</h3>
<p>descripcion.</p>
<div class="precio">$24.000</div>
<button onclick="comprarWhatsApp('TERMO P','24000','SBJU-009')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   49   =============== -->
<div id="modal49" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal49')">&times;</span>
<img src="img/productos/49.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1731')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   50   =============== -->
<div id="modal50" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal50')">&times;</span>
<img src="img/productos/50.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1733')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   51   =============== -->
<div id="modal51" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal51')">&times;</span>
<img src="img/productos/51.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1736')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   52   =============== -->
<div id="modal52" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal52')">&times;</span>
<img src="img/productos/52.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1732')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   53   =============== -->
<div id="modal53" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal53')">&times;</span>
<img src="img/productos/53.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1730')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   54   =============== -->
<div id="modal54" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal54')">&times;</span>
<img src="img/productos/54.jpeg">
<h3>Lampara Solar Portatil</h3>
<p>descripcion.</p>
<div class="precio">$13.500</div>
<button onclick="comprarWhatsApp('LAMPARA SOLAR-PORTATIL','13500','SH-5800T')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   55   =============== -->
<div id="modal55" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal55')">&times;</span>
<img src="img/productos/55.jpeg">
<h3>Marcador</h3>
<p>descripcion.</p>
<div class="precio">$4.000</div>
<button onclick="comprarWhatsApp('MARCADOR','4000','YB-405')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   56   =============== -->
<div id="modal56" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal56')">&times;</span>
<img src="img/productos/56.jpeg">
<h3>Pelota</h3>
<p>descripcion.</p>
<div class="precio">$6.800</div>
<button onclick="comprarWhatsApp('PELOTA','6800','SB-840')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   57   =============== -->
<div id="modal57" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal57')">&times;</span>
<img src="img/productos/57.jpeg">
<h3>Termo P</h3>
<p>descripcion.</p>
<div class="precio">$28.000</div>
<button onclick="comprarWhatsApp('TERMO P','28000','SBJU-063')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   58   =============== -->
<div id="modal58" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal58')">&times;</span>
<img src="img/productos/58.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$26.000</div>
<button onclick="comprarWhatsApp('TERMO','26000','SBJU-064')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   59   =============== -->
<div id="modal59" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal59')">&times;</span>
<img src="img/productos/59.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1741')">
Comprar por WhatsApp
</button>
</div>
</div>


<!-- =============   60  
<div id="modal02" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal02')">&times;</span>
<img src="img/productos/02.jpeg">
<h3>Termo Acero 500ml</h3>
<p>Conserva bebidas frías y calientes hasta 8 horas.</p>
<div class="precio">$25.000</div>
<button onclick="comprarWhatsApp('Termo Acero 500ml','25000')">
Comprar por WhatsApp
</button>
</div>
</div> =============== -->



<!-- =============   61   =============== -->
<div id="modal61" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal61')">&times;</span>
<img src="img/productos/61.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1729')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   62   =============== -->
<div id="modal62" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal62')">&times;</span>
<img src="img/productos/62.jpeg">
<h3>Termo</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('TERMO','6500','GOL-1737')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   63   =============== -->
<div id="modal63" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal63')">&times;</span>
<img src="img/productos/63.jpeg">
<h3>Sombrilla</h3>
<p>descripcion.</p>
<div class="precio">$7.500</div>
<button onclick="comprarWhatsApp('SOMBRILLA','7500','FX-700)">
Comprar por WhatsApp
</button>
</div>
</div>


<!-- =============   64  
<div id="modal02" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal02')">&times;</span>
<img src="img/productos/02.jpeg">
<h3>Termo Acero 500ml</h3>
<p>Conserva bebidas frías y calientes hasta 8 horas.</p>
<div class="precio">$25.000</div>
<button onclick="comprarWhatsApp('SOMBRILLA','25000')">
Comprar por WhatsApp
</button>
</div>
</div> =============== -->


<!-- =============   65   =============== -->
<div id="modal65" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal65')">&times;</span>
<img src="img/productos/65.jpeg">
<h3>Cartuchera</h3>
<p>descripcion.</p>
<div class="precio">$6.500</div>
<button onclick="comprarWhatsApp('CARTUCHERA','6500','SB-6940')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   66   =============== -->
<div id="modal66" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal66')">&times;</span>
<img src="img/productos/66.jpeg">
<h3>Sombrilla</h3>
<p>descripcion.</p>
<div class="precio">$14.000</div>
<button onclick="comprarWhatsApp('SOMBRILLA','14000','FX-9051')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   67   =============== -->
<div id="modal67" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal67')">&times;</span>
<img src="img/productos/67.jpeg">
<h3>Lapicero</h3>
<p>descripcion.</p>
<div class="precio">$2.000</div>
<button onclick="comprarWhatsApp('LAPICERO','2000','FX-5523')">
Comprar por WhatsApp
</button>
</div>
</div>


<!-- =============   68  
<div id="modal02" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal02')">&times;</span>
<img src="img/productos/02.jpeg">
<h3>Termo Acero 500ml</h3>
<p>Conserva bebidas frías y calientes hasta 8 horas.</p>
<div class="precio">$25.000</div>
<button onclick="comprarWhatsApp('Termo Acero 500ml','25000')">
Comprar por WhatsApp
</button>
</div>
</div> =============== -->


<!-- =============   69   =============== -->
<div id="modal69" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal69')">&times;</span>
<img src="img/productos/69.jpeg">
<h3>Colores</h3>
<p>descripcion.</p>
<div class="precio">$3.500</div>
<button onclick="comprarWhatsApp('COLORES','3500','9016-15')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   70   =============== -->
<div id="modal70" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal70')">&times;</span>
<img src="img/productos/70.jpeg">
<h3>Marcador</h3>
<p>descripcion.</p>
<div class="precio">$4.000</div>
<button onclick="comprarWhatsApp('MARCADOR','4000','MD-125C')">
Comprar por WhatsApp
</button>
</div>
</div>
<!-- =============   71   =============== -->
<div id="modal71" class="modal">
<div class="modal-content">
<span class="cerrar" onclick="cerrarModal('modal71')">&times;</span>
<img src="img/productos/71.jpeg">
<h3>Mochila Stitch</h3>
<p>descripcion.</p>
<div class="precio">$26.000</div>
<button onclick="comprarWhatsApp('MOCHILA STITCH','26000','CAT-108')">
Comprar por WhatsApp
</button>
</div>
</div>



<!-- DUPLICA DESDE AQUÍ PARA MÁS MODALES -->

<a href="https://wa.me/573203751393" target="_blank" class="whatsapp">
<img src="img/WhatsAppLogoDistribuidora.png">
</a>

<script>
function abrirModal(id){
    document.getElementById(id).style.display = "flex";
}

function cerrarModal(id){
    document.getElementById(id).style.display = "none";
}

function comprarWhatsApp(nombre, precio, referencia){
    let numero = "573203751393"; // CAMBIA por tu número
    let mensaje = "Hola, quiero comprar:\n\n" +
                  "Producto: " + nombre + "\n" +
                  "Precio: $" + precio + "\n" +
                  "Referencia: " + referencia;

    let url = "https://wa.me/" + numero + "?text=" + encodeURIComponent(mensaje);
    window.open(url, "_blank");
}
</script>


</body>
</html>
