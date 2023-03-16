<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <title>Incidentes</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/esime_original.png" alt="ESIMEZ">
        </div>
        <h1>Sistema de incidencias de laboratorios de ESIME Zacatenco</h1>
        <nav>
            <a href="./pages/equipo.php">Reportes de equipos</a>
            <a href="./pages/admin.php">Reportes Administrativos</a>
        </nav>
    </header>  
    <section class="container">
        <section class="card">
            <h2>Incidentes Técnicos</h2>
            <p>Ingresa a esta sección para visualizar la lista de incidendtes técnicos</p>
            <a href="./pages/equipo.php"><input type="button" value="Mostrar incidentes" id="boton"></a>
        </section>
        <section class="card">
            <h2>Incidentes Administrativos</h2>
            <p>Ingresa a esta sección para visualizar la lista de incidendtes técnicos</p>
            <a href="./pages/admin.php" class="boton"><input type="button" value="Mostrar incidentes" id="boton"></a>
        </section>
    </section>
    <footer>
        <h2><b>Sistema de incidencias de Laboratorios</b></h2>
        <p>
            Proyecto de titulación: Ricardo Plata Méndez
        </p>
    </footer>
</body>
</html>