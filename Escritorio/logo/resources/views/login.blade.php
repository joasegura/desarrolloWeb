

<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
  </head>
  <body>
    <div class="contenedor-principal">
    <header class="cabecera-principal">
      <h1 class="logo"><a href="index.php">Logo</a></h1>
      <ul class="login-navbar">
        <li><a href="registro.php">Registro</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </header>
    </div>
    <div class="contenedor-login">
      <br>
      <section class="container-login">
       <h1>Logo</h1>
        <br>
        <form class="registro" action="" method="post">
          <div class ="contenedor-input">
            <label for="email"></label>
            <br>
            <input id=email type="email" name="email" value="" placeholder="Email">
          </div>

          <div class="contenedor-input">
            <label for="pass"></label>

            <input id=pass type="password" name="password" value="" placeholder="Contraseña">
          </div>
          <a class="pass-olvidada" href="#">¿Olvidaste tu contraseña?</a>
          <label id="recordarme">
          <input type="checkbox" name="recordarme" value="rec"> Recordarme
          </label>
            <br><br>
          <button type="submit" name="button">Iniciar Sesión</button>
        </form>
      </section>
    </div>
  </body>
</html>
