import Dropzone from "dropzone";

//Esta linea de codigo hace que los campos que tienen el id "dropzone "no
// adopten el campo, evita la deteccion automatica, haciendo que sea necesari
// la cracion de una instancia manual

Dropzone.autoDiscover = false;


const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage : "Sube aqui tu imagen",
    acceptedFiles : ".png, .jpg, .jpeg, .gif",
    addRemoveLinks : true,
    dictRemoveFile : "Borrar archivo",
    maxFiles : 1,
    uploadMultiple : false,
    });
