<?php

class controladorContactos
{
    var $conexiondb = null;
    public function Create($contacto)
    {
        $query = "INSERT INTO tb_contactos VALUES(UUID(),:cedula,:nombre,:correo,:telefono,:empresa,:estado,NOW())";
        try {
            $statement = $this->conexiondb->prepare($query);
            $statement->bindParam(':cedula', $contacto->cedula);
            $statement->bindParam(':nombre', $contacto->nombre);
            $statement->bindParam(':correo', $contacto->correo);
            $statement->bindParam(':telefono', $contacto->telefono);
            $statement->bindParam(':empresa', $contacto->empresa);
            $statement->bindParam(':estado', $contacto->estado);
            $statement->execute();
            return 1;
        } catch (\PDOException $e) {
            echo 'Error al ejecutar acción: ' . $e;
            exit();
        }
    }
}
