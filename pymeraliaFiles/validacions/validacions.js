//Validació per a que el camp no estigui buit.
function notEmpty(valor) {
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      return false;
    }
  }
  
  function length(string, minLength, maxLength) {
    if (maxLength)
        return string.length >= minLength && string.length <= maxLength
    else
        return string.length >= minLength
  }
  
  function email(string) {
    let regex = /^\w+@\w+\.\w+$/
    return regex.test(string.trim())
  }
  
  function caracters(valor){
  var iChars = "<>";
  
  for (var i = 0; i < valor; i++) {
      if (iChars.indexOf(valor.charAt(i)) != -1) {
          return false;
      }
  }
  }