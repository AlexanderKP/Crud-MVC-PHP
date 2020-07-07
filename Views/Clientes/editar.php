<div class="row">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1>Editar cliente</h1>
            </div>
        </div>
        <div class="row border border-warning">
            <div class="col">
                <form action="?c=Clientes&a=guardar" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="idCliente">Codigo Cliente</label>
                                <input id="idCliente" class="form-control" type="text" name="idCliente" value="<?php echo $data->idCliente; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="NombreCompania">Nombre compañia</label>
                                <input id="NombreCompania" class="form-control" type="text" name="NombreCompania" value="<?php echo $data->NombreCompania; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="NombreContacto">Nombre contacto</label>
                                <input id="NombreContacto" class="form-control" type="text" name="NombreContacto" value="<?php echo $data->NombreContacto; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="CargoContacto">Cargo contacto</label>
                                <input id="CargoContacto" class="form-control" type="text" name="CargoContacto" value="<?php echo $data->CargoContacto; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Direccion">Direccion</label>
                                <input id="Direccion" class="form-control" type="text" name="Direccion" value="<?php echo $data->Direccion; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Ciudad">Ciudad</label>
                                <input id="Ciudad" class="form-control" type="text" name="Ciudad" value="<?php echo $data->Ciudad; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Region">Region</label>
                                <input id="Region" class="form-control" type="text" name="Region" value="<?php echo $data->Region; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="CodigoPostal">Codigo postal</label>
                                <input id="CodigoPostal" class="form-control" type="text" name="Region" value="<?php echo $data->CodPostal; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Pais">Pais</label>
                                <input id="Pais" class="form-control" type="text" name="Pais" value="<?php echo $data->Pais; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Telefono">Telefono</label>
                                <input id="Telefono" class="form-control" type="text" name="Telefono" value="<?php echo $data->Telefono; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Fax">Fax</label>
                                <input id="Fax" class="form-control" type="text" name="Fax" value="<?php echo $data->Fax; ?>">
                            </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>