
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Logo</title>
  </head>
 <body>

    <button class="toggle-nav">
      <i class="fas fa-bars"></i>
    </button>
    <!-- header -->
    <div class="contenedor-principal">
    <header class="cabecera-principal">
      <h1 class="logo">Logo</h1>
      <ul class="login-navbar">
        <li><a href="/registro">Registro</a></li>
        <li><a href="/login">Login</a></li>
        <i class="fas fa-cart-plus"></i>
      </ul>
    </header>
    </div>

    <ul class="main-nav">
      <li> <a href="#">Todos los productos</a> </li>
      <li> <a href="#">Invierno 19</a> </li>
      <li> <a href="#">Remeras</a> </li>
      <li> <a href="#">Joggers</a> </li>
      <li> <a href="#">Buzos</a> </li>
      <li> <a href="#">Accesorios</a> </li>
    </ul>

 <!-- banner -->
 <section class="banner">
   <img src="images/portada1.jpg" alt="banner">
 </section>

 <!-- productos -->
 <div class="container-home">
   <section class="contenedor-productos">
     <article class="producto">
       <div class="foto-producto">
         <img src="images/campera1.jpg" alt="buzo3">
       <h4>CAMPERA ELEMENT HEAVY ZIP <br> $2.299,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
        </div>
     </article>
     <article class="producto">
       <div class="foto-producto">
         <img src="images/buzo6.jpg" alt="buzo3">

       <h4>BUZO BILLABONG COMPANY <br> $1.699,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/remera2.jpg" alt="buzo3">

       <h4>REMERA BILLABONG SURF GOODS TEE <br> $999,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/jean3.jpg" alt="buzo3">

       <h4>JEAN CAPTAIN FIN ZUMAT <br> $1.890,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/zapatilla1.jpg" alt="buzo3">

       <h4>ZAPATILLAS CAPTAIN BLACK <br> $1.990,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>

     <article class="producto">
       <div class="foto-producto">
         <img src="images/accesorios1.jpg" alt="buzo3">

       <h4>CAPTAIN FIN CREW SURF <br>$1.400,00</h4>
       <a class="comprar"href="#">Comprar<i class="fas fa-cart-plus"></i></a>
       </div>
     </article>
   </section>
 </div>

 <!-- footer -->
  <div class="container-footer">
     <nav class="main-footer">
        <ul class="footer-flex">
         <li><a href="#">Home</a></li>
         <li><a href="#">Preguntas</a></li>
         <li><a href="#">Sucursales</a></li>
         <li><a href="#">Contacto</a></li>
        </ul>
     </nav>
  </div>
</div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script>
    $('.toggle-nav').click(() => {
      $('.main-nav').slideToggle('slow');
    })
  </script>
 </body>
</html>
