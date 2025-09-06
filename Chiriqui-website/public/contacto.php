<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Chiriquí Único</title>
    <link rel="stylesheet" href="css/stylen.css">
</head>

<body>
    <header>
        <h1>Contacto</h1>
    </header>
    <main>
        <section class="contacto">
            <h2>Envíanos un mensaje</h2>
            <form action="enviar_contacto.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
</body>

</html>