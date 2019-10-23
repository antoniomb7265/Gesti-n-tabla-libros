<form method="POST" action="nuevo.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Título</label>
        <input type="text" name="formtitulo" class="form-control" id="inputtitulo">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Autor</label>
        <input type="text" name="formautor" class="form-control" id="inputautor">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoría</label>
        <input type="text" name="formcategoria" class="form-control" id="inputcategoria">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Editorial</label>
        <input type="text" name="formeditorial" class="form-control" id="inputeditorial">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="formprecio" class="form-control" id="inputprecio">
    </div>
    <div>
    <button href="index.php" class="btn btn-secondary">Cancelar</button>
    <button type="reset" class="btn btn-secondary">Resetear</button>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>