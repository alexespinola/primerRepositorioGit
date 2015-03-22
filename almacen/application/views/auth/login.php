<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<html lang="es">
  <head>
        <meta charset="utf-8">
        <base href="<?=base_url();?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sistema Almacenes Sofse</title>
        <meta name="description" content="Sistema Almacenes">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/estilos_color.css">


        <!--[if lt IE 9]>
            <script src="assets/js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->


  </head>
  <body>


    <div class="contenedor">
      <header>
        <div class="cabecera_login"></div>
        <div class="nav_login"> <p> INICIAR SESIÓN </p> </div>
      </header>
      
      <div id="infoMessage"><?php echo $message;?></div>



      <form class="contenedor-login" role="form" method="post" action="auth/login">
        
        <input type="text" name="identity" value="" id="identity" placeholder="email">


        <input type="password" name="password" value="" id="password" placeholder="Clave">

        <button type="submit" class="btn-login" style="margin-bottom:5px;" name="boton">INGRESAR</button>

        <p><a href="auth/forgot_password" style="margin-left:62px;"><?php echo lang('login_forgot_password');?></a></p>


      </form>


      

      <footer class="firma">  
          <div><p>© 2015 Operadora Ferroviaria Sociedad del Estado | Av. Dr. Ramos Mejía 1302, 4°, CABA (CP 1104) | Tel. (54-11) 3220-6300 | Argentina</p></div>
          <div><img src="assets/img/mininterior.png"></div>
          <div class="clear"></div>
      </footer>
    </div>
  </body>
</html>




