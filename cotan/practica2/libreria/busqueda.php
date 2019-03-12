<!DOCTYPE html>
<html lang="es">
    <head>
        <title>El Péndulo</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Francisco José Cotán López"/>
    </head>
    <body>
         <!-- Cabecera de la página -->
         <header>
            <img src="./img/logos/libreria.png" alt="Eslogan del Lector de Libros"/>
            <h1>
                El Lector de Libros
            </h1>
            <h2>
                Contando historias desde hace 100 años
            </h2>
        </header>

        <!-- Barra de navegación -->

        <nav>
            <ul>
                <li><a href="./index.html">Inicio</a></li>
                <li><a href="./catalogo.html">Catálogo</a></li>
                <li><a href="./busqueda.php">Búsqueda</li>
                <li><a href="./tienda.html">Tiendas</a></li>
                <li><a href="./pedidos.php">Pedidos</a></li>
            </ul>
        </nav>

        <!-- Bloque principal de la página -->

        <main>
            <section>
                <form action="./procesar.php">
                    <fieldset>
                        Autor <input type="text" name="autor"/><br/>
                        Título <input type="text" name="titulo"/><br/>
                        ISBN <input type="text" name="isbn"/><br/>
                        Precio  entre <input type="text" name="precioMinimo"/>  y <input type="text" name="precioMaximo"/><br/>
                        Género  <select id="genero" name="genero">
                            <option value="" disabled selected>- Elija el género -</option>
                            <option value="accion">Acción</option>
                            <option value="cienciaFiccion">Ciencia Ficción</option>
                            <option value="thriller">Thriller</option>
                            <option value="tomedia">Comedia</option>
                            <option value="autoayuda">Autoayuda</option>
                        </select><br/>
                        Encuadernación  <input type="radio" name="encuadernacion" value="dura"/><label for="dura">Tapa dura</label><br/>
                                        <input type="radio" name="encuadernacion" value="blanda"/><label for="blanda">Tapa blanda</label><br/>
                                        <input type="radio" name="encuadernacion" value="cualquiera" checked/><label for="cualquiera">Cualquiera</label><br/>
                                        <input type="submit" value="Buscar"/>
                    </fieldset>
                </form>
            </section>

            <!-- Barra de al lado -->

            <aside>
                <section id="masVendidos">
                    <h2>
                        Más vendidos
                    </h2>

                    <ul>
                        <li>El quijote</li>
                        <li>Ulises</li>
                        <li>Arguiñano cocina</li>
                    </ul>
                </section>

                <section id="masPopulares">
                    <h2>
                        Más populares
                    </h2>

                    <ul>
                        <li>Charles Dickens</li>
                        <li>Julio Verne</li>
                        <li>Carlos Ruiz Zafón</li>
                    </ul>
                </section>

            </aside>
        </main>

        <!-- Pie de la página -->

        <footer>

            <!-- Números de contactos -->

            <section id="contacto">
                <ul>
                    <li>
                        Granada

                        <ul>
                            <li>Reyes Católicos (555 112233)</li>
                            <li>Avda Dilar (555 332211)</li>
                        </ul>
                    </li>
                    <li>
                        Málaga

                        <ul>
                            <li>Marqués de Larios (555 221133)</li>
                        </ul>
                    </li>
                </ul>
            </section>
            
            <!-- Incorporamos la agrupación de los elementos de contacto -->

            <section id="redesSociales">
                <div><img src="./img/logos/mail.png" alt="Logo de dirección de correo" width="20" height="20"/></div>

                <p>lectordelibros@gmail.com</p>

                <div><img src="./img/logos/twitter.png" alt="Logo de Twitter" width="20" height="20"/></div>
                <div><img src="./img/logos/facebook.png" alt="Logo de Facebook" width="20" height="20"/></div>
                <div><img src="./img/logos/pinterest.png" alt="Logo de Pinterest" width="20" height="20"/></div>
                <div><img src="./img/logos/youtube.png" alt="Logo de Youtube" width="20" height="20"/></div>
            </section>

            <!-- Navegación para ir a otras páginas de la librería -->
            <!-- Enlaces provisionales -->

            <nav>
                <ul>
                    <li><a href="https://www.w3schools.com/">La empresa</a></li>
                    <li><a href="https://www.w3schools.com/">Política de envío</a></li>
                    <li><a href="https://www.w3schools.com/">Preguntas frecuentes</a></li>
                    <li><a href="https://www.w3schools.com/">Mapa del sitio</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>
