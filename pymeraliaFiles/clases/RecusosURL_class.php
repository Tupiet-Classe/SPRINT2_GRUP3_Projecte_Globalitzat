<?php
include("../PHP/connexio.php")
class Recursos{
    private $idRecurso;
    private $nombreRecurso;

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
    private function setIdRecurso($idRecurso){
        $this->idRecurso = $idRecurso;
    }

    /** setter Nombre Recurso */    
    /**
     * setNombreRecurso
     *
     * @param  mixed $nombreRecurso
     * @return void
     */
    private function setNombreRecurso($nombreRecurso){
        $this->nombreRecurso = $nombreRecurso;
    }

    /** Método que añade un recurso nuevo */    
    /**
     * addRecursos
     *
     * @return void
     */
    private function addRecursos(){

    }

    /** Método que edita un recurso existente */    
    /**
     * editRecursos
     *
     * @return void
     */
    private function editRecursos(){

    }

    /** Método que envia a la papelera un recurso existente */    
    /**
     * deleteRecursos
     *
     * @return void
     */
    private function papeleraRecursos($tblname,$field_id,$id){
        $paperera = "SELECT Ocult FROM recursosURL";
        if($paperera is true){
            "UPDATE recursos SET paperera = false WHERE Id = id element(agafar la id del recurs)";
        }
    }

    /** Método que elimina un recurso existente */    
    /**
     * deleteRecursos
     *
     * @return void
     */
    private function deleteRecursos($tblname,$field_id,$id){

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
    private function assignRecurso(){

    }

    /** Método que desasigna un recurso */    
    /**
     * unassignRecurso
     *
     * @return void
     */
    private function unassignRecurso(){

    }
}
?>