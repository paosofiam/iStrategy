<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="assets/styles/config.css">
    <link rel="stylesheet" href="assets/styles/general.css">
    
</head>
<body>
    <?php if (true) : ?>
        <div>
            <header>
                <button type="button" onclick="add()">Agregar Nuevo Contacto</button>
                <img src="" alt="">
            </header>
            <main>
                <aside>
                    <ul>
                        <li></li>
                    </ul>
                    <button type="button" onclick="">+ Crear nueva etiqueta</button>
                </aside>
                <table>
                    <thead>
                        <tr>
                            <td>NO</td>
                            <td>NOMBRE</td>
                            <td>EMAIL</td>
                            <td>GÉNERO</td>
                            <td>ACCIÓN</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr id="row-table-template">
                            <td>1</td>
                            <td>Juanito Alcachofa</td>
                            <td>j_alcachoga@hotmail.com</td>
                            <td>Masculino</td>
                            <td>
                                <button type="button" onclick="edit()"><img src="" alt=""></button>
                                <button type="button" onclick="remove()"><img src="" alt=""></button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </main>
        </div>
        <aside class="blue-bg">
            <img src="assets/img/icons/iso/paper-plane.png" alt="iStrategy Logo">
            <nav>
                <ul>
                    <li><a href=""><img src="assets/img/icons/social-network/facebook.png" alt="Facebook"></a></li>
                    <li><a href=""><img src="assets/img/icons/social-network/instagram.png" alt="Instagram"></a></li>
                    <li><a href=""><img src="assets/img/icons/social-network/tiktok.png" alt="Tiktok"></a></li>
                </ul>
            </nav>
        </aside>
        <div>
            <form class="grey-bg" action="">
                <label for="">
                    <span>Nombre de Usuario</span>
                    <input type="text" name="" id="form-input-username" placeholder="Ingrese su Nombre de Usuario">
                </label>
                <label for="">
                    <span>Dirección de Correo</span>
                    <input type="email" name="" id="form-input-email" placeholder="Ingrese su Email">
                </label>
                <label for="">
                    <span>Contraseña</span>
                    <input type="email" name="" id="form-input-password1" placeholder="Ingrese su Contraseña">
                </label>
                <label for="">
                    <span>Confirmar Contraseña</span>
                    <input type="email" name="" id="form-input-password2" placeholder="Ingrese su Contraseña de nuevo">
                </label>
                <div>
                    <span>Género</span>
                    <label for="">
                        <input type="radio" name="form-input-gender" id="" value="Masculino">
                        <span>Masculino</span>
                    </label>
                    <label for="">
                        <input type="radio" name="form-input-gender" id="" value="Femenino">
                        <span>Femenino</span>
                    </label>
                </div>
                <label for="">
                    <input type="checkbox" name="" id="form-input-remember">
                    <span>Recordarme Siempre</span>
                </label>
                <div>
                    <button type="button" onclick="submit()">Enviar</button>
                    <button type="button" onclick="cancel()">Cancelar</button>
                </div>
            </form>
            <div class="hero">
                <img class="hero__bg" src="assets/img/pictures/background/office.png" alt="Background Office">
                <img class="hero__fg" src="assets/img/icons/logo/logo-istrategy-light.png" alt="iStrategy Logo">
            </div>
        </div>
    <?php else : ?>
        <form action="">
            <img src="" alt="">
            <h1>Ingresa tus datos a continuación</h1>
            <label for="">
                <span>Correo Electrónico</span>
                <input type="email" name="" id="login-username" placeholder="Ingrese el Correo">
            </label>
            <label for="">
                <span>Contraseña</span>
                <input type="email" name="" id="login-password" placeholder="Introduzca Contraseña">
            </label>
            <label for="">
                <input type="checkbox" name="" id="login-remember">
                <span>Mantenme Conectado</span>
            </label>
            <button type="button" onclick="validateSesion()">Iniciar Sesión</button>
        </form>
    <?php endif; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/requests.js"></script>
    <script src="assets/js/validations.js"></script>
</body>
</html>