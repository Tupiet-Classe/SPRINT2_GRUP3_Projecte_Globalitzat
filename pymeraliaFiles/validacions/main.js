import * as validate from "./validacions.js"

function prov(){ 
    console.log(validate.length(document.getElementById("nombre-del-curso"),5,12))
}