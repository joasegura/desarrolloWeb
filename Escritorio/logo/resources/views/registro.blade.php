
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registro</title>
  </head>
  <body>
    <div class="contenedor-principal">
    <header class="cabecera-principal">
      <h1 class="logo"><a href="index.php">Logo</a></h1>
      <ul class="registro-navbar">
        <li><a href="registro.php">Registro</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </header>
    </div>
    <div class="contenedor-registro">
      <br>
      <section class="container-registro">
       <h1>Logo</h1>
        <br>

        <!-- formulario -->
        <ul style="color:red"class="errores">
          @foreach ($errors->all() as $error)
            <li>
              {{$error}}
            </li>
          @endforeach
        </ul>

        <form class="registro" action="/registro" method="post" enctype="multipart/form-data">
          @csrf

          <div class ="contenedor-input">
            <label for="name"></label>
            <br>
            <input type="text" name="name" value="{{old("name")}}" placeholder="Nombre completo*">
          </div>

          <div class="contenedor-input">
            <label for="surname"></label>
            <input type="text" name="surname" value="{{old("surname")}}" placeholder="Apellido*">
          </div>

          <div class="contenedor-input">
            <label for="email"></label>
            <input type="email" name="email" value="{{old("email")}}" placeholder="Email*">
          </div>

          <div class="contenedor-input">
            <label for="password"></label>
            <input type="password" name="password" value="" placeholder="Contraseña*">
          </div>

          <div class="contenedor-input">
            <label for="password"></label>
            <input type="password" name="password" value="" placeholder="Repetir contraseña*">
          </div>

          <div class="contenedor-input">
            <label for="telefono"></label>
            <input type="text" name="telefono" value="" placeholder="Telefono/Celular">
          </div>

          <div class="input-container">
            <label class="pais">País de nacimiento:</label>
            <select name="pais">
                <option value="arg">Seleccione su País</option>
                <option value="arg">Argentina</option>
                <option value="bra">Brasil</option>
                <option value="chi">Chile</option>
                <option value="col">Colombia</option>
                <option value="ven">Venezuela</option>
                <option value="col">Paraguay</option>
                <option value="ven">Uruguay</option>
                <option value="col">Ecuador</option>
                <option value="ven">Bolivia</option>
            </select>
          </div>

             <br> <br>

          <div class="input-container">
            <label class="special-label">Género*:</label> <br><br>
            <label class="short-label"> <input type="radio" name="genero" value="M" class="short-input"> Masculino </label>
            <label class="short-label"> <input type="radio" name="genero" value="F" class="short-input"> Femenino </label>
            <label class="short-label"> <input type="radio" name="genero" value="N/A" class="short-input"> Otro </label>
          </div>

             <br> <br>

             <div class="contenedor-input">
               <label for="file"></label>
               <input type="file" name="imagen">
             </div>

          <div class="input-container">
            <label class="special-label">Dejanos tus comentarios:</label>
            <textarea name="comentarios"></textarea>
          </div>

            <br><br>
          <button type="submit" name="button">Registrarme</button>
          <button type="reset" name="button">Cancelar</button>
        </form>
      </section>
    </div>
  </body>
</html>
