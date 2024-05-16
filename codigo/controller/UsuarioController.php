<?php
namespace App\controller; // Ubicacion de la clase

use App\controller\ConexDBController;


class UsuarioController{
    function validarUsuario($usuario){
        $conex = new ConexDBController();
        $conex = $dataBase->conect($sql);
        $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' and pwd='$pws' ";
        $contactos = [];
        if ($result->num_rows == 0) {
            return $contactos;
        }
        while ($item = $result->fetch_assoc()) {
            $contacto = new Contacto();
            $contacto->set('id', $item['id']);
            $contacto->set('nombre', $item['nombre']);
            $contacto->set('email', $item['email']);
            $contacto->set('telefono', $item['telefono']);
            array_push($contactos, $contacto);
        }
        $dataBase->close();
        return $contactos;
 
    }

    function create($contacto)
    {
        $sql = "insert into contactos(nombre,email,telefono)values";
        $sql .= "(";
        $sql .= "'".$contacto->get('nombre')."',";
        $sql .= "'".$contacto->get('email')."',";
        $sql .= "'".$contacto->get('telefono')."'";
        $sql .= ")";
        $dataBase = new DataBaseController();
        $result = $dataBase->conect($sql);
        $dataBase->close();
        return $result;
    }
}

?>