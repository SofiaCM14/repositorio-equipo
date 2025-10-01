<?php
// index.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<body>
     <header>
        <h1>FORMULARIO</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
        </ul>
    </nav>

    <section class="hero">
        <h2>¡Bienvenido a la pagina principal del formulario!</h2>
        <a href="/Contacto/contacto.php" class="button">Ir a Contacto</a>
    </section>

    <footer>
        2025 - Formulario. Todos los derechos reservados.
    </footer>
</body>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #000000ff;
        header {
            background-color: #1976D2;
            padding: 10px 0;
            text-align: center;
            color: white;
        }
        header h1 {
            font-size: 2.5em;
        }
        nav {
            background-color: #0D47A1;
            padding: 15px 0;
        }
        nav ul {
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        nav ul li a:hover {
            color: #000000ff;
        }
        .hero {
            padding: 132px 20px;
            text-align: center;
        }

        .hero h2 {
            font-size: 2.2em;
            color: #1565C0;
            margin-bottom: 30px;
        }

        .hero p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 30px;
        }

        .hero a.button {
            display: inline-block;
            background-color: #1b88dcff;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1em;
        }
        .hero a.button:hover {
            background-color: #52c0ffff;
        }

        footer {
            background-color: #1976D2;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            font-size: 0.9em;
            color: #ffffffff;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 2em;
            }
            .hero h2 {
                font-size: 1.5em;
            }
            nav ul li {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
    </body>
   </html>
