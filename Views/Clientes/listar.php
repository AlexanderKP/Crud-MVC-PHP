<div class="row">
    <div class="col">
        <h1>Lista de Clientes</h1>
    </div>
    <div class="col">
        <a href="?c=Clientes&a=crear" class="btn btn-success float-right">Agregar nuevo cliente </a>
    </div>
</div>
<table class="table table-striped table-responsive">
    <thead class="thead-light">
        <tr>
            <th>idCliente</th>
            <th>NombreCompania</th>
            <th>NombreContacto</th>
            <th>CargoContacto</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Region</th>
            <th>CodPostal</th>
            <th>Pais</th>
            <th>Telefono</th>
            <th>Fax</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $row) { ?>
            <tr>
                <td><?php echo $row->idCliente; ?></td>
                <td><?php echo $row->NombreCompania; ?></td>
                <td><?php echo $row->NombreContacto; ?></td>
                <td><?php echo $row->CargoContacto; ?></td>
                <td><?php echo $row->Direccion; ?></td>
                <td><?php echo $row->Ciudad; ?></td>
                <td><?php echo $row->Region; ?></td>
                <td><?php echo $row->CodPostal; ?></td>
                <td><?php echo $row->Pais; ?></td>
                <td><?php echo $row->Telefono; ?></td>
                <td><?php echo $row->Fax; ?></td>
                <td>
                    <i class="glyphicon glyphicon-edit">
                        <a href="?c=Clientes&a=editar&idCliente=<?php echo $row->idCliente; ?>"> Editar</a>
                    </i>
                    <i class="glyphicon glyphicon-remove">
                        <a href="?c=Clientes&a=eliminar&idCliente=<?php echo $row->idCliente; ?>"> Eliminar</a>
                    </i></td>

            </tr>
        <?php }
        ?>

    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
        </tr>
    </tfoot>
</table>