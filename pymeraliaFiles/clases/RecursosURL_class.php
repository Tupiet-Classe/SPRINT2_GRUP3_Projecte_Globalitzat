<?php 
include("../PHP/connexio.php");
include("../PHP/databaseFunctions.php");


class Recurso {
  private $idRecurso;
  private $imagenRecurso;


  
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
  public function __construct(){
  
    $arguments = func_get_args();
    $numberOfArguments = func_num_args();

    if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
        call_user_func_array(array($this, $function), $arguments);
    }
  }
  
  public function __construct1($idRecurso){
    $this->idRecurso = $idRecurso;
  }

  public function __construct4($imagenRecurso){
    $this->imagenRecurso = $imagenRecurso;
  }


  /**
   * getIdEmblema
   *
   * @return void
   */
  public function getIdERecurso(){
    return $this->idRecurso;
  }
  
  
  /**
   * getImagenEmblema
   *
   * @return void
   */
  public function getImagenrecurso(){
    return $this->imagenRecurso;
  }

  
  /**
   * setIdRecurso
   *
   * @param  mixed $idEmblema
   * @return void
   */
  public function setIdEmblema($idRecurso){
    $this->idRecurso = $idRecurso;
  }
  
  /**
  
   * setImagenRecurso
   *
   * @param  mixed $imagenEmblema
   * @return void
   */
  private function setImagenEmblema($imagenRecurso){
    $this->imagenRecurso = $imagenRecurso;
  }

  
  /**
   * addEmblema
   *
   * @return void
   */
  public function addRecursos(){
    $sql = "INSERT INTO deliveries (locate, grade, id_activity, id_user)  VALUES ('$this->imagenRecurso', NULL, 1, 1)";
    db_query($sql);
  }

  
  /**
   * editEmblema
   *
   * @return void
   */
  public function editEmblema(){

  }

  
  /**
   * papeleraEmblema
   *
   * @return void
   */
  public function papeleraEmblema(){

    $fechaActual = date('Y-m-d');
    
    $sql = "UPDATE emblems SET hidden = '$fechaActual' WHERE id_emblem = $this->idEmblema";
    db_query($sql);
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
    $sql = "SELECT name_emblem,description_emblem,image,id_course FROM emblems"; 
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