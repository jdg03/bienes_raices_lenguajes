<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear nueva propiedad</title>
</head>
<body>
    <h2>Crear nueva propiedad</h2>
    <br>

    <form action='{{route('propiedad.store')}}' method="POST">
        
        @csrf

        <div>
            <label>Color</label>
            <input type="text" name="color">
        </div>

        <div>
            <label>Metros</label>
            <input type="text" name="metros">
        </div>

        <div>
            <label>Tipo</label>
            <input type="text" name="tipo">
        </div>        

        <div>
            <label>Costo x Metro</label>
            <input type="text" name="costoxmetro">
        </div>

        <div>
            <label>Codigo Duenio</label>
            <input type="text" name="codigoDuenio">
        </div>

        <div>
            <label>Domicilio</label>
            <input type="text" name="domicilio">
        </div>
       
        <div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
        
    </form>
</body>
</html>