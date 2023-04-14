<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
        <script type="text/javascript" src="/jsapp.js"></script>
        <script src="https://kit.fontawesome.com/e32421c37b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-j5XhJpL5cUZmk6UZK6gFdu6UcR6Q0aVh8W6/C3XAGtbPyxuzJhOvcd8W1Qe7VdTwCwFrrrmpy8fH5J5ueozzOw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
      .banner-image {
        background-image: url('/img/BannerRyatmaModel1.jpg');
        background-size: cover;
        position: relative;
      }

      .contenedor {
    display: flex;
    justify-content: center;
  }
  
  .circulo-contenedor {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 65px;
  }
  
  .circulo {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background-color: #0871C5 ;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 50px;
    color: #FCEC07;
  }
  
  .circulo i {
    font-size: 75px;
  }
  
  .texto {
    text-align: center;
    color: #1C3180;
    font-weight: bold;
  }

  .subtexto {
    text-align: center;
    
  }


    </style>
  </head>
  <body>

    <!-- Navbar  -->
    <div class="nab">
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark p-md-1">
    <a class="nav-link text-white" href="#">
      <div class="container">
        <img  width="100" height="50" src="/img/logo.png">
    </img>
    </a>
        

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/admin">Panel Administrativo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quienes Somos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div>

   
    
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
      <div class="content text-center">
        <h1 class="text-white"></h1>
      </div>
    </div>

  
<br>
<div class="contenedor">
  <div class="circulo-contenedor">
    <div class="circulo">
      <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="texto">
      Encuentranos
    </div>
    <div class="subtexto">
      Barrio Mexico, San Jose, Costa Rica.
</div>
  </div>
  <div class="circulo-contenedor">
    <div class="circulo">
    <i class="fa-regular fa-clock"></i>
    </div>
    <div class="texto">
    Nuestro Horario
    </div>
    <div class="subtexto">
    De Lunes a Viernes de 7:30 a.m. a 5:00 p.m.
</div>
  </div>
  <div class="circulo-contenedor">
    <div class="circulo">
    <i class="fa-solid fa-box-open"></i>
    </div>
    <div class="texto">
    Servicio de Encomienda
    </div>
    <div class="subtexto">
    Hacemos envíos a todo el país.
</div>
  </div>
</div>



    <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi. df
        </p>
      </div>
    </div>

    <button id="boton-menu">
    <i class="fa-regular fa-comment"></i>
  </button>

<nav id="menu">
  <h2>Preguntas frecuentes</h2>
  <ul>
    <li>
      <h3>¿Cómo puedo contactar al servicio de atención al cliente?</h3>
      <p>Puedes contactar al servicio de atención al cliente llamando al número XXX-XXXX o escribiendo un correo electrónico a XXX@XXX.com.</p>
    </li>
    <li>
      <h3>¿Cuál es el plazo de entrega de los productos?</h3>
      <p>El plazo de entrega de los productos es de 3 a 5 días hábiles, dependiendo de la ubicación del cliente y del producto adquirido.</p>
    </li>
    <li>
      <h3>¿Cuál es la política de devoluciones?</h3>
      <p>La política de devoluciones permite devolver los productos dentro de los 30 días siguientes a la compra, siempre y cuando estén en perfecto estado y en su embalaje original.</p>
    </li>
  </ul>
</nav>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-secondary', 'shadow');
        } else {
          nav.classList.remove('bg-secondary', 'shadow');
        }
      });
    </script>

<script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var botonMenu = document.getElementById("boton-menu");
var menu = document.getElementById("menu");

botonMenu.addEventListener("click", function() {
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
});
   </script>
  </body>
</html>