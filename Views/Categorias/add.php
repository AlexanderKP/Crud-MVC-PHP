<div class="row">
  <div class="col">
    <h1>Agregar categoria</h1>
  </div>
</div>
<div class="row border border-primary">
  <div class="col">
<form action="?c=Categorias&a=guardar" method="post">
  <div class="form-group">
    <label for="idcategoria">Id categoria</label>
    <input type="text" class="form-control" name="idcategoria" id="idcategoria" value="">
  </div>
  <div class="form-group">
    <label for="nombrecategoria">Nombre de categoria</label>
    <input type="text" class="form-control" name="nombrecategoria" id="nombrecategoria" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3" ></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
  </div>
</div>