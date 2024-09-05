let formUsername = document.getElementById('form-input-username');
let formEmail = document.getElementById('form-input-email');
let formPassword1 = document.getElementById('form-input-password1');
let formPassword2 = document.getElementById('form-input-password2');
let formGenderM = document.getElementById('form-input-genderM');
let formGenderF = document.getElementById('form-input-genderF');
let formRemember = document.getElementById('form-input-remember');
let formSubmit = document.getElementById('form-button-submit');
/* Print info */
function printUsers(data){
    var theString = '';
    data.forEach(user => {
        theString = theString + '<tr id="row-table-template"><td>'+user.ID+'</td><td>'+user.username+'</td><td>'+user.email+'</td><td>'+user.gender+'</td><td><button type="button" onclick="edit('+user.ID+')"><img src="" alt=""></button><button type="button" onclick="remove('+user.ID+')"><img src="" alt=""></button></td></tr>'
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
    formSubmit.setAttribute('onclick','readForm('+data.id+')')
}

function clearForm(){
    formUsername.value = '';
    formEmail.value = '';
    formPassword1.value = '';
    formPassword2.value = '';
    formGenderM.checked = false;
    formGenderF.checked = false;
    formRemember.checked = false;
    formSubmit.setAttribute('onclick','readForm(0)')
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