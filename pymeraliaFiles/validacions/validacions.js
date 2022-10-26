//Validació per a que el camp no estigui buit.
function notEmpty(valor) {
  if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
    return false;
  }
}

//Validació per a que tingui una llargaria minima i una màxima (opcional la màxima).
function length(string, minLength, maxLength) {
  if (maxLength)
    return string.length >= minLength && string.length <= maxLength
  else
    return string.length >= minLength
}

//Validació per a que el camp contingui un email.
function email(string) {
  let regex = /^\w+@\w+\.\w+$/
  return regex.test(string.trim())
}

//Validació per a que no accepti caracters especials "<>".
function caracters(valor) {
  var iChars = "<>";

  for (var i = 0; i < valor; i++) {
    if (iChars.indexOf(valor.charAt(i)) != -1) {
      return false;
    }
  }
}

//Validació per a acceptar una URL.
function isValidUrl(string) {
  let pattern = /^(http|https)\:\/\/[a-z0-9\.-]+\.[a-z]{2,4}/gi;
  return pattern.test(string.trim())
}