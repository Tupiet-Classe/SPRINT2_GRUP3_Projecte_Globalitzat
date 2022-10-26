export function notEmpty(valor) {
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    return false;
  }
}

export function length(string, minLength, maxLength) {
  if (maxLength)
      return string.length >= minLength && string.length <= maxLength
  else
      return string.length >= minLength
}

export function email(string) {
  let regex = /^\w+@\w+\.\w+$/
  return regex.test(string.trim())
}
