<?php
require_once "Models/CategoriaModel.php";
class CategoriasController{
    private $db;
    function __construct()
    {
        $this->db= new CategoriaModel();
    }
    public function index(){
        $data=$this->db->allCategorias();
        require_once "Views/header.php";
        require_once "Views/nav.php";
        require_once "Views/Categorias/listar.php";
        require_once "Views/footer.php";
    }
    public function crear(){
        require_once "Views/header.php";
        require_once "Views/nav.php";
        require_once "Views/Categorias/add.php";
        require_once "Views/footer.php";
    }
    public function editar(){
        $data = new CategoriaModel();

        if(isset($_REQUEST['idCategorias'])){
            $idCategoria=$_REQUEST['idCategorias'];
            $data=$this->db->categoriaForId($idCategoria);
        }
        require_once "Views/header.php";
        require_once "Views/nav.php";
        require_once "Views/Categorias/editar.php";
        require_once "Views/footer.php";
    }
    public function guardar(){
        
            $idCategoria=$_REQUEST['idcategoria'];
            $nombreCategoria=$_REQUEST['nombrecategoria'];
            $descripcion=$_REQUEST['descripcion'];

            $categoria=[
                "idCategoria"=>$idCategoria,
                "nombreCategoria"=>$nombreCategoria,
                "descripcion"=>$descripcion
            ];
            $id=$this->db->idCategoriaExiste($idCategoria);

            if($id){
                if($this->db->actualizarCategoria($categoria)){
                    $message= "Actualizado correctamente";
                    header('Location: index.php?c=Categorias');
                }
            }else{
                if($this->db->registrarCategoria($categoria)){
                    echo "registrado correctamente";
                    header('Location: index.php?c=Categorias');
                }
            }

    }
    public function eliminar(){
        $idCategoria=$_REQUEST['idCategoria'];
        if($this->db->eliminarCategoria($idCategoria)){
            echo "Elimindo correctamente";
            header('Location: index.php?c=Categorias');
        }

    }
}
?>