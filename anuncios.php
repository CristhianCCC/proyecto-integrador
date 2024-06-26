<?php 
    include './includes/templates/header.php';
    ?>
    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h1 class= 'titulo-anuncios'>Ver vehiculos disponibles</h1>
            <div class="contenedor-anuncios">
                <div class="anuncio"> <!--apertura anuncio-->
                    <picture>
                        <source srcset="build/img/sedan-blanco.webp" type="image/webp">
                        <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/sedan-blanco.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>BMW Sedan 2023</h3>
                        <p>Vehiculo para 4 personas</p>
                        <p class="precio">$1,000,000</p>
                        <ul class="iconos-caracteristicas">
                            <li>
                                <img loading="lazy" class="img-icono" src="build/img/velocidad.png" alt="icono wc">
                                <p>24,000</p>
                            </li>
                            <li>
                                <img loading="lazy" class="img-icono" src="build/img/puertas.png" alt="icono estacionamiento">
                                <p>4</p>
                            </li>
                        </ul>
                        <a href="anuncio.html" class="boton boton-amarillo">Ver mas  </a>
                    </div>
                </div> <!--cierre anuncio-->
                <div class="anuncio"> <!--apertura anuncio-->
                    <picture>
                        <source srcset="build/img/mazda-cx3.webp" type="image/webp">
                        <source srcset="build/img/mazda-cx3.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/sedan-blanco.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Mazda CX-3</h3>
                        <p>Camioneta para 4 personas</p>
                        <p class="precio">$700,000</p>
                        <ul class="iconos-caracteristicas">
                            <li>
                                <img loading="lazy" class="img-icono" src="build/img/velocidad.png" alt="icono wc">
                                <p>27,000</p>
                            </li>
                            <li>
                                <img loading="lazy" class="img-icono" src="build/img/puertas.png" alt="icono estacionamiento">
                                <p>4</p>
                            </li>
                        </ul>
                        <a href="anuncio.html" class="boton boton-amarillo">Ver mas  </a>
                    </div>
                </div> <!--cierre anuncio-->
                <div class="anuncio"> <!--apertura anuncio-->
                    <picture>
                        <source srcset="build/img/kia-cerato.webp" type="image/webp">
                        <source srcset="build/img/kia-cerato.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/sedan-blanco.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Kia Cerato</h3>
                        <p>Vehiculo tipo para 4 personas</p>
                        <p class="precio">$600,000</p>
                        <ul class="iconos-caracteristicas">
                            <li>
                                <img loading="lazy" class="img-icono" src="build/img/velocidad.png" alt="icono wc">
                                <p>24,000</p>
                            </li>
                            <li>
                                <img loading="lazy" class="img-icono" src="build/img/puertas.png" alt="icono estacionamiento">
                                <p>4</p>
                            </li>
                        </ul>
                        <a href="anuncio.html" class="boton boton-amarillo">Ver mas</a>
                    </div>
                </div> <!--cierre anuncio-->
            </div>
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