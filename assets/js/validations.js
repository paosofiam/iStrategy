/* Inputs Reading */
let errors = false;

function readInput(id,required){
    var data = document.getElementById(id).value;
    if(required && data === ''){
        //code if the field is empty
        errors = true;
    }
    return data;
}

function readCheckbox(id,required){
    var data = document.getElementById(id).checked;
    if(required && !data){
        //code if checkbox isn't checked
        errors = true;
    }
    return data;
}

function readRadio(name,required){
    var element = document.querySelector('input[name='+name+']:checked');
    var data = '';
    if(element === null){
        if(required){
            //code if no option is selected
            errors = true;
        }
    }
    else{
        data = element.value;
    }
    return data;
}
/* Validations */
const VALIDEMAIL =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

function validateEmail(email){
    if( !VALIDEMAIL.test(email) ){
        //Code if email isn't valid
        errors = true;
        return false;
    }else{
        return true;
    }
}

function measurePassword(pass,lenght){
    if(pass.length >= lenght){
        return true;
    }
    else{
        //Code if password has less characters than required
        errors = true;
        return false;
    }
}

function matchPassword(pass1,pass2){
    if(pass1 === pass2){
        return true;
    }
    else{
        //code if passwords don't match
        errors = true;
        return false;
    }
}
/* Printing Errors */
function printWarning(id,validity,className){
    var input = document.getElementById(id).classList;
    if(validity){
        input.remove(className);
    }
    else{
        input.add(className);
    }
}
/* Forms Reading */
function readForm(id){
    var uname = readInput('form-input-username',true);
    var email = readInput('form-input-email',true);
    var pass1 = readInput('form-input-password1',true);
    var pass2 = readInput('form-input-password2',true);
    var gender = readRadio('form-input-gender',true);
    var remember = readCheckbox('form-input-remember',false);
    if(errors){
        errors = false;
    }
    else{
        var data = {
            'username' : uname,
            'email' : email,
            'password1' : pass1,
            'password2' : pass2,
            'gender' : gender,
            'remember' : remember
        }
        if(id === 0){
            add(data);
        }
        else{
            edit(data,id);
        }
    }
}

function readLogin(){
    var email = readInput('form-input-email',true);
    var password = readInput('form-input-password1',true);
    var remember = readCheckbox('form-input-remember',false);
    var data = {
        'email' : email,
        'password' : password,
        'remember' : remember
    }
    login(data);
}