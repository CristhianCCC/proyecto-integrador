<?php 
    include './includes/templates/header.php';
    ?>
    <main class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono"> <!--apertura iconos-->
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At quae odit a? Voluptas optio, a illo corporis pariatur blanditiis accusamus id maiores culpa fuga perferendis enim. Neque, minus adipisci. Labore!</p>  
            </div> <!--cierre iconos-->
            <div class="icono"> <!--apertura iconos-->
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At quae odit a? Voluptas optio, a illo corporis pariatur blanditiis accusamus id maiores culpa fuga perferendis enim. Neque, minus adipisci. Labore!</p>  
            </div> <!--cierre iconos-->
            <div class="icono"> <!--apertura iconos-->
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At quae odit a? Voluptas optio, a illo corporis pariatur blanditiis accusamus id maiores culpa fuga perferendis enim. Neque, minus adipisci. Labore!</p>  
            </div> <!--cierre iconos-->
        </div>
    </main>
    <section class="seccion contenedor">
        <h2 class="titulo-anuncios">Vehiculos en renta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio"> <!--apertura anuncio-->
                <picture>
                    <source srcset="build/img/sedan-blanco.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/sedan-blanco.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>BMW Sedan 2023</h3>
                    <p>Vehiculo tipo premium para 4 personas</p>
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
        <a href="anuncios.html" class="alinear-derecha">
            <p class="boton-verde">Ver mas</p>
        </a>
    </section>
    <section class="imagen-contacto">
        <h2>Encuentra el vehiculo de tus sueños</h2>
        <p>Llena el formulario y uno de nuestros asesores se contactará contigo en breve</p>
        <a href="contacto.html" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
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
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente manera, muy buena atencion y el vehiculo que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>-Esteban Luna</p>
            </div>
        </section>
    </div>
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