<?php
// index.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <header>
        <!-- Logo -->
        <img src="app/imagenes/logo.png" alt="Logo" class="logo">

        <!-- Título -->
        <h1>PÁGINA PARA ALUMNOS</h1>

        <!-- Botón Inicio -->
        <a href="index.php" class="header-btn">Inicio</a>
    </header>

    <section class="hero">
        <h2>¡Bienvenido a la página principal del formulario!</h2>
        <a href="/Contacto/contacto.php" class="button">Ir a Contacto</a>
        <a href="/Encuesta/encuesta.php" class="button">Ir a Encuesta</a>
    </section>

    <footer>
        2025 - Formulario. Todos los derechos reservados.
    </footer>
</body>

<style>
    /* ===== Reset ===== */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #1a237e, #3949ab, #5c6bc0);
        color: #fff;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    /* ===== Header ===== */
    header {
        background: rgba(25, 118, 210, 0.95);
        padding: 10px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        position: sticky;
        top: 0;
        z-index: 10;
    }

      .logo {
      width: 120px;
     height: auto;
     display: block;
      margin: 0 auto;
     }


    header h1 {
        font-size: 2em;
        letter-spacing: 1px;
        flex: 1;
        text-align: center;
    }

    /* ===== Botón Inicio en Header ===== */
    .header-btn {
        background: linear-gradient(135deg, #42a5f5, #1e88e5);
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1em;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    }

    .header-btn:hover {
        background: linear-gradient(135deg, #64b5f6, #2196f3);
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.35);
    }

    /* ===== Hero ===== */
    .hero {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 60px 20px;
    }

    .hero h2 {
        font-size: 2.5em;
        margin-bottom: 25px;
        text-shadow: 0 3px 6px rgba(0,0,0,0.3);
    }

    .hero a.button {
        display: inline-block;
        background: linear-gradient(135deg, #42a5f5, #1e88e5);
        color: white;
        padding: 14px 32px;
        border-radius: 50px;
        text-decoration: none;
        font-size: 1.1em;
        font-weight: bold;
        margin: 12px;
        box-shadow: 0 6px 16px rgba(0,0,0,0.25);
        transition: all 0.3s ease;
    }

    .hero a.button:hover {
        background: linear-gradient(135deg, #64b5f6, #2196f3);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.35);
    }

    /* ===== Footer ===== */
    footer {
        background: #0D47A1;
        text-align: center;
        padding: 18px;
        font-size: 0.9em;
        color: #e3f2fd;
        box-shadow: 0 -3px 8px rgba(0,0,0,0.2);
    }

    /* ===== Responsive ===== */
    @media (max-width: 600px) {
        header {
            flex-direction: column;
            gap: 10px;
        }
        header h1 {
            font-size: 1.5em;
            text-align: center;
        }
        .hero h2 {
            font-size: 1.7em;
        }
        .hero a.button {
            font-size: 1em;
            padding: 12px 24px;
        }
    }
</style>
</html>
