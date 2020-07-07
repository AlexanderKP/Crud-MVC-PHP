<?php
require_once "Config/Conexion.php";
class ClienteModel{

    private $db;
    function __construct()
    {
        $cn=new Conexion();
        $this->db=$cn->conectar();
    }
    public function listarClientes(){
        $sql= "select * from clientes";
        $result=$this->db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
    public function registrarCliente($cliente){
        $sql="INSERT INTO clientes Values (:idCliente,:NombreCompania,:NombreContacto,:CargoContacto,:Direccion,:Ciudad,:Region,:CodPostal,:Pais,:Telefono,:Fax)";
        $query = $this->db->prepare($sql);
        if($query->execute((array)$cliente)){
            return true;
        }else{
            false;
        }
    }
    
    public function actualizarCliente($cliente){
        $sql = "UPDATE  clientes 
        SET idCliente=:idCliente,NombreCompania=:NombreCompania,
        NombreContacto=:NombreContacto,CargoContacto=:CargoContacto,Direccion=:Direccion,
        Ciudad=:Ciudad,Region=:Region,CodPostal=:CodPostal,Pais=:Pais,Telefono=:Telefono,Fax=:Fax
        WHERE idCliente=:idCliente";
        $query = $this->db->prepare($sql);
        if($query->execute((array)$cliente)){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarCliente($idCliente){
        $sql = "DELETE FROM clientes WHERE idCliente=:idCliente";
        $query = $this->db->prepare($sql);
        if($query->execute(["idCliente"=>$idCliente])){
            return true;
        }else{
            return false;
        }
    }
    public function  clienteForId($idCliente){
        $sql = "SELECT * FROM clientes WHERE idCliente=:idCliente";
        $query = $this->db->prepare($sql);
        $query->execute(["idCliente"=>$idCliente]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function  idClienteExiste($idCliente){
        $sql = "SELECT count(*) FROM clientes WHERE idCliente='$idCliente'";
        $result=$this->db->query($sql);
        foreach($result as $row){
            return $row[0];
        }
    }
}
?>