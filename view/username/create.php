<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label  class="form-label">Nombre del usuario</label>
        <input type="text" name="nombre" required class="form-control" >
    </div>

    <div class="mb-3">
        <label  class="form-label">apellido del usuario</label>
        <input type="text" name="apellido" required class="form-control" >
    </div>

    <div class="mb-3">
        <label  class="form-label">contacto</label>
        <input type="text" name="contacto" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">edad</label>
        <input type="text" name="edad" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">genero</label>
        <input type="text" name="genero" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">domicilio</label>
        <input type="text" name="domicilio" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">estado</label>
        <input type="text" name="estado" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">email</label>
        <input type="text" name="email" required class="form-control" >
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>