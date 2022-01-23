<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP  CON  API FETCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">codigo</label>
                                <input type="text" name="codigo" id="codigo" placeholder="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">producto</label>
                                <input type="text" name="producto" id="producto" placeholder="producto" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">precio</label>
                                <input type="text" name="precio" id="precio" placeholder="precio" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">cantidad</label>
                                <input type="text" name="cantidad" id="cantidad" placeholder="cantidad" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="button" value="registrar" id="registrar" class="btn btn-primary btn-block">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <table class="table table-hover table-responsive">
                    <thead class=" text-white bg-dark">
                        <tr>
                            <th>Id</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Accciones</th>
                        </tr>
                    </thead>
                    <tbody id="resultado">

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>