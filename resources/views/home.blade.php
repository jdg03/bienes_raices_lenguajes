<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal de propiedades</title>
</head>
<body>
    <h1>Mantenimiento de propiedades</h1>
    <br>
    <br>
    <a href="{{route('propiedad.create')}}" class="btn btn-primary"> crear nueva propiedad</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Color</th>
                <th>metros</th>
                <th>tipoPropiedad</th>
                <th>costoxmetro</th>
                <th>CodigoDuenio</th>
                <th>Domicilio</th>
                
            </tr>
        </thead>

        <body>
            @foreach ($propiedades as $propiedad)
            <tr>
                <td>{{ $propiedad->codigoPropiedad}}</td>
                <td>{{ $propiedad->color}}</td>
                <td>{{ $propiedad->metros}}</td>
                <td>{{ $propiedad->tipoPropiedad}}</td>
                <td>{{ $propiedad->costoxmetro}}</td>
                <td>{{ $propiedad->codigoDuenio}}</td>
                <td>{{ $propiedad->domicilio}}</td>
                
            </tr>
                
            @endforeach
           
        
            
        </body>
    </table>
</body>
</html>