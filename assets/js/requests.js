function login(data){
    $.ajax({
        method: "POST",
        url: "login.php",
        dataType: "JSON",
        data: JSON.stringify({ info: data })
    })
        .done(function( response ) {
            console.log(response);
        });
}

function add(data){
    $.ajax({
        method: "POST",
        url: "agregar_usuario.php",
        dataType: "JSON",
        data: JSON.stringify({ info: data })
    })
        .done(function( response ) {
            console.log(response);
            window.location.reload();
        });
}

function del(id){
    $.ajax({
        method: "POST",
        url: "eliminar_usuario.php",
        dataType: "JSON",
        data: JSON.stringify({ ID: id })
    })
        .done(function( response ) {
            console.log(response);
            window.location.reload();
        });
}

function get(id){
    console.log(id);
    $.ajax({
        method: "POST",
        url: "obtener_usuario.php",
        dataType: "JSON",
        data: JSON.stringify({ ID: id })
    })
        .done(function( response ) {
            console.log(response);
            printForm(response);
        });
}

function edit(data,id){
    $.ajax({
        method: "POST",
        url: "editar_usuario.php",
        dataType: "JSON",
        data: JSON.stringify({ info: data, ID: id })
    })
        .done(function( response ) {
            console.log(response);
            window.location.reload();
        });
}

function getAll(){
    $.ajax({
        method: "POST",
        url: "obtener_usuarios.php",
        dataType: "JSON",
        data: JSON.stringify({ info: "obtener_usuarios" })
    })
        .done(function( response ) {
            console.log(response);
            printUsers(response);
            let table = new DataTable('#tablaDatos');
            
        })
            /* .then(function loadTables(){//Datatables starts my table only after the table has been loaded into the HTML
                $(document).ready( function () {//starts the functionality of my table
                    $('#tablaDatos').DataTable();
                } );
            }) */
}