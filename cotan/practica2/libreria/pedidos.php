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

                <ul>
                    <li>
                        <h3>Título</h3>
                        <p>Marina</p>
                    </li>
                    <li>
                        <h3>Autor</h3>
                        <p>Carlos Ruíz Zafón</p>
                    </li>
                    <li>
                        <h3>ISBN</h3>
                        <p>9780316320207</p>
                    </li>
                    <li>
                        <h3>Año</h3>
                        <p>1999</p>
                    </li>
                </ul>

                <!-- Información sacada de Wikipedia -->

                <p id="descripcion">
                    Marina es una novela perteneciente a la literatura juvenil del escritor español Carlos Ruiz Zafón.
                    Fue publicada en 1999 por editorial Edebé y reeditada en febrero de 2007, 
                    llevando aproximadamente un total de trece ediciones.
                    De las obras de Ruiz Zafón, Marina es posiblemente la más indefinible e imposible de categorizar y,
                    en palabras del escritor, es quizá la más personal de todas sus obras.
                </p>
                
                <form action="./procesar.php">
                    Precio 10 euros <br/>

                    <fieldset>
                        Nombre y apellidos <input type="text" name="nombreApellidos"/>
                        Dirección <textarea rows="5" cols="20" name="direccion">Introduzca su dirección por favor</textarea><br/>
                        EMail <input type="text" name="email"/>
                        Número de tarjeta <input type="text" name="numTarjeta"/>
                        Fecha de caducidad <input type="date" name="caducidad"/>    CVC <input type="text" name="cvc" id="cvc"/>
                        Marque si procede   <input type="checkbox" name="leidoAceptado" value="condiciones"/> <label for="condiciones">He leído y acepto las condiciones de compra</label>
                                            <input type="checkbox" name="recibirInformacion" value="recibirInfo"/> <label for="recibirInfo">Deseo recibir información sobre novedades</label>
                                            <input type="checkbox" name="envuelto" value="envuelto"/> <label for="envuelto">Deseo el envío envuelto para regalo</label>
                        <input type="submit" value="Hacer pedido"/>
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
