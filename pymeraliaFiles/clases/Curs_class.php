<?php
class Curs
{
    private $idCurso;
    private $nombreCurso;
    private $descripcionCurso;
    private $imagenCurso;

    /**
     * __construct - Constructor de clase
     *
     * @param  mixed $idCurso
     * @param  mixed $nombreCurso
     * @param  mixed $descripcionCurso
     * @param  mixed $imagenCurso
     * @return void
     */
    public function __construct($idCurso, $nombreCurso, $descripcionCurso, $imagenCurso)
    {
        $this->idCurso = $idCurso;
        $this->nombreCurso = $nombreCurso;
        $this->descripcionCurso = $descripcionCurso;
        $this->imagenCurso = $imagenCurso;
    }

    /**
     * getIdCurso
     *
     * @return void
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }
    
    /**
     * getNombreCurso
     *
     * @return void
     */
    public function getNombreCurso()
    {
        return $this->nombreCurso;
    }

    /**
     * getDescripcionCurso
     *
     * @return void
     */
    public function getDescripcionCurso()
    {
        return $this->descripcionCurso;
    }

    /**
     * getImagenCurso
     *
     * @return void
     */
    public function getImagenCurso()
    {
        return $this->imagenCurso;
    }

    /**
     * setIdCurso
     *
     * @param  mixed $idCurso
     * @return void
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;
    }

    /**
     * setNombreCurso
     *
     * @param  mixed $nombreCurso
     * @return void
     */
    public function setNombreCurso($nombreCurso)
    {
        $this->nombreCurso = $nombreCurso;
    }

    /**
     * setDescripcionCurso
     *
     * @param  mixed $descripcionCurso
     * @return void
     */
    public function setDescripcionCurso($descripcionCurso)
    {
        $this->descripcionCurso = $descripcionCurso;
    }

    /**
     * setImagenCurso
     *
     * @param  mixed $imagenCurso
     * @return void
     */
    public function setImagenCurso($imagenCurso)
    {
        $this->imagenCurso = $imagenCurso;
    }

    /**
     * addCurso - Futuro método para añadir cursos
     *
     * @return void
     */
    public function addCurso()
    {
    }
    /**
     * editCurso - Futuro método para editar cursos
     *
     * @return void
     */
    public function editCurso()
    {
    }
    /**
     * deleteCurso - Futuro método para eliminar cursos
     *
     * @return void
     */
    public function deleteCurso()
    {
    }
    /**
     * showCursos - Futuro método para mostrar cursos
     *
     * @return void
     */
    public function showCursos()
    {
    }
    /**
     * enableCurso - Futuro método para activar cursos
     *
     * @return void
     */
    public function enableCurso()
    {
    }
    /**
     * disableCurso - Futuro método para desactivar cursos
     *
     * @return void
     */
    public function disableCurso()
    {
    }
    /**
     * assignCurso - Futuro método para asignar cursos
     *
     * @return void
     */
    public function assignCurso($userId)
    {
        include_once '../PHP/connexio.php';
        $conn->query("INSERT INTO Usuari_Curs (`IdUsuaris`, `IdCurs`) VALUES (" . $userId . ", " . $this->getIdCurso() . ")");
    }
    /**
     * unassignCurso - Futuro método para desasignar cursos
     *
     * @return void
     */
    public function unassignCurso()
    {
    }
}
