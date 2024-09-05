let formUsername = document.getElementById('form-input-username');
let formEmail = document.getElementById('form-input-email');
let formPassword1 = document.getElementById('form-input-password1');
let formPassword2 = document.getElementById('form-input-password2');
let formGenderM = document.getElementById('form-input-genderM');
let formGenderF = document.getElementById('form-input-genderF');
let formRemember = document.getElementById('form-input-remember');
let formSubmit = document.getElementById('form-button-submit');
let modalDel = document.getElementById('modal-button-delete');
let modalCancel = document.getElementById('modal-button-cancel');
/* Print info */
function printUsers(data){
    var theString = '';
    data.forEach(user => {
        theString = theString + '<tr id="row-table-template"><td>'+user.ID+'</td><td>'+user.username+'</td><td>'+user.email+'</td><td>'+user.gender+'</td><td class="flx-row-c-se"><button class="flx-col-c-c" type="button" onclick="editForm('+user.ID+')"><img src="assets/img/icons/ui/pen.png" alt="Edit" height="24px" width="auto"></button><button class="flx-col-c-c" type="button" onclick="remove('+user.ID+')"><img src="assets/img/icons/ui/trash-can.png" alt="Delete" height="24px" width="auto"></button></td></tr>'
    });
    document.getElementById('dynamic-table').innerHTML = theString;
}

function printForm(data){
    formUsername.value = data.username;
    formEmail.value = data.email;
    formPassword1.value = data.password;
    formPassword2.value = data.password;
    if(data.gender === 'Masculino'){
        formGenderM.checked = true;
    }
    else if(data.gender === 'Femenino'){
        formGenderF.checked = true;
    }
    if(data.remember == true){
        formRemember.checked = true;
    }
    formSubmit.setAttribute('onclick','readForm('+data.ID+')')
}

function clearForm(){
    formUsername.value = '';
    formEmail.value = '';
    formPassword1.value = '';
    formPassword2.value = '';
    formGenderM.checked = false;
    formGenderF.checked = false;
    formRemember.checked = false;
    formSubmit.setAttribute('onclick','readForm(0)');
    modalCancel.setAttribute('onclick','del();');
}
/* Interactions */
function toggleElement(id,display){
    var element = document.getElementById(id);
    if(element.style.display !== 'none'){
        element.style.display = 'none';
    }
    else{
        element.style.display = display;
    }
}

function openForm(){
    toggleElement('seccion_tabla','block');
    toggleElement('seccion_registrar','block');
}

function closeForm(){
    toggleElement('seccion_tabla','block');
    toggleElement('seccion_registrar','block');
    clearForm();
}

function editForm(id){
    get(id);
    toggleElement('seccion_tabla','block');
    toggleElement('seccion_registrar','block');
}

function remove(id){
    console.log('hey!')
    modalDel.setAttribute('onclick','del('+id+');');
    toggleElement('modal-rUSure','flex');
}

function cancelDel(){
    modalDel.setAttribute('onclick','del();');
    toggleElement('modal-rUSure','flex');
}