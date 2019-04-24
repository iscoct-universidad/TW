<?php
// require "layout_comun.php";
PrintHead();
PrintBodyInicio();
PrintHeader();

// Vemos qué página mostrar
$num_pag = 0;
if (isset($_GET["p"]) && ($_GET["p"] >= 0 || $_GET["p"] <= 4))
  $num_pag = $_GET["p"];

PrintNav($num_pag);

switch ($num_pag) {
  case 0: PrintIndex(); break;
  case 1: PrintCatalogue(); break;
  case 2: PrintOrders(); break;
  case 3: PrintSearch(); break;
  case 4: PrintStores(); break;
}

PrintAside();
PrintFooter();
PrintBodyFin();


// ---------------------------------------
// Main de cada página

function PrintIndex() {
echo <<< HTML
  <main id="indx"> <!-- Contenido principal del documento, 3 eventos -->
    <article class="evento">
      <div class="evento-cabecera">
        <div class="evento-info">
          <h3>Inauguración de La Librería</h3>
          <h5>01/01/2001</h5>
        </div>
        <img src="./img/eventos/inauguracion.jpg" alt="Inauguración">
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora earum ullam facilis labore minima vitae amet libero, esse laborum. Minima eaque eveniet dolor. Itaque alias molestias adipisci ea doloremque consequatur?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum assumenda nulla quae minima est hic maxime nisi voluptatum dolor enim distinctio vitae molestiae tempore, nemo asperiores rerum. Vel, expedita veritatis.
      </p>          
    </article>

    <article class="evento">
      <div class="evento-cabecera">
        <div class="evento-info">
          <h3>Visita de Stephen King</h3>
          <h5>01/01/2001</h5>
        </div>
        <img src="./img/eventos/king.jpg" alt="Stephen King">
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum tenetur quam soluta magnam ut labore corporis voluptatem voluptate alias aut nam maxime voluptatum nesciunt excepturi ipsam aliquid, repudiandae, minus modi?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum assumenda nulla quae minima est hic maxime nisi voluptatum dolor enim distinctio vitae molestiae tempore, nemo asperiores rerum. Vel, expedita veritatis.
      </p>        
    </article>

    <article class="evento">
      <div class="evento-cabecera">
        <div class="evento-info">
          <h3>Recordando a: Dante Alighieri</h3>
          <h5>01/01/2001</h5>        
        </div>
        <img src="./img/eventos/dante.jpg" alt="Dante Alighieri">        
      </div>  
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eos iusto minima dolorem et nobis nisi, quisquam molestias aliquam voluptatum cum eligendi nulla eius dolores ad aliquid ipsam quidem at!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum assumenda nulla quae minima est hic maxime nisi voluptatum dolor enim distinctio vitae molestiae tempore, nemo asperiores rerum. Vel, expedita veritatis.
      </p>
    </article>
  </main>
HTML;
}

function PrintCatalogue() {
echo <<< HTML
  <main id="catalogue"> <!-- Contenido principal del documento, 3 eventos -->      
    <section class="libro">
      <img src="./img/libros/1984.jpeg" alt="1984" height="150">
      <h4>1984</h4>
      <p>George Orwell</p>
      <p class="precio">5,90€</p>
      <a href="orders.html"><button type="button">Comprar</button></a>
    </section>

    <section class="libro">
      <img src="./img/libros/angels.jpg" alt="Angels and Demons" height="150">
      <h4>Angels and Demons</h4>
      <p>Dan Brown</p>
      <p class="precio">15,50€</p>
      <a href="orders.html"><button type="button">Comprar</button></a>
    </section>

    <section class="libro">
      <img src="./img/libros/alice.jpg" alt="Through the Lookin-Glass" height="150">
      <h4>Through the Lookin-Glass</h4>
      <p>Lewis Carroll</p>
      <p class="precio">7,90€</p>
      <a href="orders.html"><button type="button">Comprar</button></a>
    </section>

    <section class="libro">
      <img src="./img/libros/last-wish.jpg" alt="The Last Wish" height="150">
      <h4>The Last Wish</h4>
      <p>Andrzej Sapkowski</p>
      <p class="precio">25,90€</p>        
      <a href="orders.html"><button type="button">Comprar</button></a>          
    </section>

    <section class="libro">
      <img src="./img/libros/zen.jpg" alt="Zend and the Art of Motorcycle Maintenance" height="150">
      <h4>Zen and the Art of Motorcycle Maintenance</h4>
      <p>Robert M. Pirsing</p>
      <p class="precio">9€</p>
      <a href="orders.html"><button type="button">Comprar</button></a>
    </section>      
  </main>
HTML;
}

function PrintOrders() {
echo <<< HTML
  <main id="orders">
    <div id="info-pedido">
      <div id="datos-libro">
          <img src="./img/libros/1984.jpeg" alt="Carátula del libro">                
          <ul id="datos-pedido">
            <li>
              <h4 class="categoria">Título</h4>
              <p class="valor">El título del libro</p>
            </li>
            <li>
              <h4 class="categoria">Autor</h4>
              <p class="valor">Menganito y Fulanito</p>
            </li>
            <li>
              <h4 class="categoria">ISBN</h4>
              <p class="valor">xxx-xxx-xxx</p>
            </li>
            <li>
              <h4 class="categoria">Editorial</h4>
              <p class="valor">UnaCualquiera.SL</p>
            </li>
            <li>
              <h4 class="categoria">Año</h4>
              <p class="valor">2019</p>
            </li>
          </ul>     
      </div>          

      <p id="descripcion-pedido">
        En el año 1984 Londres es una ciudad lúgubre en la que la Policía del 
        Pensamiento controla de forma asfixiante la vida de los ciudadanos. 
        Winston Smith es un peón de este engranaje perverso y su cometido es 
        reescribir la historia para adaptarla a lo que el Partido considera 
        la versión oficial de los hechos. Hasta que decide replantearse la 
        verdad del sistema que los gobierna y somete
      </p>
      <div id="precio-pedido">
        <h4>PRECIO</h4>
        <p>6€</p>
      </div>
    </div>

    <form id="form-orders" action="procesar.php" method="POST">
        <label><p>Nombre y apellidos</p>
          <input type="text" name="nombre"/>
        </label>
        <label><p>Dirección de envío</p>
          <textarea name="direccion"></textarea>
        </label>
        <label><p>Email</p>
          <input type="email" name="email"/>
        </label>
        <label><p>Número de tarjeta</p>
          <input type="text" name="tarjeta"/>
        </label>
        <label><p>Fecha de caducidad</p>
          <input type="text" name="caducidad"/>
        </label>
        <label><p>CVC</p>
          <input type="text" name="cvc"/>
        </label>          

        <div class="radio">
          <p class="form-subtitle">Marque si procede</p>
          <div class="radio-options">
            <label><input type="checkbox" name="condiciones" value="condiciones"/>
              <p class="radio-text">He leído y acepto las condiciones de compra</p>
            </label>
            <label><input type="checkbox" name="maillist" value="maillist"/>
              <p class="radio-text">Deseo recibir información sobre novedades</p>
            </label>
            <label><input type="checkbox" name="regalo" value="regalo"/>
              <p class="radio-text">Deseo el envío envuelto para regalo</p>
            </label>            
          </div>
        </div>

        <input type="submit" value="Hacer pedido"/>
      </form>
  </main>
HTML;
}

function PrintSearch() {
echo <<< HTML
  <main id="search">
    <form id="form-search" action="procesar.php" method="GET">
      <label><p>Autor</p>
        <input type="text" name="autor"/>
      </label>
      <label><p>Título</p>
        <input type="text" name="titulo"/>
      </label>
      <label><p>ISBN</p>
        <input type="text" name="isbn"/>
      </label>

      <label id="precio">
        <p>Precio</p>
        <label>
            <p>entre</p>
          <input type="number" name="minPrecio"/>
        </label>
        <label>
          <p>y</p>
          <input type="number" name="maxPrecio"/>
        </label>          
      </label>
      
      <label>
        <p>Género</p>
        <select name="genero">
          <option value="" disabled selected>- Elija el género -</option>        
          <option value="fantastica">Fantástica</option>
          <option value="historica">Histórica</option>          
          <option value="humor">Humor</option>    
          <option value="romantica">Romántica</option>      
          <option value="terror">Terror</option>
        </select>
      </label>        
      
      <div class="radio">
        <p class="form-subtitle">Encuadernación</p>
        <div class="radio-options">
          <label>
            <input type="radio" name="encuadernacion" value="dura"/>
            <p class="radio-text">Tapa dura</p>
          </label>
          <label>
            <input type="radio" name="encuadernacion" value="blanda"/>
            <p class="radio-text">Tapa blanda</p>
          </label>
          <label>
            <input type="radio" name="encuadernacion" value="cualquiera"/>
            <p class="radio-text">Cualquiera</p>
          </label>        
        </div>
      </div>
      <input type="submit" value="Buscar"/>
    </form>
  </main>
HTML;
}

function PrintStores() {
echo <<< HTML
  <main id="stores">
    <table id="tabla-tiendas">
      <tbody>            
          <tr>
            <td class="nombre-ciudad">Barcelona</td>
            <td class="tienda">
              <img src="./img/tiendas/barcelona.jpg" alt="Barcelona">
              <ul>
                <li>Park Güell, 08024, Barcelona</li>
                <li>+34 922 11 11 11</li>
                <li>lalibreria_barcelona@gmail.com</li>
              </ul>                              
            </td>
          </tr>
                        
          <tr>
            <td class="nombre-ciudad" rowspan="2">Madrid</td>
            <td class="tienda">
              <img src="./img/tiendas/madrid1.jpg" alt="Madrid">
              <ul>
                <li>Av. de Concha Espina, 1, 28036, Madrid</li>
                <li>+34 900 01 10 11</li>
                <li>lalibreria_madrid@gmail.com</li>
              </ul>                
            </td>
          </tr>

          <tr>
            <td class="tienda">
              <img src="./img/tiendas/madrid2.jpg" alt="Madrid">
              <ul>
                <li>Calle de Floridablanca, S/N, 28071, Madrid</li>
                <li>+34 913 90 60 00 </li>
                <li>lalibreria_madrid@gmail.com</li>
              </ul>                
            </td>              
          </tr>
      </tbody>        
    </table>
  </main>
HTML;
}

// ---------------------------------------
// Partes compartida por todas las páginas

function PrintHead() {
echo <<< HTML
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Ignacio Vellido Expósito"> 
    <title>La Librería</title>    
    <link rel="stylesheet" href="site.css">   
  </head>
HTML;
}

function PrintBodyInicio() {
echo <<< HTML
  <body>
      <div id="wrap">    
HTML;
}

function PrintHeader() {
echo <<< HTML
  <header> <!-- Encabezado -->      
    <img src="./img/logos/logo.png" alt="Logo de La Librería"> <!-- Logo -->
    <div id="nombre_eslogan">
      <h1>La Librería</h1>
      <p>Para los fans de la lectura</p>
    </div>      
  </header>
HTML;
}

function PrintNav($activo) {
echo "<nav> <!-- Menú de navegación -->";

$paginas = ["Inicio", "Catálogo", "Búsqueda", "Tiendas", "Pedidos"];
foreach ($paginas as $k => $v)
  echo "<a href='index.php?p=".($k)."'>".$v."</a>";

echo "</nav>";
}

function PrintAside() {
echo <<< HTML
  <aside> <!-- Barra lateral -->
    <div id="mas-vendidos" class="recomendaciones">
      <h4>Más vendidos</h4>
      <ul>
        <li>El Señor de los Anillos</li>
        <li>El Principito</li>
        <li>Harry Potter y la Piedra Filosofal</li>
      </ul>
    </div>

    <div id="mas-populares" class="recomendaciones">
      <h4>Más populares</h4>
      <ul>
        <li>J. R. R. Tolkien</li>
        <li>J. K. Rowling</li>
        <li>Agatha Christie</li>
      </ul>
    </div>
  </aside>
HTML;
}

function PrintFooter() {
echo <<< HTML
  <footer>
    <div id="tiendas">
      <ul>
        <li>
          <p class="ciudad">Barcelona</p>            
          <ul class="locales">
            <li>Park Güell, 08024, Barcelona</li>
          </ul>
        </li>
        <li>
          <p class="ciudad">Madrid</p>
          <ul class="locales">
            <li>Av. de Concha Espina, 1, 28036, Madrid</li>
            <li>Calle de Floridablanca, S/N, 28071, Madrid</li>
          </ul>
        </li>
      </ul>
    </div>

    <div id="contacto">
      <!-- Esta ajustado el tamaño por visibilidad -->
      <div id="email-y-logo">
        <img src="./img/logos/mail.png" alt="Logo dirección de correo">
        <p>lalibreria@gmail.com</p>
      </div>
      <div id="media">
        <img src="./img/logos/twitter.png" alt="Logo de Twitter">
        <img src="./img/logos/youtube.png" alt="Logo de Youtube">
        <img src="./img/logos/facebook.png" alt="Logo de Facebook">
      </div>
    </div>

    <div id="informacion">
      <ul>
        <li><a href="contact">Contacto</a></li>
        <li><a href="aboutus">Sobre nosotros</a></li>
        <li><a href="map">Mapa del sitio</a></li>
      </ul>
    </div>
  </footer>
HTML;
}

function PrintBodyFin() {
echo <<< HTML
      </div>
    </body>
  </html>
HTML;
}
?>