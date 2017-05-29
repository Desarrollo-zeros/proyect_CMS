
$(document).ready(function(){

    $("#book").val(Mensaje);
    $("#multistepform-example-container").hide();

});

function Mensaje() {
           swal({
                title: "Bienvenido a Proyect 0.1 CMS para world of warcraft",
                text: 'Bienvenido a World of Warcraft® (el “Juego”), creado por Blizzard Entertainment Inc. creado por Blizzard Entertainment, Inc. El Juego incluye dos componentes:' +
               ' (a) el software, material adjunto y documentación (colectivamente el “Cliente de Juego”) y (b) el servicio en línea de World of Warcraft (el “Servicio”), propiedad de Blizzard' +
                   ' Entertainment. Su uso del Cliente de Juego estará regido por el Contrato de Licencia para Usuario Final (el “CLUF”). Su uso del Servicio está sujeto a estas Condiciones de Uso y al' +
               ' Contrato de Condiciones de Uso de Battle.net (las “CDU de BNET”) incorporados al presente por medio de esta referencia. Es necesario que acepte el CLUF, las Condiciones de Uso y las CDU' +
               ' de BNET (colectivamente los “Contratos de Blizzard”) antes de utilizar el Juego.',
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#28dd0b",
                confirmButtonText: "Si, Deseo Instalar",
                cancelButtonText: "No, Cancelar!",
                closeOnConfirm: false,
                closeOnCancel: false
           }).then(function () {
               swal("OJO!","Usted!, ha Aceptado la Instalacion ","warning");
               $('#squarespaceModal').modal('show');
           }, function (dismiss) {
               // dismiss can be 'cancel', 'overlay',
               // 'close', and 'timer'
               if (dismiss === 'cancel') {
                   swal("OJO!","Usted!, ha cancelado la instalacion, Si desea ","error");
               }
           });
}

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password1');
    var pass2 = document.getElementById('password2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Las contraseñas coinciden"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Las contraseñas no coinciden!"
    }
}

$(document).ready(function(){
    $('form.jsform').on('submit', function(form){
        form.preventDefault();
        if($("#password1").val() == $("#password2").val()){
            $.post('system.php?id=1', $('form.jsform').serialize(), function(data){
                if(data != ""){
                    $("#squarespaceModal").hide();
                    swal({
                        title: 'Datos Guardados',
                        timer: 2000
                    }).then(
                        function () {modalDB();},
                        // handling the promise rejection
                        function (dismiss) {
                            if (dismiss === 'timer') {
                                modalDB();
                            }
                        });
                }else{
                    swal({
                        title: "Error!",
                        text: "Error no se ha podido guardar los datos.",
                        imageUrl: "http://localhost/San_Jorge/plugin/img/bad.jpg"
                    });
                }
            });
        }else{
            swal("Error!","Las Contraseñas no son iguales","error");
        }
    });
});

function modalDB() {
    $.multistepform({
        container:'multistepform-example-container',
        form_method: 'POST'
    });
}




