<?php
class Valoraciones{
    private $idValoracion;
    private $valoracionCurso;
    private $feedbackCurso;

    /** Constructor de la clase Recursos */    
    /**
     * __construct
     *
     * @param  mixed $idValoracion
     * @param  mixed $valoracionCurso
     * @param  mixed $feedbackCurso
     * @return void
     */
    public function __construct($idValoracion, $valoracionCurso, $feedbackCurso){
        $this->idValoracion = $idValoracion;
        $this->valoracionCurso = $valoracionCurso;
        $this->feedbackCurso = $feedbackCurso;
    }

    /** getter Id Valoracion */    
    /**
     * getIdValoracion
     *
     * @return void
     */
    public function getIdValoracion(){
        return $this->idValoracion;
    }

    /** getter Valoracion Curso */    
    /**
     * getValoracionCurso
     *
     * @return void
     */
    public function getValoracionCurso(){
        return $this->valoracionCurso;
    }

    /** getter Feedback Curso */    
    /**
     * getFeedbackCurso
     *
     * @return void
     */
    public function getFeedbackCurso(){
        return $this->feedbackCurso;
    }

    /** setter Id Valoracion */    
    /**
     * setIdValoracion
     *
     * @param  mixed $idValoracion
     * @return void
     */
    private function setIdValoracion($idValoracion){
        $this->idValoracion = $idValoracion;
    }

    /** setter Valoracion Curso */    
    /**
     * setValoracionCurso
     *
     * @param  mixed $valoracionCurso
     * @return void
     */
    private function setValoracionCurso($valoracionCurso){
        $this->valoracionCurso = $valoracionCurso;
    }

    /** setter Feedback Curso */    
    /**
     * setFeedbackCurso
     *
     * @param  mixed $feedbackCurso
     * @return void
     */
    private function setFeedbackCurso($feedbackCurso){
        $this->$feedbackCurso = $feedbackCurso;
    }

    /** Método que añade una valoracion nueva */    
    /**
     * addValoracion
     *
     * @return void
     */
    private function addValoracion(){

    }

    /** Método que edita una valoracion existente */    
    /**
     * editValoracion
     *
     * @return void
     */
    private function editValoracion(){

    }

    /** Método que elimina una valoracion existente*/    
    /**
     * deleteValoracion
     *
     * @return void
     */
    private function deleteValoracion(){

    }

    /** Método que muestra una valoracion existente */    
    /**
     * showValoracion
     *
     * @return void
     */
    public function showValoracion(){

    }

    /** Método que asigna una valoracion */    
    /**
     * assignValoracion
     *
     * @return void
     */
    private function assignValoracion(){

    }

    /** Método que desasigna una valoracion */    
    /**
     * unassignValoracion
     *
     * @return void
     */
    private function unassignValoracion(){

    }
}
?>