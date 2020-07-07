<div class="row">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1>Agregar nuevo cliente</h1>
            </div>
        </div>
        <div class="row border border border-warning">
            <div class="col">
                <form action="?c=Clientes&a=guardar" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="idCliente">Codigo Cliente</label>
                                <input id="idCliente" class="form-control" type="text" name="idCliente">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="NombreCompania">Nombre compañia</label>
                                <input id="NombreCompania" class="form-control" type="text" name="NombreCompania">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="NombreContacto">Nombre contacto</label>
                                <input id="NombreContacto" class="form-control" type="text" name="NombreContacto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="CargoContacto">Cargo contacto</label>
                                <input id="my-input" class="form-control" type="text" name="CargoContacto">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Direccion">Direccion</label>
                                <input id="Direccion" class="form-control" type="text" name="Direccion">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Ciudad">Ciudad</label>
                                <input id="Ciudad" class="form-control" type="text" name="Ciudad">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Region">Region</label>
                                <input id="Region" class="form-control" type="text" name="Region">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="CodPostal">Codigo postal</label>
                                <input id="CodPostal" class="form-control" type="text" name="CodPostal">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Pais">pais</label>
                                <input id="Pais" class="form-control" type="text" name="Pais">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Telefono">Telefono</label>
                                <input id="Telefono" class="form-control" type="text" name="Telefono">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Fax">Fax</label>
                                <input id="Fax" class="form-control" type="text" name="Fax">
                            </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>