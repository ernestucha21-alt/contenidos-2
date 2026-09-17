<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php $title = "UTN 2021" ?>
    
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <hr>
    <div class="form w-75">
        <form action="enviardatos.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" name="contrasena" required>
            </div>

            <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="invalidCheck" name="newsletter" value="true" checked>
                <label class="form-check-label" for="invalidCheck">
                   Deseo recibir novedades de Icentity.
                </label>
                </div>
            </div>


            <input class="btn btn-outline-primary" type="submit" value="Log In">
        </form>
    </div>
</div>

</body>
</html>


