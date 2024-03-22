<center>
    <img src="https://firebasestorage.googleapis.com/v0/b/ssds-img.appspot.com/o/log.png?alt=media&token=a7a3bf9d-0f8e-42d7-acd4-b36d6db47ac7" width="30%" alt="SSDS">
</center>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" id="email" placeholder="Tu Email" name="email" />
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="Tu Password" name="password" />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>