<?php
include("../PHP/connexio.php")
class Recursos{
    public $idRecurso;
    public $nombreRecurso;

    /** Constructor de la clase Recursos */    
    /**
     * __construct
     *
     * @param  mixed $idRecurso
     * @param  mixed $nombreRecurso
     * @return void
     */
    public function __construct($idRecurso, $nombreRecurso){
        $this->idRecurso = $idRecurso;
        $this->nombreRecurso = $nombreRecurso;
    }

    /** getter Id Recurso */    
    /**
     * getIdRecurso
     *
     * @return void
     */
    public function getIdRecurso(){
        return $this->idRecurso;
    }

    /** getter Nombre Recurso */    
    /**
     * getNombreRecurso
     *
     * @return void
     */
    public function getNombreRecurso(){
        return $this->nombreRecurso;
    }

    /** setter Id Recurso */    
    /**
     * setIdRecurso
     *
     * @param  mixed $idRecurso
     * @return void
     */
    public function setIdRecurso($idRecurso){
        $this->idRecurso = $idRecurso;
    }

    /** setter Nombre Recurso */    
    /**
     * setNombreRecurso
     *
     * @param  mixed $nombreRecurso
     * @return void
     */
    public function setNombreRecurso($nombreRecurso){
        $this->nombreRecurso = $nombreRecurso;
    }

    /** Método que añade un recurso nuevo */    
    /**
     * addRecursos
     *
     * @return void
     */
    public function addRecursos(){

    }

    /** Método que edita un recurso existente */    
    /**
     * editRecursos
     *
     * @return void
     */
    public function editRecursos(){

    }

    /** Método que envia a la papelera un recurso existente */    
    /**
     * deleteRecursos
     *
     * @return void
     */
    public function papeleraRecursos($tblname,$field_id,$id){
        $today = date("m-d-y");  
    }

    /** Método que elimina un recurso existente */    
    /**
     * deleteRecursos
     *
     * @return void
     */
    public function deleteRecursos($tblname,$field_id,$id){

        $sql = "DELETE from ".$tblname." WHERE ".$field_id."=".$id."";
        
        return db_query($sql);
    }

    /** Método que muestra un recurso existente */    
    /**
     * showRecursos
     *
     * @return void
     */
    public function showRecursos(){

    }

    /** Método que asigna un recurso */    
    /**
     * assignRecurso
     *
     * @return void
     */
    public function assignRecurso(){

    }

    /** Método que desasigna un recurso */    
    /**
     * unassignRecurso
     *
     * @return void
     */
    public function unassignRecurso(){

    }
}
?>