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


        
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
        <link rel="stylesheet" href="assets/css/estilos_color.css">


        <!--[if lt IE 9]>
            <script src="assets/js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->


	</head>
	<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">Su navegador es obsoleto debe utilizar google chrome!</p>
        <![endif]-->


		<div class="contenedor">


                <!-- C A B E C E R A -->
                        <header class="cabecera">
                                <div class="float_izq">
                                        <a href=""><img alt="Operadora Ferroviaria" class="header_logos" src="assets/img/operadora-ferroviaria.png"></a>
                                </div>
                                <div class="float_der">
                                        <img alt="Ministerio del Interior y Transporte" class="header_logos" src="assets/img/mininterior.png">
                                </div>         
                                <div class="clear"></div>
                        </header>

                <!-- M E N U -->
                        <nav>                   
                                <ul class="menu">
                                        <li> <a href="" >INICIO</a></li>
                                        <li> <a >STOCK<img src="assets/img/abajo.png" /></a>
                                                <ul class="desplegar">
                                                        <li> <a href="stock">Listado de stock</a></li>
                                                        <li> <a href="stock/agregar">Agregar Artículo</a></li>
                                                </ul> 
                                        </li>
                                </ul>
                                <ul class="menu_der" >
                                       

                                        <?php if (!$this->ion_auth->logged_in()): ?>
                                        <li class="float_der"><a href="auth/login">INGRESAR</a></li>
                                        <?php 
                                        else: 
                                        $user = $this->ion_auth->user()->row();
                                        ?>
                                        <li class="float_izq">USUARIO: <?=$user->email?></li>
                                        <li class="float_der"><a href="auth/logout">SALIR</a></li>
                                        <?php endif; ?>

                                         <?php if ($this->ion_auth->is_admin()): ?>
                                         <li class="float_der"><a href="auth">ABM USUARIOS</a></li>
                                        <?php endif; ?>
                                        
                                </ul>
                        </nav>
