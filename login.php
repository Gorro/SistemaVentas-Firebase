<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sale System - Login </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
    <!--Sweet Alert Style -->
    <link href="css/sweetalert.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content" id="app">
            <form method="POST" id="login" action="">
              <h1>Acceso a Sistema de Ventas</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Usuario" v-model="email">
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password"  v-model="password">
              </div>
              <div>                
                <input class="btn btn-success pull-left" type="submit" value="Ingresar" v-on:click="ingresar">                
                <div class="clearfix"></div>
                <input type="checkbox" class="remember"name="remember"> Recordarme
                <a class="reset_pass" href="#">Perdiste tu password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <h1>Sale System <img src="images/logo.png" alt="logo-salesystem"> </h1>
                  <p>©2017 Todos los derechos reservados.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>    
    <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
    <script src="js/firebase.js"></script>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
