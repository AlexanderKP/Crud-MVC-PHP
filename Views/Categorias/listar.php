<div class="row">

</div>
<div class="row">
    <div class="col">
        <h1>Lista de Categorias</h1>
    </div>
    <div class="col border ">
        <a href="?c=Categorias&a=crear" class="btn btn-success float-right">Agregar Nueva categoria</a>
    </div>
</div>
<div class="row border border-warning">
    <div class="col">
        <table class="table table-light table-responsive">
            <thead class="thead-light">
                <tr>
                    <th>Id categoria</th>
                    <th>Nombre de categoria</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) : ?>
                    <tr>

                        <td><?php echo $row->idcategoria; ?></td>
                        <td><?php echo $row->nombrecategoria; ?></td>
                        <td><?php echo $row->descripcion; ?></td>
                        <td>
                            <i class="glyphicon glyphicon-edit">
                                <a href="?c=Categorias&a=editar&idCategorias=<?php echo $row->idcategoria; ?>"> Editar</a>
                            </i>
                            <i class="glyphicon glyphicon-remove">
                                <a href="?c=Categorias&a=eliminar&idCategoria=<?php echo $row->idcategoria; ?>"> Eliminar</a>
                            </i>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>