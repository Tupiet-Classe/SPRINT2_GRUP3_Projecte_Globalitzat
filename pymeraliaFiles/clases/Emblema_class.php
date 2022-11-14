<?php 
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
  public function addEmblema(){

}
  
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
    $today = date("m-d-y");  

    $sql = "UPDATE emblems  SET hidden = $today where id_emblem = $this -> idEmblema";
    
    return db_query($sql);
}
  
  /**
   * showEmblema
   *
   * @return void
   */
  public function showEmblema(){
    $sql = "SELECT name_emblem,image FROM emblems WHERE id_emblem = $this->idEmblema"; 
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

  
