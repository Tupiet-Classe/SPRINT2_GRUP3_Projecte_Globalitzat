<?php 
include("../PHP/connexio.php");
include("../PHP/databaseFunctions.php");
class Emblema {
  private $idEmblema;
  private $nombreEmblema;
  private $descripcionEmblema;
  private $imagenEmblema;

  
  /** Constructor de la classe Emblema */
  /**
   * __construct
   *
   * @param  mixed $idEmblema
   * @param  mixed $nombreEmblema
   * @param  mixed $descripcionEmblema
   * @param  mixed $imagenEmblema
   * @return void
   */
  public function __construct($idEmblema, $nombreEmblema, $descripcionEmblema, $imagenEmblema){
    $this->idEmblema = $idEmblema;
    $this->nombreEmlema = $nombreEmblema;
    $this->descripcionEmblema = $descripcionEmblema;
    $this->imagenEmblema = $imagenEmblema;
  }
  
  /**
   * getIdEmblema
   *
   * @return void
   */
  public function getIdEmblema(){
    return $this->idEmlema;
  }
  
  /**
   * getNombreEmblema
   *
   * @return void
   */
  public function getNombreEmblema(){
    return $this->nombreEmblema;
  }
  
  /**
   * getDescripcionEmblema
   *
   * @return void
   */
  public function getDescripcionEmblema(){
    return $this->descripcionEmblema;
  }
  
  /**
   * getImagenEmblema
   *
   * @return void
   */
  public function getImagenEmblema(){
    return $this->imagenEmblema;
  }

  
  /**
   * setIdEmblema
   *
   * @param  mixed $idEmblema
   * @return void
   */
  public function setIdEmblema($idEmblema){
    $this->idEmblema = $idEmblema;
  }
  
  /**
   * setNombreEmblema
   *
   * @param  mixed $nombreEmblema
   * @return void
   */
  public function setNombreEmblema($nombreEmblema){
    $this->nombreEmblema = $nombreEmblema;
  }
  
  /**
   * setDescripcionEmblema
   *
   * @param  mixed $descripcionEmblema
   * @return void
   */
  public function setDescripcionEmblema($descripcionEmblema){
    $this->descripcionEmblema = $descripcionEmblema;
  }
  
  /**
   * setImagenEmblema
   *
   * @param  mixed $imagenEmblema
   * @return void
   */
  public function setImagenEmblema($imagenEmblema){
    $this->imagenEmblema = $imagenEmblema;
  }

  
  /**
   * addEmblema
   *
   * @return void
   */
  /*public function addEmblema(){
    $sql = "INSERT FROM WHERE ";
    $db = db_query();
  }*/

  
  /**
   * editEmblema
   *
   * @return void
   */
  public function editEmblema(){

  }

  
  /**
   * deleteEmblema
   *
   * @return void
   */
  public function deleteEmblema(){

  }
  
  /**
   * showEmblema
   *
   * @return void
   */
  public static function showEmblema(){
    $sql = "SELECT name_emblem,image FROM emblems"; 
    $db = db_query($sql);
    return $db;
  }
  
  /**
   * enableEmlema
   *
   * @return void
   */
  public function enableEmlema(){

  }
  
  /**
   * disableEmblema
   *
   * @return void
   */
  public function disableEmblema(){

  }
  
  /**
   * assingEmblema
   *
   * @return void
   */
  public function assingEmblema(){

  }
  
  /**
   * unassingEmlema
   *
   * @return void
   */
  public function unassingEmlema(){

  }

}
?>

  
