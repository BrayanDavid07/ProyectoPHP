<?php

class ModeloContactos
{
    var $conexiondb = null;
    public function Create($contacto)
    {
        $query = "INSERT INTO tb_contactos VALUES(uuid(),:cedula,:nombre,:correo,:telefono,:empresa,:estado,NOW())";
        try {
            $statement = $this->conexiondb->prepare($query);
            $statement->bindParam(':cedula', $contacto->cedula);
            $statement->bindParam(':nombre', $contacto->nombre);
            $statement->bindParam(':correo', $contacto->correo);
            $statement->bindParam(':telefono', $contacto->telefono);
            $statement->bindParam(':empresa', $contacto->empresa);
            $statement->bindParam(':estado', $contacto->estado);
            $statement->execute();
            echo 1;
        } catch (\PDOException $e) {
            echo 'Error al ejecutar acción: ' . $e;
            exit();
            echo 0;
        }
    }

    public function ListContactos()
    {
        $query = "SELECT * FROM tb_contactos ORDER BY fechareg DESC";
        try {
            $statement = $this->conexiondb->prepare($query);
            $statement->execute();
            $array = $statement->fetchAll(\PDO::FETCH_OBJ);
            echo $array;
        } catch (\PDOException $e) {
            echo 'Error al ejecutar consulta: ' . $e;
            exit();
            echo 0;
        }
    }
}
