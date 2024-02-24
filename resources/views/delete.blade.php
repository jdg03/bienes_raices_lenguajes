<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar propiedad</title>
</head>
<body>
    <h1>esta seguro que desea eliminar</h1>
    <br>
    <br>

  
    
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
           
            <tr>
                <td>{{ $propiedad->codigoPropiedad}}</td>
                <td>{{ $propiedad->color}}</td>
                <td>{{ $propiedad->metros}}</td>
                <td>{{ $propiedad->tipoPropiedad}}</td>
                <td>{{ $propiedad->costoxmetro}}</td>
                <td>{{ $propiedad->codigoDuenio}}</td>
                <td>{{ $propiedad->domicilio}}</td>
             

                
            </tr>
                
          
           
        
            
        </body>
    </table>

    <div>
        <a href="{{route('propiedad.home')}}" class="btn btn-warning">Regresar</a>
        <a href="{{route('propiedad.destroy', $propiedad->codigoPropiedad)}}" class="btn btn-danger">Eliminar</a>
    </div>

    <style>
        table {
            border-collapse: separate;
            border-spacing: 10px;
            
        }

        th {
        border-bottom: 1px solid black; /* Establecer borde inferior */
        padding: 8px; /* Agregar relleno para que el texto no esté pegado al borde */
        }

      
    </style>
</body>
</html>