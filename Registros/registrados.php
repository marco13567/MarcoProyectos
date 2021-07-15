<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mate</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="../Css/styles.css">
  <link rel="stylesheet" href="../Css/style.css">
  <link rel="stylesheet" href="../Css/normalize.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-mainbg">
   
    <button 
      class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
    </button>
    <div 
      class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
              <div class="left"></div>
              <div class="right"></div>
            </div>
            
            <!-- Nav Links -->
            <li class="nav-item ">
                <a 
                class="nav-link" href="../Principal.php">
                  <i 
                    class="fas fa-tachometer-alt">
                  </i>Principal
                </a>
            </li>
            
            <li class="nav-item ">
                <a 
                  class="nav-link" href="../Registros/nosotros.php">
                  <i 
                    class="far fa-address-book">
                  </i>Nosotros
                </a>
            </li>
            <li class="nav-item">
                <a 
                  class="nav-link" href="../Registros/cursos.php">
                  <i class="far fa-clone">
                  </i>Cursos
                </a>
            </li>
            
            <li class="nav-item">
                <a 
                class="nav-link" href="../Registros/#index.php">
                  <i 
                  class="far fa-address-book">
                  </i>Contacto
                </a>
            </li>
            <li class="nav-item active">
                <a 
                class="nav-link" href="../Registros/#registrados.php">
                  <i 
                    class="far fa-chart-bar">
                    </i>Registro
                </a>
            </li>
            
        </ul>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- Custom Script -->
  <script src="../Css/script.js"></script>

<h1 class="fw-300 centrar-texto">Registro</h1>
<main class="contenedor seccion contenido-centrado">
    <h2 class="fw-300 centrar-texto">Formulario de Registro</h2>
   
            <form action="insertar2.php" method="post"><fieldset>
                
            <label for="formGroupExampleInput" >Nombre:</label>
                <input name="txtNombres" type="text" id="Nombre" placeholder="Tu Nombre" >
                <label for="formGroupExampleInput" >Apellido Paterno:</label>
                <input name="txtPaterno"  type="text" id="Paterno" placeholder="Tu Ap Paterno">

                <label for="formGroupExampleInput" >Apellido Materno: </label>
                <input name="txtMaterno" type="text" id="Materno" placeholder="Tu  Ap Materno" >


                <label for="formGroupExampleInput" >Edad: </label>
                <input name="txtEdad" type="text" id="Edad" placeholder="Tu Edad" >

                <label for="formGroupExampleInput">Foto</label>
                <input name="txtfoto" type="file"  id="formGroupExampleInput" placeholder="Ingresa aquí">
                            
            </fieldset>
            
                            
                       <div class="mb-3">
                                <input name="oculto" type="hidden" class="form-control" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        </button>
                        <input type="submit" value="Enviar" class="boton boton-verde">
                        </button>
                    </div>
                </form>
                </main>
    
    </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="../Css/script.js"></script>
      
  <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
            
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2021 &copy; </p>
        </div>
    </footer>

</body>
</html>