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
                    Nueva Receta
                </button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-responsive table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre de receta</th>
                <th>Descripción</th>
                <th>Tiempo de preparación</th>
                <th>Dificultad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="cuerporecetas"></tbody>
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
                <form id="frm_recetas">
                    <div class="modal-body">
                    <input type="hidden" name="receta_id" id="receta_id">
                    <div class="form-group">
                            <label for="nombre">Nombre </label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción </label>
                            <textarea id="descripcion" name="descripcion" rows="4" cols="50" class="form-control" placeholder="Ingresa una descripción..."></textarea>

                        </div>

                        <div class="form-group">
                            <label for="tiempo_preparacion">Tiempo de preparación (minutos)</label>
                            <input type="number" min="1" max="180" class="form-control" name="tiempo_preparacion" id="tiempo_preparacion">
                        </div>

                        <div class="form-group">
                            <label for="dificultad">Selecciona la dificultad:</label>
                            <select id="dificultad" name="dificultad">
                                <option value="facil">Fácil</option>
                                <option value="medio">Medio</option>
                                <option value="dificil">Difícil</option>
                            </select>
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

<script src="./recetas.js"></script>

</html>