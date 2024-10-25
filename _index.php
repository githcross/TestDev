<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Sencilla</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace a la hoja de estilo -->
</head>
<body>
    <header>
        <h1>Bienvenido a mi Página Web</h1>
    </header>
    <main>
        <section>
            <h2>Sobre Mí</h2>
            <p>Hola, soy un desarrollador web y esto es un ejemplo de una página sencilla creada con PHP.</p>
        </section>
        <section>
            <h2>Mis Proyectos</h2>
            <ul>
                <li>Proyecto 1</li>
                <li>Proyecto 2</li>
                <li>Proyecto 3</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mi Nombre. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
