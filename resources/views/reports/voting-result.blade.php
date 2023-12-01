<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista_Practicantes.PDF</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    thead {
        background-color:blue;
        color: white;
    }
    th, td {
        padding: 15px;
    }
    h3{
        text-align: center;
    }
    tr:nth-child(even) {
    background-color: rgba(150, 212, 212, 0.4);
    }
    table{
        font-size: 0.9em;
    }


</style>
<body>
    <div>
        <div>
            {{-- <img src="{{public_path().'/assets/img/logo.png'}}"> --}}
        </div>
        <div><h3>REPORTE LISTA DE PRACTICANTES</h3></div>
    </div>


        <table border="1" cellspacing="0" cellpadding="4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>practicante</th>
                    <th>supervisor</th>
                    <th>etapa</th>
                    <th>empresa</th>
                    <th>Comunicarse</th>
                    <th>creacion</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($practicantes and $supervisors as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->practicante}}</td>
                    <td>{{$item->supervisor}}</td>
                    <td>{{$item->etapa}}</td>
                    <td>{{$item->empresa}}</td>
                    <td>{{$item->cellphone}}</td>
                    <td>{{$item->created_at}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

</body>
</html>
