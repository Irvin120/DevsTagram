import Dropzone from "dropzone";

//Esta linea de codigo hace que los campos que tienen el id "dropzone "no
// adopten el campo, evita la deteccion automatica, haciendo que sea necesari
// la cracion de una instancia manual

Dropzone.autoDiscover = false;


const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube aqui tu imagen",
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar archivo",
    maxFiles: 1,
    uploadMultiple: false,
});

//Eventos para debuguer de manaera mas comoda

//enviando
dropzone.on("sending", function (file, xhr, formData) {
    console.log(Response);
});

//exitoso
dropzone.on("success", function (file, response) {
    console.log(response);
    });

//error
dropzone.on("error", function (file, message) {
console.log(message);
});

dropzone.on("removedfile", function () {
    console.log('Archivo Eliminado');
    });


