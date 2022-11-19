function val() {
    var mailuser = document.getElementById("corre").value;
    var docuser = document.getElementById("id").value;
    var passwuser = document.getElementById("clave").value;
    var nameuser = document.getElementById("nombre").value;
   


    if (mailuser == "" || docuser == "" || passwuser == "" || nameuser == "") {

        alert("Rellene los campos faltantes");
        return false;
    }

    if (isNaN(docuser)) {

        alert("Solo se aceptan números en el campo de documento");
        return false;
    }

    
    if(! /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(mailuser)){
        alert("Correo no valido ");
        return false;
    }
    
  


}
function consulta() {
    var docuserconsul = document.getElementById("id").value;
    if(!docuserconsul){
        alert("Rellene los datos");
        return false;
    }
  
}

function usercon(){
    var userx = document.getElementById("nombre").value;
    var passx = document.getElementById("clave").value;
    if(!userx || !passx){
        alert("Rellene los datos");
        return false;
    }

}