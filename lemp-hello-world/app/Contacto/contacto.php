<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTACTOS DE ALUMNOS</title>
</head>
<body>
  <div class="form-container">
    <h2>Contacto</h2>
    <form action="bd_formulario.php" method="POST">

      <label>Número de Control:</label><br>
      <input type="text" name="control" required><br>

      <label>Nombre:</label><br>
      <input type="text" name="nombre" required><br>

      <label>Apellidos:</label><br>
      <input type="text" name="apellido" required><br>

      <label>Email:</label><br>
      <input type="email" name="email" required><br>

      <label>Número telefónico:</label><br>
      <input type="tel" name="telefono" required><br>

      <label>Mensaje:</label><br>
      <textarea name="mensaje" required></textarea><br>

      <button type="submit">Enviar</button>
    </form>
  </div>

  <style>
    body {
      background: linear-gradient(135deg, #74ABE2, #5563DE);
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    /* Contenedor del formulario */
    .form-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    /* Título */
    .form-container h2 {
      text-align: center;
      color: #333333;
      margin-bottom: 20px;
    }

    /* Etiquetas */
    label {
      font-weight: bold;
      color: #444444;
    }

    /* Inputs y textarea */
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #cccccc;
      border-radius: 10px;
      box-sizing: border-box;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    /* Botón */
    button {
      width: 100%;
      padding: 12px;
      background-color: #5563DE;
      color: #ffffff;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #3740A3;
    }
  </style>
</body>
</html>
