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
    public function assignCurso($user)
    {
        include_once '../PHP/connexio.php';

        $userId;

        if (preg_match("/^\w+@\w+\.\w+$/", $user)) {
            $emailQuery = $conn->prepare("SELECT Id FROM Usuaris WHERE Email = ?");
            $emailQuery->bind_param('s', $user);

            $userId = $this->get_id_from_query($emailQuery);
        } else {
            $usernameQuery = $conn->prepare("SELECT Id FROM Usuaris WHERE NomUsuaris = ?");
            $usernameQuery->bind_param('s', $user);

            $userId = $this->get_id_from_query($usernameQuery);
        }

        $idCurs = 4;
        $insert = $conn->prepare("INSERT INTO Usuari_Curs (IdUsuaris, IdCurs) VALUES (?, ?)");
        $insert->bind_param('ii', $userId, $idCurs);

        $success;
        
        try {
            $success = $insert->execute();
        } catch (\Throwable $th) {
            $success = false;
        }

        return $success;


    }
    /**
     * unassignCurso - Futuro método para desasignar cursos
     *
     * @return void
     */
    public function unassignCurso()
    {
    }

    private function get_id_from_query($query) {
        $query->execute();
        
        $result = $query->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC)[0]['Id'];
        }
    }
}
