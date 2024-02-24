<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar propiedad</title>
</head>
<body>
    <div class="container">
        <h2>Editar propiedad</h2>
        <br>
        <div class="form-group">
            <label for="color">Código de propiedad</label>
            <input type="text" class="form-control" value="{{$nvaPropiedad->codigoPropiedad}}" readonly>
        </div>

        <form action="{{route('propiedad.update', $nvaPropiedad->codigoPropiedad)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" name="color" value="{{$nvaPropiedad->color}}">
            </div>

            <div class="mb-3">
                <label for="metros" class="form-label">Metros</label>
                <input type="text" class="form-control" name="metros" value="{{$nvaPropiedad->metros}}">
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" value="{{$nvaPropiedad->tipoPropiedad}}">
            </div>

            <div class="mb-3">
                <label for="costoxmetro" class="form-label">Costo x Metro</label>
                <input type="text" class="form-control" name="costoxmetro" value="{{$nvaPropiedad->costoxmetro}}">
            </div>

            <div class="mb-3">
                <label for="codigoDuenio" class="form-label">Código Dueño</label>
                <input type="text" class="form-control" name="codigoDuenio" value="{{$nvaPropiedad->codigoDuenio}}">
            </div>

            <div class="mb-3">
                <label for="domicilio" class="form-label">Domicilio</label>
                <input type="text" class="form-control" name="domicilio" value="{{$nvaPropiedad->domicilio}}">
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</body>


</html>