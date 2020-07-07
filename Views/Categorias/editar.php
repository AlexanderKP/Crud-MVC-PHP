<div class="row">
  <div class="col">
    <h1>Editar categoria</h1>
  </div>
</div>
<div class="row border border-primary">
  <div class="col">
    <form action="?c=Categorias&a=guardar" method="post">
      <div class="form-group">
        <label for="idcategoria">Id categoria</label>
        <input type="text" class="form-control" name="idcategoria" id="idcategoria" value="<?php echo $data->idcategoria; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="nombrecategoria">Nombre de categoria</label>
        <input type="text" class="form-control" name="nombrecategoria" id="nombrecategoria" value="<?php echo $data->nombrecategoria; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Descripcion</label>
        <textarea class="form-control" name="descripcion" id="descripcion" rows="3"><?php echo $data->descripcion; ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>
</div>