<?php 
class Qualificacions {
  private $idQualificacions;
  private $notaQualificacions;
  private $descripcionQualificacions;

  
  /**
   * __construct
   *
   * @param  mixed $idQualificacions
   * @param  mixed $notaQualificacions
   * @param  mixed $descripcionQualificacions
   * @return void
   */
  public function __construct($idQualificacions, $notaQualificacions, $descripcionQualificacions){
    $this->idQualificacions = $idQualificacions;
    $this->notaQualificacions = $notaQualificacions;
    $this->descripcionQualificacions = $descripcionQualificacions;
  }
  
  /**
   * getIdQualificacions
   *
   * @return void
   */
  public function getIdQualificacions(){
    return $this->idQualificacions;
  }
  
  /**
   * getnotaQualificacions
   *
   * @return void
   */
  public function getNotaQualificacions(){
    return $this->notaQualificacions;
  }
  
  /**
   * getDescripcionQualificacions
   *
   * @return void
   */
  public function getDescripcionQualificacions(){
    return $this->descripcionQualificacions;
  }
  


  
  /**
   * setIdQualificacions
   *
   * @param  mixed $idQualificacions
   * @return void
   */
  private function setIdQualificacions($idQualificacions){
    $this->idQualificacions = $idQualificacions;
  }
  
  /**
   * setnotaQualificacions
   *
   * @param  mixed $notaQualificacions
   * @return void
   */
  private function setNotaQualificacions($notaQualificacions){
    $this->notaQualificacions = $notaQualificacions;
  }
  
  /**
   * setDescripcionQualificacions
   *
   * @param  mixed $descripcionQualificacions
   * @return void
   */
  private function setDescripcionQualificacions($descripcionQualificacions){
    $this->descripcionQualificacions = $descripcionQualificacions;
  }


  
  /**
   * addQualificacions
   *
   * @return void
   */
  private function addQualificacions(){

}
  
  /**
   * editQualificacions
   *
   * @return void
   */
  private function editQualificacions(){

}
  
  /**
   * deleteQualificacions
   *
   * @return void
   */
  private function deleteQualificacions(){

}
  
  /**
   * showQualificacions
   *
   * @return void
   */
  public function showQualificacions(){

}

}
?>

  
