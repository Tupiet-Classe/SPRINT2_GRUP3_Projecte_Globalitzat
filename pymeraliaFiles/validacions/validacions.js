export function notEmpty(valor) {
if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
  return false;
}
}