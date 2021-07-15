<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mate</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

  <!-- Style.css -->
  <link rel="stylesheet" href="Css/styles.css">
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/normalize.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-mainbg">
   
    <button 
      class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
    </button>
    <!-- Links -->
    <div 
      class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- For Styling -->
            <div class="hori-selector">
              <div class="left"></div>
              <div class="right"></div>
            </div>
            
            <!-- Nav Links -->
            <li class="nav-item ">
               <a 
               class="nav-link" href="Principal.php">
                <i 
                   class="fas fa-tachometer-alt">
                 </i>Principal
               </a>
           </li>
            
            <li class="nav-item ">
                <a 
                  class="nav-link" href="Registros/nosotros.php">
                  <i 
                    class="far fa-address-book">
                  </i>Nosotros
                </a>
            </li>
            <li class="nav-item">
                <a 
                  class="nav-link" href="Registros/cursos.php">
                  <i class="far fa-clone">
                  </i>Cursos
                </a>
            </li>
            
            <li class="nav-item">
                <a 
                class="nav-link" href="Registros/#index.php">
                  <i 
                  class="far fa-address-book">
                  </i>Contacto
                </a>
            </li>
            <li class="nav-item">
                <a 
                class="nav-link" href="Registros/#registrados.php">
                  <i 
                    class="far fa-chart-bar">
                  </i>Registrados
                </a>
            </li>

        </ul>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- Custom Script -->
  <script src="../Css/script.js"></script>

  <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto "style="color:blue;">Estudia Matematica Online </h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="Fotos/anuncio01.jpg" alt="Anuncio calculadora">
                <div class="contenido-anuncio">
                    <h3>Aprende  Mate Ecuaciòn</h3>
                    <p>Aprende mate ecuuacion de  manera mas facil , practica y divertida sin moverte de tu casa.</p>
                    <p class="precio">S/.200.00</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="Fotos/calculadora.png" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="Fotos/calculadora.png" alt="icono calculadora">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="Fotos/calculadora.png" alt="icono calculadora">
                            <p>4</p>
                        </li>
                    </ul>


                    <a href="Registros/index.php" class="boton boton-amarillo d-block">Contactanos Para Curso</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="Fotos/anuncio02.jpg" alt="Mate algebra">
                <div class="contenido-anuncio">
                    <h3>Aprende Mate Algebra</h3>
                    <p>Aprende mate algebra de una manera mas facil , practica y divertida sin moverte de tu casa.</p>
                    <p class="precio">S/.200.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="Fotos/igual.png" alt="igual wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="Fotos/igual.png" alt="icono igual">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="Fotos/igual.png" alt="icono igual">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="Registros/index.php" class="boton boton-amarillo d-block">Contactanos Para Curso</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="Fotos/anuncio03.jpg" alt="Mate Geometria">
                <div class="contenido-anuncio">
                    <h3>Aprende Mate Geometria</h3>
                    <p>Aprende mate geometria de una manera mas facil, practica y divertida sin moverte</p>
                    <p class="precio">S/.200.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="Fotos/cubo.png" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="Fotos/cubo.png" alt="icono cubo">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="Fotos/cubo.png" alt="icono cubo">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="Registros/index.php" class="boton boton-amarillo d-block">Contactanos Para Curso</a>
                </div>
            </div>
        </div>

       
    </main>
                 
                </div>
            </div>
        </div>
      
    </div>
  </header>
    <div class="seccion-inferior contenedor seccion">
        <section class="blog">
       <h3 style="color:blue;"> El Blog Matematico  </h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <img src="Fotos/blog1.jpg" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>El acceso es para siempre no se vence</h4>
                    </a>
                    <p>Escrito el: <span> 08/07/2021 </span> por: <span> MateMar </span> </p>
                    <p>Descubre el método que  menos te llevará aprender  la matematica como siempre soñaste. No importa que no sepas mucho aqui te enseñaramos al maximo. Lo mejor de todo, no importa tu edad  para aprender.</p>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <img src="Fotos/blog2.jpg" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>El profesor disponible para ti todos los dias</h4>
                    </a>
                    <p>Escrito el: <span> 08/07/2021</span> por: <span> MateMar </span> </p>
                    <p>La plataforma cuenta con la opción de dejar preguntas en cada lección, las cuales te responderemos lo antes posible.</p>
                </div>
            </article>
        </section>

        <section class="testimoniales" style="color:blue;">
            <h3 class="centrar-texto fw-300 " >Testimoniales</h3>
            <div class="testimonial"style="color:black;">
                
                <blockquote >
                    El personal se comportó de una excelente forma, muy buena atención y los profesores me ofrecieron cumplir con todas mis expectativas.
                </blockquote>
                <p>- Octavio Grados</p>
            </div>
        </section>

    </div>
                
               
                <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
            
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2021 &copy; </p>
        </div>
    </footer>

</body>
</html>