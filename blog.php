<?php 
    include './includes/templates/header.php';
    ?>
    <main class="contenedor seccion">
        <section class="blog">
            <h3>Nuestro blog</h3>
            <article class="entrada-blog"> <!--apertura de article-->
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/imagen-blog-1.webp" type="image/webp">
                        <source srcset="build/img/imagen-blog-1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/imagen-blog-1.jpg" alt="Texto entrada de blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="blog.html">
                        <h4>Experiencia y conformidad</h4>
                        <p>Escrito el: <span>02/04/2024</span>por: <span>Admin</span></p>
                        <p>Consejos para optener una buena experiencia con nosotros y lograr obtener tu vehiculo a tiempo</p>
                    </a>
                </div>
            </article> <!--cierre del article-->
            <article class="entrada-blog"> <!--apertura de article-->
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/imagen-blog-2.webp" type="image/webp">
                        <source srcset="build/img/imagen-blog-2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/imagen-blog-2.jpg" alt="Texto entrada de blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="blog.html">
                        <h4>¿Por qué rentar con nosotros?</h4>
                        <p>Escrito el: <span>02/04/2024</span> por: <span>Admin</span></p>
                        <p>Ofrecemos tarifas bajas y ofrecemos recomendaciones a la hora de tomar nuestros servicios</p>
                    </a>
                </div>
            </article> <!--cierre del article-->
            <article class="entrada-blog"> <!--apertura de article-->
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/imagen-blog-3.webp" type="image/webp">
                        <source srcset="build/img/imagen-blog-3.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/imagen-blog-1.jpg" alt="Texto entrada de blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="blog.html">
                        <h4>Acerca de nuestros servicios y su calidad</h4>
                        <p>Escrito el: <span>02/04/2024</span>por: <span>Admin</span></p>
                        <p>constantemente nos encargamos de verificar niveles de aceite, neumaticos y estado de componentes electricos constantemente</p>
                    </a>
                </div>
            </article> <!--cierre del article-->
        </section>
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