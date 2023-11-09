<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control"  value="<?= $user[1]?>">
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo apellido</label>
        <div class="col-sm-10">
            <input type="text" name="apellido" class="form-control"  value="<?= $user[2]?>">
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo contacto</label>
        <div class="col-sm-10">
            <input type="text" name="contacto" class="form-control"  value="<?= $user[3]?>">
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo edad</label>
        <div class="col-sm-10">
            <input type="text" name="edad" class="form-control"  value="<?= $user[4]?>">
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo genero </label>
        <div class="col-sm-10">
            <input type="text" name="genero" class="form-control"  value="<?= $user[5]?>">
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo domicilio</label>
        <div class="col-sm-10">
            <input type="text" name="domicilio" class="form-control"  value="<?= $user[6]?>">
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo estado</label>
        <div class="col-sm-10">
            <input type="text" name="estado" class="form-control"  value="<?= $user[7]?>">
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo email</label>
        <div class="col-sm-10">
            <input type="text" name="email" class="form-control"  value="<?= $user[8]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>