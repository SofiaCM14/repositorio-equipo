<?php
include 'bd_encuesta.php';
?>

<div class="encuesta-container">
    <h2 class="encuesta-titulo">Resultados de la Encuesta</h2>

    <!-- Botón para regresar a la encuesta -->
    <div style="text-align:center; margin-bottom:20px;">
        <form action="encuesta.php" method="get">
            <button type="submit" class="btn-votar">Volver a la encuesta</button>
        </form>
    </div>

    <?php
    $preguntas_res = $conn->query("SELECT * FROM preguntas");
    while($pregunta = $preguntas_res->fetch_assoc()):
        echo "<div class='pregunta-block'>";
        echo "<h3 class='pregunta-titulo'>{$pregunta['pregunta']}</h3>";

        $opciones_res = $conn->query("SELECT * FROM opciones WHERE pregunta_id = ".$pregunta['id']);
        $total_votos = 0;
        while($row = $opciones_res->fetch_assoc()) $total_votos += $row['votos'];
        $opciones_res = $conn->query("SELECT * FROM opciones WHERE pregunta_id = ".$pregunta['id']); // reset

        while($opcion = $opciones_res->fetch_assoc()):
            $porcentaje = $total_votos > 0 ? round(($opcion['votos'] / $total_votos) * 100) : 0;
    ?>
            <p class="resultado-text"><?php echo $opcion['opcion']; ?>: <?php echo $opcion['votos']; ?> votos (<?php echo $porcentaje; ?>%)</p>
            <div class="barra-result">
                <div class="barra-fill" style="width:<?php echo $porcentaje; ?>%"></div>
            </div>
    <?php
        endwhile;
        echo "</div>";
    endwhile;
    ?>
</div>

<style>
.encuesta-container {
    background: #ffffff;
    padding: 30px;
    border-radius: 20px;
    max-width: 700px;
    margin: 50px auto;
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.encuesta-titulo {
    text-align: center;
    color: #1976D2;
    margin-bottom: 25px;
    font-size: 2em;
}

.pregunta-block {
    margin-bottom: 20px;
}

.pregunta-titulo {
    margin-bottom: 10px;
    color: #0D47A1;
}

.resultado-text {
    margin: 5px 0;
    font-weight: 500;
}

.barra-result {
    background: #e0e0e0;
    border-radius: 10px;
    height: 25px;
    margin-bottom: 10px;
    overflow: hidden;
}

.barra-fill {
    background: #5563DE;
    height: 100%;
    color: white;
    text-align: right;
    padding-right: 10px;
    border-radius: 10px 0 0 10px;
    transition: width 0.5s ease-in-out;
}

/* Botón con mismo estilo que enviar encuesta */
.btn-votar {
    background: #5563DE;
    color: white;
    border: none;
    padding: 12px 25px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 1em;
    transition: background 0.3s;
}

.btn-votar:hover {
    background: #3740A3;
}
</style>
