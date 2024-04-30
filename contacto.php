<?php 
    include './includes/templates/header.php';
    ?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source class="img-formulario" srcset="build/img/formulario.webp" type="image/webp">
            <source class="img-formulario"srcset="build/img/formulario.jpg" type="image/jpeg">
            <img class="img-formulario" loading="lazy" src="build/img/formulario.jpg" alt="Imagen contacto">
        </picture>
        <h2>Llene el formulario de contacto</h2>
        <form class="formulario" action="">
            <fieldset> <!--para agrupar en bloques la informacion del formulario en general-->
                <legend>Informacion personal</legend> <!--sera como el titulo del formulario-->
                <label for="nombre">Nombre</label> <!--el "for" es para que cuando se de click en el label se active el campo de texto para ello se agrega un "id" con el mismo nombre en el campo de input-->
                <input type="text" placeholder="Tu nombre" id="nombre">
                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu correo" id="email">
                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu telefono" id="telefono">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset> <!--Informacion sobre la propiedad-->
                <legend>Informacion sobre la solicitud</legend>
                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Como Desea Ser Contactado?</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono"><!--name="contacto" para que solo permita seleccionar uno de los campos-->
                    <label for="contactar-email">Email</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email"> <!--name="contacto" para que solo permita seleccionar uno de los campos-->
                </div>
                <p>Si eligio telefono, elija fecha y hora en la que desea ser contactad@</p>
                <label for="fecha">Fecha: </label>
                <input type="date" id="fecha">
                <label for="hora">Hora: </label>
                <input type="time" id="hora" min="09:00" max="18:30"> <!--min y max es para permitir que el usuario digite una hora acorde con el horario de trabajo-->
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos Los Derechos Reservados 2024 &copy;</p>
    </footer>
    <script src="build/js/bundle.js.min.map"></script>
</body>
</html>