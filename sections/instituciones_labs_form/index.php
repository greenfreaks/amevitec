<?php
include "php/con_db.php";
?>
<!doctype html>
<html>

<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.0.0/dist/css/mstepper.min.css">
    <link rel="stylesheet" href="../../css/style.css?v=<?php echo(rand(1,500)); ?>">
    <link rel="stylesheet" href="../../css/instituciones_labs_form.css?v=<?php echo(rand(1,500)); ?>">
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>AMEVITEC - Beneficios para academia </title>
</head>

<body>

<div class="navbar-fixed">
        <nav id="indexnav">
            <div class="nav-wrapper container">
                <a href="../../index.html" class="center">
                    <!--                    <img id="indexLogo" class="header-logo scale-transition scale-out" src="img/logos_AMEVITEC/AMEVITEC-LOGO.png">-->
                    <img class="header-logo indexLogo" src="../../img/logos_AMEVITEC/logo-white-text.png">
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="../academia.html">Academia</a></li>
                    <li><a href="../empresas.html">Empresas</a></li>
                    <li><a href="../servicios.html">Servicios</a></li>
                    <li><a href="../graficas.html">Consultas</a></li>
                    <li><a href="http://amevitec.org/PACT/">PACT</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>


    <ul id="nav-mobile" class="sidenav">
        <div class="user-view gradient-azul">
            <a href="../../index.html"><img class="mobile-logo responsive-img" src="../../img/logos_AMEVITEC/logo-nombre-white.png"></a>
        </div>

        <li><a href="../academia.html">Academia</a></li>
        <li><a href="../empresas.html">Empresas</a></li>
        <li><a href="../servicios.html">Servicios</a></li>
        <li><a href="../graficas.html">Consultas</a></li>
        <li><a href="http://amevitec.org/PACT/">PACT</a></li>
    </ul>

    <section class="header_banner">
        <img style="max-width: 100%;" src="../../img/inventarioTecnologico/registro.png">
    </section>

    <section class="btns_labs center">
        <a class="btn btn-registro" href="#">1. Registro Institucional</a>
        <a class="btn btn-ciencias" href="ciencias_form.php">2. Capacidades en ciencias</a>
        <a class="btn btn-ing" href="ing_form.php">3. Capacidades de ingenier??a</a>
        <a class="btn btn-humani" href="humani_form.php">4. Capacidades en humanidades</a>
    </section>
<!---------------------------------------------------------------------------------------------------------------------------------------------->
<!-----------------------------------------------------FORMULARIO DE REGISTRO------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------------------------->
<div class="content">
    <h5 class="bold">1. Registro institucional.</h5>

  <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">list_alt</i>Instrucciones.</div>
      <div class="collapsible-body">
          <span>
            <h6 class="bold">Instrucciones:</h6>            
            <ol>
                <li>Este formulario debe llenarlo el Coordinador del Inventario de la instituci??n.</li>
                <li>Identifica tu instituci??n dentro del cat??logo y ten a la mano tu clave institucional. Si requieres asistencia t??cnica, solicita apoyo
                    en tiempo real v??a Whatsapp al <a a href="https://api.whatsapp.com/send?phone=527797966790&text=Qu?? tal, me gustar??a solicitar apoyo para que mi instituci??n participe en el inventario tecnol??gico" target="_blank">779 796 6790.</a></li>
                <li>Llena los campos solicitados en el formulario.</li>
                <li>Realiza el env??o de tu informaci??n con tu clave institucional.</li>
                <li>Llena los formularios de capacidades en ciencias, ingenier??as y humanidades de acuerdo con la oferta tecnol??gica de tu instituci??n.</li>
            </ol>
          </span>
        </div>
    </li>
  </ul>

    <div class="divider purple"></div>

    <form method="POST">
        <h6>1. Tipo de instituci??n.</h6>
        <div class="input-field col s12">
            <select name="tipoIns">
                <option value="0" disabled selected required>Selecciona un tipo de instituci??n</option>
                <option value="1">Universidad</option>
                <option value="1">Centro de Investigaci??n</option>            
            </select>
        </div>


        <h6>2. Nombre de la instituci??n.</h6>
        <div class="input-field col s12">
            <select name="ins">
                <option value="" disabled selected required>Selecciona una instituci??n</option>
                <?php include "php/fill/institucion.php";?>           
            </select>
        </div>


        <h6>3. Entidad federativa.</h6>
        <div class="input-field col s12">
            <select name="entidad" required>
                <option value="" disabled selected>Selecciona una entidad</option>
                <?php include "php/fill/estado.php";?>           
            </select>
        </div> 

        <h6>4. P??gina web.</h6>
        <input type="text" name="webpage" required>


        <h6>Nombre del titular de la rector??a o presidencia.</h6>
        <input type="text" name="tit_rec" required>

        <h6>Correo de contacto de la rector??a.</h6>
        <input type="email" name="email_rec" required>

        <h6>Nombre del titular del ??rea de vinculaci??n.</h6>
        <input type="text" name="tit_vin" required>

        <h6>Correo de contacto del ??rea de vinculaci??n.</h6>
        <input type="email" name="email_vin" required>

        <h6>Nombre del titular del ??rea acad??mica.</h6>
        <input type="text" name="tit_aca" required>

        <h6>Correo de contacto del ??rea acad??mica.</h6>
        <input type="email" name="email_aca" required>

        <h6>5. ??reas de oferta educativa.</h6>
        <?php include "php/fill/ofertaEducativa.php";?>

        <h6>6. ??reas de educaci??n continua.</h6>
        <?php include "php/fill/educacionContinua.php";?>
        

        <div class="divider"></div>

        <div>
            <p>
                <label>
                    <input type="checkbox" name="privacidad" required/>
                     <span><b>He le??do y acepto los t??rminos del <a href="../privacidad.html">aviso de privacidad</a></b></h6></span>
                </label>
            </p>
        </div>

        <div class="password center">
                <h6 class="texto-azul">Introduce tu Clave Institucional.</h6>
                <input type="password" name="password" placeholder="Introduce aqu?? tu clave institucional" required class="browser-default center bold" required>
            </div> <br>

            <div class="submit center">
                <input type="submit" value="Enviar" class="btn" name="submit" onclick="return ConfirmSubmit()">
            </div>
        <?php include "php/envio_datos.php";?>
    </form>


</div>
    

<footer class="page-footer custom-footer">
        <div class="container">
            <div class="row custom-row">
                <div class="col l5 s12">
                    <h5 class="texto-gris cta-title-white"><strong>Agencia Mexicana de Vinculaci??n Tecnol??gica, A.C.</strong></h5>
                </div>
                <div class="col l4 s12">
                    <div class="row valign-wrapper">
                        <div class="col s2 center">
                            <i class="material-icons small">location_on</i>
                        </div>
                        <div class="col s10">
                            <a class="white-text" target="_blank" href="https://goo.gl/maps/Bpacyr5JdN52"> Senda del Amor #7, entre camino Real de Carretas y Senda Eterna Col. Milenio 3, C.P. 76060, Quer??taro, Qro.</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col s2 center">
                            <i class="material-icons small">phone</i>
                        </div>
                        <div class="col s10">
                            <a class="white-text" href="tel:015521063289">55 21 06 32 89.</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s2 center">
                            <i class="material-icons small">email</i>
                        </div>
                        <div class="col s10">
                            <a class="white-text" href="mailto:contacto@amevitec.org ">contacto@amevitec.org </a>
                        </div>
                    </div>
                </div>
                <div class="col l3 s12">
                    <h6 class="white-text bold">M??s informaci??n</h6>
                    <ul>
                        <!--                        <li><a class="white-text btn-help" href="#!">Ayuda</a></li>-->
                        <li class="texto-gris"><a class="white-text" href="http://www.amevitec.org/sections/privacidad.html">Pol??tica de Privacidad</a></li>
                    </ul>
                    <div class="row center">

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <sub class="right">Made by Mario Sandoval Vel??zquez using <a class="orange-text text-lighten-3" href="http://materializecss.com" target="_blank">Materialize</a> </sub>
                <p>??AMEVITEC 2022</p>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../../js/init.js"></script>
    <script src="js/evitar_reenvio.js"></script>
    <script type="text/javascript">
        function ConfirmSubmit()
        {
            var respuesta = confirm("??Est??s seguro de querer enviar tus datos? Da clic en ACEPTAR para continuar o en CANCELAR para verificar tu informaci??n.");
            if (respuesta == true) 
            {
                return true;
            }else{
                return false
            }
        }
    </script>

    </body>
</html>
