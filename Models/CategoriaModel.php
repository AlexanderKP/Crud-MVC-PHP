<?php

class CategoriaModel{

    function __construct()
    {
        try
		{
			$this->cn = Conexion::conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }
    public function allCategorias(){
        $sql="SELECT * FROM categorias";
        $result=$this->cn->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
    public function categoriaForId($idCategoria){
        $sql="SELECT * FROM categorias where idcategoria=?";
        $result=$this->cn->prepare($sql);
        $result->execute(array($idCategoria));
			return $result->fetch(PDO::FETCH_OBJ);
    }
    public function registrarCategoria($categoria){
        $sql="INSERT INTO categorias values(:idCategoria,:nombreCategoria,:descripcion)";
        $query=$this->cn->prepare($sql);
        if($query->execute((array)$categoria)){
            return true;
        }else{

        }

    }
    public function actualizarCategoria( $categoria){
       //echo json_encode($categoria);
        $sql="UPDATE categorias SET nombrecategoria=:nombreCategoria,descripcion=:descripcion WHERE idcategoria=:idCategoria ";
        $query=$this->cn->prepare($sql);
        if($query->execute((array)$categoria)){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarCategoria($idCategoria){
        $sql="DELETE FROM categorias where idcategoria=:idCategoria";
        $query=$this->cn->prepare($sql);
        if($query->execute(["idCategoria"=>$idCategoria])){
            return true;
        }else{
            return false;
        }
    }
    public function idCategoriaExiste($idCategoria){
        $sql="SELECT count(*)FROM categorias where idcategoria=$idCategoria";
        $result=$this->cn->query($sql);
        foreach($result as $row){
            return $row[0];
        }
    }

}

?>