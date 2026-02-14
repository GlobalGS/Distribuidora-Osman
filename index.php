<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Distribuidora Osman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f6fa;
        }

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

        .logo{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .logo img{
            width:50px;
            border-radius:50%;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-left:25px;
            font-weight:500;
            transition:0.3s;
        }

        nav a:hover{
            color:#25D366;
        }

        /* HERO */
        .hero{
            background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1602810319428-019690571b5b');
            background-size:cover;
            background-position:center;
            height:60vh;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            color:white;
        }

        .hero h1{
            font-size:3rem;
            margin-bottom:15px;
        }

        .hero p{
            font-size:1.2rem;
            margin-bottom:20px;
        }

        .btn{
            padding:12px 25px;
            background:#25D366;
            color:white;
            text-decoration:none;
            border-radius:30px;
            font-weight:600;
            transition:0.3s;
        }

        .btn:hover{
            background:#1ebc59;
            transform:scale(1.05);
        }

        /* PRODUCTOS */
        .productos{
            padding:60px 5%;
        }

        .productos h2{
            text-align:center;
            margin-bottom:40px;
            font-size:2rem;
        }

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

        .card:hover{
            transform:translateY(-10px);
        }

        .card img{
            width:100%;
            height:250px;
            object-fit:cover;
        }

        .card-content{
            padding:20px;
        }

        .card-content h3{
            margin-bottom:10px;
        }

        .precio{
            color:#25D366;
            font-weight:bold;
            margin-bottom:15px;
        }

        .card-content button{
            width:100%;
            padding:10px;
            border:none;
            background:#111;
            color:white;
            border-radius:8px;
            cursor:pointer;
            transition:0.3s;
        }

        .card-content button:hover{
            background:#25D366;
        }

        /* FOOTER */
        footer{
            background:#111;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:40px;
        }

        /* BOTÓN WHATSAPP */
        .whatsapp{
            position:fixed;
            bottom:20px;
            right:20px;
            width:65px;
            z-index:1000;
            animation:float 2s infinite ease-in-out;
        }

        .whatsapp img{
            width:100%;
        }

        @keyframes float{
            0%{ transform:translateY(0); }
            50%{ transform:translateY(-8px); }
            100%{ transform:translateY(0); }
        }

    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="img/DistribuidoraOsman.jpeg" alt="Logo">
        <h2>Distribuidora Osman</h2>
    </div>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Productos</a>
        <a href="#">Ofertas</a>
        <a href="#">Contacto</a>
    </nav>
</header>

<section class="hero">
    <div>
        <h1>Productos Importados de China</h1>
        <p>Los mejores precios para tu negocio</p>
        <a href="#productos" class="btn">Ver Productos</a>
    </div>
</section>

<section class="productos" id="productos">
    <h2>Nuestros Productos</h2>

    <div class="grid">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad" alt="">
            <div class="card-content">
                <h3>Jeans Premium</h3>
                <div class="precio">$45.000</div>
                <button>Comprar</button>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1520975918318-3f8b5f7a2d8a" alt="">
            <div class="card-content">
                <h3>Camisa Importada</h3>
                <div class="precio">$35.000</div>
                <button>Comprar</button>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1593030761757-71fae45fa0e7" alt="">
            <div class="card-content">
                <h3>Zapatillas Urbanas</h3>
                <div class="precio">$120.000</div>
                <button>Comprar</button>
            </div>
        </div>
    </div>
</section>

<footer>
    © <?php echo date("Y"); ?> Distribuidora Osman - Todos los derechos reservados
</footer>

<!-- BOTÓN WHATSAPP -->
<a href="https://wa.me/573000000000" target="_blank" class="whatsapp">
    <img src="img/WhatsAppLogoDistribuidora.png" alt="WhatsApp">

</a>

</body>
</html>
