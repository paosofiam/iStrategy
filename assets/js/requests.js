function login(data){
    $.ajax({
        method: "POST",
        url: "login.php",
        data: { info: data }
    })
        .done(function( response ) {
            console.log(response);
        });
}

function add(data){
    $.ajax({
        method: "POST",
        url: "agregar_usuario.php",
        data: { info: data }
    })
        .done(function( response ) {
            console.log(response);
        });
}

function del(id){
    $.ajax({
        method: "DELETE",
        url: "eliminar_usuario.php",
        data: { ID: id }
    })
        .done(function( response ) {
            console.log(response);
        });
}

function get(id){
    $.ajax({
        method: "GET",
        url: "obtener_usuario.php",
        data: { ID: id }
    })
        .done(function( response ) {
            console.log(response);
        });
}

function edit(data){
    $.ajax({
        method: "PUT",
        url: "editar_usuario.php",
        data: { info: data }
    })
        .done(function( response ) {
            console.log(response);
        });
}

function getAll(){
    $.ajax({
        method: "GET",
        url: "obtener_usuarios.php",
        data: { info: "obtener_usuarios" }
    })
        .done(function( response ) {
            console.log(response);
        });
}