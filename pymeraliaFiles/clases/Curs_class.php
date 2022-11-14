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
            $sql = "SELECT name_course from courses where id_course = $this->idCurso"; 
            $db=db_query($sql);
            return $db;
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
     * assignCurso - Método para asignar cursos
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

        $insert = $conn->prepare("INSERT INTO Usuari_Curs (IdUsuaris, IdCurs) VALUES (?, ?)");
        $insert->bind_param('ii', $userId, $this->idCurso);

        $success;
        
        try {
            $success = $insert->execute();
        } catch (\Throwable $th) {
            $success = false;
        }

        $conn->close();

        return $success;


    }
    /**
     * unassignCurso - Método para desasignar cursos
     *
     * @return void
     */
    public function unassignCurso($user) {
        include_once '../PHP/connexio.php';
        // Primer, revisarem si aquest usuari està assignat a aquest curs o no
        $existsQuery = $conn->prepare('SELECT Id FROM Usuari_Curs WHERE IdCurs = ? AND IdUsuaris = ?');
        $existsQuery->bind_param('ii', $this->idCurso, $user);
        $existsQuery->execute();

        $resultExists = $existsQuery->get_result();
        if ($resultExists->num_rows > 0) {
            // L'usuari està assignat
            $idToDelete = $resultExists->fetch_all(MYSQLI_ASSOC)[0]['Id'];
            $unassignQuery = $conn->prepare('DELETE FROM Usuari_Curs WHERE Id = ?');
            $unassignQuery->bind_param('i', $idToDelete);
            $unassignQuery->execute();
        } 

        $conn->close();
    }

    public function get_users_from_course() {
        include_once '../PHP/connexio.php';

        $selectQuery = $conn->prepare('SELECT Usuaris.Id, Usuaris.NomUsuaris, Usuaris.Nom, Usuaris.Cognom FROM Usuaris INNER JOIN Usuari_Curs ON Usuaris.Id = Usuari_Curs.IdUsuaris WHERE Usuari_Curs.IdCurs = ?');
        $selectQuery->bind_param('i', $this->idCurso);

        $selectQuery->execute();

        $result = $selectQuery->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else return false;

        $conn->close();
    } 

    public function get_id_from_query($query) {
        $query->execute();
        
        $result = $query->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC)[0]['Id'];
        }
    }
}
