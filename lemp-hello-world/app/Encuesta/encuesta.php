<?php
include 'bd_encuesta.php';

// Guardar voto si se envió
if(isset($_POST['alumno']) && isset($_POST['voto'])) {
    $alumno = $conn->real_escape_string($_POST['alumno']);
    foreach($_POST['voto'] as $pregunta_id => $opcion_id) {
        $opcion_id = intval($opcion_id);
        $pregunta_id = intval($pregunta_id);

        // Guardar el voto en la tabla votos
        $conn->query("INSERT INTO votos (alumno, pregunta_id, opcion_id) VALUES ('$alumno', $pregunta_id, $opcion_id)");

        // Incrementar el contador en la tabla opciones
        $conn->query("UPDATE opciones SET votos = votos + 1 WHERE id = $opcion_id");
    }

    $mensaje = "¡Gracias por tu participación, $alumno!";
}

// Obtener todas las preguntas
$preguntas_res = $conn->query("SELECT * FROM preguntas");
?>

<div class="encuesta-container">
    <h2 class="encuesta-titulo">Encuesta para alumnos</h2>

    <?php if(isset($mensaje)) echo "<p class='mensaje-voto'>$mensaje</p>"; ?>

    <form method="POST" class="encuesta-form">
        <!-- Input del nombre del alumno -->
        <input type="text" name="alumno" placeholder="Nombre completo" required class="input-nombre">

        <!-- Iterar todas las preguntas -->
        <?php while($pregunta = $preguntas_res->fetch_assoc()): ?>
            <div class="pregunta-block">
                <h3 class="pregunta-titulo"><?php echo $pregunta['pregunta']; ?></h3>

                <?php
                $opciones_res = $conn->query("SELECT * FROM opciones WHERE pregunta_id = ".$pregunta['id']);
                while($opcion = $opciones_res->fetch_assoc()):
                ?>
                    <label class="opcion-label">
                        <input type="radio" name="voto[<?php echo $pregunta['id']; ?>]" value="<?php echo $opcion['id']; ?>" required>
                        <?php echo $opcion['opcion']; ?>
                    </label>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>

        <button type="submit" class="btn-votar">Enviar Encuesta</button>
    </form>

    <form action="resultados_encuesta.php" method="get">
        <button type="submit" class="btn-votar">Ver resultados de la encuesta</button>
    </form>
</div>

<style>
/* ====== Contenedor principal ====== */
.encuesta-container {
    background: linear-gradient(135deg, #fdfbfb, #ebedee);
    padding: 40px;
    border-radius: 25px;
    max-width: 750px;
    margin: 50px auto;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    animation: fadeIn 0.8s ease-in-out;
}

/* Animación suave */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ====== Título principal ====== */
.encuesta-titulo {
    text-align: center;
    color: #2a2a72;
    margin-bottom: 30px;
    font-size: 2.2em;
    font-weight: bold;
    letter-spacing: 1px;
}

/* Mensaje de confirmación */
.mensaje-voto {
    text-align: center;
    background: #e6f7e6;
    color: #2e7d32;
    font-weight: bold;
    padding: 12px;
    border-radius: 12px;
    margin-bottom: 20px;
    border: 1px solid #a5d6a7;
}

/* ====== Input nombre ====== */
.input-nombre {
    width: 100%;
    padding: 14px 16px;
    border-radius: 15px;
    border: 1.5px solid #ccc;
    font-size: 15px;
    box-sizing: border-box;
    margin-bottom: 25px;
    outline: none;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.input-nombre:focus {
    border-color: #5563DE;
    box-shadow: 0 0 6px rgba(85,99,222,0.5);
}

/* ====== Preguntas ====== */
.pregunta-block {
    margin-bottom: 25px;
    background: #fff;
    padding: 20px;
    border-radius: 18px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.pregunta-titulo {
    margin-bottom: 15px;
    color: #3740A3;
    font-size: 1.2em;
    font-weight: 600;
}

/* ====== Opciones ====== */
.opcion-label {
    background: #f8f9ff;
    padding: 14px 18px;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    border: 1.5px solid transparent;
}

.opcion-label:hover {
    background: #eef0ff;
    border: 1.5px solid #5563DE;
    transform: translateX(6px);
}

.opcion-label input {
    margin-right: 12px;
    transform: scale(1.2);
    accent-color: #5563DE; /* color del radio button */
}

/* ====== Botones ====== */
.btn-votar {
    background: linear-gradient(135deg, #5563DE, #3740A3);
    color: white;
    border: none;
    padding: 14px;
    border-radius: 15px;
    cursor: pointer;
    font-size: 1.05em;
    font-weight: 600;
    transition: transform 0.2s, box-shadow 0.3s;
    width: 100%;
    margin-top: 10px;
}

.btn-votar:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(55,64,163,0.35);
}

/* ====== Hace que sea responsiva la pagina ====== */
@media (max-width: 600px) {
    .encuesta-container {
        padding: 25px;
        margin: 20px;
    }
    .encuesta-titulo {
        font-size: 1.6em;
    }
    .pregunta-titulo {
        font-size: 1em;
    }
    .btn-votar {
        font-size: 0.95em;
        padding: 12px;
    }
}
</style>
