<?php

// use PDO;

class ConnectionDataBase
{
    //Crear conexión
    public function Conexion()
    {
        $servidor = 'localhost';
        $dabaBase = 'pruebas';
        $user = 'root';
        $password = '';
        return $this->ConexionParams($servidor, $dabaBase, $user, $password);
    }

    public function ConexionParams($servidor, $dabaBase, $user, $password)
    {
        try {
            $dsn = 'mysql:host=' . $servidor . ';dbname=' . $dabaBase;
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $connection = new PDO($dsn, $user, $password, $options);
            // echo 'Conexión establecida';
        } catch (PDOException $exeption) {
            $connection = null;
            echo 'Ocurrio un error al intentar conectar a la base de datos: '.$exeption;            
        }    
        return $connection;
    }
}

?>
