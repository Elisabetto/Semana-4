<?php
get_header();
?>

<div class="contacto-seccion">
    <h2>Contacto</h2>

    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
        <p>
            <label for="nombre">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
        </p>

        <p>
            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="Escribe tu correo electrónico" required>
        </p>

        <p>
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" placeholder="Escribe tu mensaje" required></textarea>
        </p>

        <p>
            <button type="submit" name="boton_enviar">Enviar</button>
        </p>
    </form>



</div>

<?php
get_footer();
?>