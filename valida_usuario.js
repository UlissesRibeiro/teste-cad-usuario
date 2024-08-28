function validar(){
    var usuario = document.getElementById("usuario").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    
    var valido = true;

    if(usuario.length < 2 || usuario.length > 16) {
        document.getElementById("msg-usuario").innerHTML="* O nome de usúario precisa ter entre 2 a 16 caracteres";
        valido = false;
    }else{
        document.getElementById("msg-usuario").innerHTML="";
    }

    if(email=="") {
        document.getElementById("msg-email").innerHTML="* O email é obrigatório";
        valido = false;
    }else{
        document.getElementById("msg-email").innerHTML="";
    }

    if(senha.length < 8 || senha.length > 16) {
        document.getElementById("msg-senha").innerHTML="* A senha precisa conter de 8 a 16 caracteres";
        valido = false;
    }else{
        document.getElementById("msg-senha").innerHTML="";
    }

    return valido;
}