<?php
require 'database_conection.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo_comic = $_POST["titulo_comic"];

        $sql = $_conexion -> prepare("DELETE FROM comics
            WHERE titulo_comic = ?");
        $sql -> bind_param("s", $titulo_comic);
        $sql -> execute();
    
        $_conexion -> close();
        header("location: index.php");
    }
    ?>