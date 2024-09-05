<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/styles/config.css">
    <link rel="stylesheet" href="assets/styles/general.css">
    <link rel="shortcut icon" type="image/svg" href="assets/img/icons/iso/paper-plane.png" sizes="16x16">
    <title>
        <?php 
        if(true){
            echo "Inicio";
        }
        else{
            echo "Inicio de Sesión";
        }
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">
</head>
<body>
    <?php if (true) : ?>
        <?php if (true) : ?>
            <div id="seccion_tabla" class="blue-bg">
                <main>
                    <aside class="cajaAside noClick">
                        <nav class="mt-md-5 mb-md-5">
                            <button id="button_menu" onclick="menu(event)">
                                <img src="assets/img/icons/logo/logo-istrategy-light.svg" class="logotipoAside movil" alt="iStrategy" width="140">
                                <img src="assets/img/icons/iso/paper-plane.png" class="logotipoAside desktop d-none" alt="iStrategy" width="35">
                            </button> 
                        </nav>
                        <div class="caja-menu mt-5">
                            <button type="button" onclick="add()">Agregar Nuevo Contacto</button>
                            <hr>
                            <ul class="etiquetas">
                                <li>EJEMPLO 1</li>
                                <li>EJEMPLO 2</li>
                                <li>EJEMPLO 3</li>
                            </ul>
                            <hr>
                            <button type="button" onclick="">+ Crear nueva etiqueta</button>
                        </div>
                    </aside>
                    <div class="cajaTabla">
                        <div class="banner flx-col-c-c">
                            <img src="assets/img/icons/logo/logo-istrategy-light.svg" alt="iStrategy" width="140">
                        </div>
                        <div class="tabla-datos">
                            <table id="tablaDatos" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <td>NO</td>
                                        <td>NOMBRE</td>
                                        <td>EMAIL</td>
                                        <td>GÉNERO</td>
                                        <td>ACCIÓN</td>
                                    </tr>
                                </thead>
                                <tbody id="dynamic-table">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        <?php else : ?>
            <div id="seccion_registrar" class="blue-bg">
                <main>
                    <aside class="cajaAside">
                        <img src="assets/img/icons/iso/paper-plane.png" class="logotipoAside" alt="iStrategy" width="35">
                        <div class="caja-menu mt-5">
                            <ul class="redes-sociales">
                                <li><a href=""><img src="assets/img/icons/social-network/facebook.png" alt="Facebook"></a></li>
                                <li><a href=""><img src="assets/img/icons/social-network/instagram.png" alt="Instagram"></a></li>
                                <li><a href=""><img src="assets/img/icons/social-network/tiktok.png" alt="Tiktok"></a></li>
                            </ul>
                        </div>
                    </aside>
                    <nav class="nav-movil">
                        <img src="assets/img/icons/logo/logo-istrategy-dark.svg" class="logotipoAside movil" alt="iStrategy" width="140">
                    </nav>
                    <div class="cajaTabla">
                        <div class="caja-registrar">
                            <form class="" action="">
                                <label for="">
                                    <span>Nombre de Usuario</span>
                                    <div class="icon-input">
                                        <img src="assets/img/icons/ui/user.png" alt="">
                                        <input type="text" name="" id="form-input-username" placeholder="Ingrese su Nombre de Usuario">
                                    </div>
                                </label>
                                <label for="">
                                    <span>Dirección de Correo</span>
                                    <div class="icon-input">
                                        <img src="assets/img/icons/ui/email.png" alt="">
                                        <input type="email" name="" id="form-input-email" placeholder="Ingrese su Email">
                                    </div>
                                </label>
                                <label for="">
                                    <span>Contraseña</span>
                                    <div class="icon-input">
                                        <img src="assets/img/icons/ui/lock1.png" alt="">
                                        <input type="password" name="" id="form-input-password1" placeholder="Ingrese su Contraseña">
                                    </div>
                                </label>
                                <label for="">
                                    <span>Confirmar Contraseña</span>
                                    <div class="icon-input">
                                        <img src="assets/img/icons/ui/lock2.png" alt="">
                                        <input type="password" name="" id="form-input-password2" placeholder="Ingrese su Contraseña de nuevo">
                                    </div>
                                </label>
                                <div class="genero">
                                    <span>Género</span>
                                    <label for="" class="radio-inputs">
                                        <input class="inp-radio" type="radio" name="form-input-gender" id="form-input-genderM" value="Masculino">
                                        <span>Masculino</span>
                                    </label>
                                    <label for="" class="radio-inputs">
                                        <input class="inp-radio" type="radio" name="form-input-gender" id="form-input-genderF" value="Femenino">
                                        <span>Femenino</span>
                                    </label>
                                </div>
                                <label for="" class="radio-inputs">
                                    <input  class="inp-radio" type="checkbox" name="" id="form-input-remember">
                                    <span>Recordarme Siempre</span>
                                </label>
                                <div class="caja-buttons">
                                    <button class="enviar" type="button" onclick="submit()">Enviar</button>
                                    <button class="cancelar" type="button" onclick="cancel()">Cancelar</button>
                                </div>
                            </form>
                            <div class="hero">
                                <img class="hero__bg" src="assets/img/pictures/background/office.png" alt="Background Office">
                                <img class="hero__fg" src="assets/img/icons/logo/logo-istrategy-light.png" alt="iStrategy Logo">
                            </div>
                        </div>
                    </div>
                    <div class="footer-movil">
                        <div class="redes-sociales">
                            <a href=""><img src="assets/img/icons/social-network/facebook.png" alt="Facebook"></a>
                            <a href=""><img src="assets/img/icons/social-network/instagram.png" alt="Instagram"></a>
                            <a href=""><img src="assets/img/icons/social-network/tiktok.png" alt="Tiktok"></a>
                        </div>
                    </div>
                </main>
            </div>
        <?php endif; ?>
    <?php else : ?>
        <div id="iniciar_sesion">
            <div class="contenedor">
            <center>
                <img src="assets/img/icons/logo/logo-istrategy-dark.svg" alt="istrategy" width="160" class="logotipo mt-5 mb-4">
                <h1 class="blue-txt">Iniciar sesión</h1>
                <h2 class="subtitulo black-txt">Ingresa tus datos a continuación</h2>
            </center>
            <form action="">
                <label for="">
                    <span>Correo Electrónico</span>
                    <input type="email" name="" id="login-username" placeholder="Ingrese el Correo" class="blue-bg">
                </label>
                <label for="">
                    <span>Contraseña</span>
                    <input type="password" name="" id="login-password" placeholder="Introduzca Contraseña" class="blue-bg">
                </label>
                <label for="">
                    <input type="checkbox" class="mycheck" name="" id="login-remember">
                    <span>Mantenme Conectado</span>
                </label>
                <button type="button" class="mb-3 mt-4 gap-3" onclick="validateSesion()">Iniciar Sesión</button>
            </form>
            </div>
        </div>
    <?php endif; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>
    <script src="assets/js/interactions.js"></script>
    <script src="assets/js/requests.js"></script>
    <script src="assets/js/validations.js"></script>
   

    <script>
        getAll();
        

        let menuDato = 0;
        /* Menu barra aside tabla y login */
        function menu(event) {
            if (menuDato === 0) {
                $('#button_menu .movil').removeClass("d-none");
                $('#button_menu .desktop').addClass("d-none");

                $('.caja-menu').removeClass("d-none");
                $('.caja-menu').addClass("d-block");

                $('.cajaAside').removeClass("noClick");
                $('.cajaAside').addClass("click");

                $('.cajaTabla').addClass("d-none");
                menuDato = 1;

            } else {
                $('#button_menu .movil').addClass("d-none");
                $('#button_menu .desktop').removeClass("d-none");

                $('.caja-menu').addClass("d-none");
                $('.caja-menu').removeClass("d-block");

                $('.cajaAside').addClass("noClick");
                $('.cajaAside').removeClass("click");

                $('.cajaTabla').removeClass("d-none");
                menuDato = 0;
            }
        }
    </script>
</body>
</html>