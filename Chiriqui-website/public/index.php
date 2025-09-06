<?php
require_once '../includes/funciones.php';
require_once '../database/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiriquí Único - Descubre la Magia de la Provincia</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <section class="hero">
            <p>Descubre - Explora - Vive</p>
            <h1>Bienvenido a Chiriquí<br /> <span class="moving-text">Explora sus Tesoros Naturales e Históricos</span>
            </h1>
        </section>

        <section class="destacados">
            <h2>Lugares Destacados</h2>
            <?php
            $lugares = obtenerLugares();
            foreach ($lugares as $lugar):
            ?>
            <div class="lugar-card">
                <img src="img/<?= $lugar['imagen_principal'] ?>" alt="<?= $lugar['nombre'] ?>">
                <h3><?= $lugar['nombre'] ?></h3>
                <p><?= substr($lugar['descripcion'], 0, 100) ?>...</p>
            </div>
            <?php endforeach; ?>
        </section>

        <section class="Platos">
            <h2>Platos</h2>
            <?php
            $platos = obtenerplatos();
            foreach ($platos as $plato):
            ?>
            <div class="plato-card">
                <img src="img/<?= $plato['imagen'] ?>" alt="<?= $plato['nombre'] ?>">
                <h3><?= $plato['nombre'] ?></h3>
                <p><?= substr($plato['descripcion'], 0, 100) ?>...</p>
            </div>
            <?php endforeach; ?>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>