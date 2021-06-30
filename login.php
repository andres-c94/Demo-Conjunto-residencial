<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/styleLogin.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
</head>

<body>

    <div class="todo">
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">

                    <form action="" method="post">


                        <div class="row">
                            <div class="col 6">

                                <label class="form-label" for="torre">Torre:</label>
                                <select class="form-select" name="torre">
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="A3">A3</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="apartamento">Apartamento</label>
                                <input class="form-control" type="number" name="apartamento" placeholder="Ej: 305">
                            </div>
                        </div>

                        <label class="form-label" for="cedula"></label>
                        <input class="form-control" type="number" name="" id="" placeholder="Cedula del propietario">
                        <br>
                        <input class="btn btn-primary" type="submit" value="Ingresar">
                    </form>




                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</body>

</html>