<?php include_once '../templates/header.php'; ?>
    <br><br><br>
    <h1 class="text-center">Formulario de ingreso de personas</h1>
    <div class="row justify-content-center">
        <form action="" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
            <div class="row">
                <div class="col">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="procedencia">Procedencia:</label>
                    <input type="text" name="procedencia" id="procedencia" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="f_ingreso">Fecha de ingreso:</label>
                    <input type="datetime-local" name="f_ingreso" id="f_ingreso" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="f_salida">Fecha de salida:</label>
                    <input type="datetime-local" name="f_salida" id="f_salida" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="ingreso">Razón de Ingreso:</label>
                    <input type="text" name="ingreso" id="ingreso" class="form-control" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary w-100">Guardar</button>
                </div>
            </div>
        </form>
    </div>

<?php include_once '../templates/footer.php'; ?>
