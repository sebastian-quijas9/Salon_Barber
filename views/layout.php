<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salon- SSDS</title>
    <link rel="icon" href="/build/img/log1.1.png" type="image/x-icon">
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <div class="contenedor-app">
        <div class="imagen"></div>
        <div class="app">
            <?php echo $contenido; ?>
        </div>
    </div>

    <?php
    echo $script ?? '';
    echo getcwd(); 
    ?>

</body>

</html>