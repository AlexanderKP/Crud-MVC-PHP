<?php
require_once "Models/ClienteModel.php";
class ClientesController{
    private $db;
    function __construct()
    {
        $this->db= new ClienteModel();
    }
    public function index(){
        $data=$this->db->listarClientes();
       require_once "Views/header.php";
       require_once "Views/nav.php";
       require_once "Views/Clientes/listar.php";
       require_once "Views/footer.php";
    }
    public function crear(){
        require_once "Views/header.php";
       require_once "Views/nav.php";
       require_once "Views/Clientes/add.php";
       require_once "Views/footer.php";
    }
    public function editar(){
        $data = new ClienteModel();
        if(isset($_REQUEST['idCliente'])){
            $idCliente=$_REQUEST['idCliente'];
            $data = $this->db->clienteForId($idCliente);
        }
        require_once "Views/header.php";
        require_once "Views/nav.php";
        require_once "Views/Clientes/editar.php";
        require_once "Views/footer.php";
    }
    public function guardar(){
        $idCliente=$_REQUEST["idCliente"];
        $NombreCompania=$_REQUEST["NombreCompania"];
        $NombreContacto=$_REQUEST["NombreContacto"];
        $CargoContacto=$_REQUEST["CargoContacto"];
        $direccion=$_REQUEST["Direccion"];
        $ciudad=$_REQUEST["Ciudad"];
        $region=$_REQUEST["Region"];
        $codPostal=$_REQUEST["CodPostal"];
        $pais=$_REQUEST["Pais"];
        $telefono=$_REQUEST["Telefono"];
        $fax=$_REQUEST["Fax"];

        $cliente=[
            "idCliente"=>$idCliente,
            "NombreCompania"=>$NombreCompania,
            "NombreContacto"=>$NombreContacto,
            "CargoContacto"=>$CargoContacto,
            "Direccion"=>$direccion,
            "Ciudad"=>$ciudad,
            "Region"=>$region,
            "CodPostal"=>$codPostal,
            "Pais"=>$pais,
            "Telefono"=>$telefono,
            "Fax"=>$fax
        ];
        $idCount=$this->db->idClienteExiste($idCliente);
        if($idCount>0){
            if($this->db->actualizarCliente($cliente)){
                echo "Actualizado con exito";
                header("location:index.php?c=Clientes");
            }
        }else{
            if($this->db->registrarCliente($cliente)){
                echo "registrado con exito";
                header("location:index.php?c=Clientes");
            }
        }

      
    }
    public function eliminar(){
        $idCliente=$_REQUEST["idCliente"];
        if($this->db->idClienteExiste($idCliente)){
            if($this->db->eliminarCliente($idCliente)){
                header("location:index.php?c=Clientes");
            }
        }
    }
    
}
