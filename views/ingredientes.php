<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <div class="continer">
        <div class="row">
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                    Nuevo Ingrediente
                </button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-responsive table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad de medida</th>
                <th>Calorias</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="cuerpoingredientes"></tbody>
    </table>

    <!--Modal-->


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="frm_ingredientes">
                    <div class="modal-body">
                    <input type="hidden" name="ingrediente_id" id="ingrediente_id">
                    <div class="form-group">
                            <label for="nombre">Nombre </label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad </label>
                            <input type="number" min="1" max="1000" class="form-control" name="cantidad" id="cantidad"></input>

                        </div>

                        <div class="form-group">
                            <label for="unidad">Unidad de medida</label>
                            <select id="unidad" name="unidad">
                                <option value="u">Unidades</option>
                                <option value="g">Gramos</option>
                                <option value="kg">Kilogramos</option>
                                <option value="oz">Onzas</option>
                                <option value="lb">Libras </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="calorias">Calorias</label>
                            <input type="number" min="0" max="1000" class="form-control" name="calorias" id="calorias">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="./ingredientes.js"></script>

</html>