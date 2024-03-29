<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Ronda 1</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Ronda 1</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>       
                <th>Equipo</th>
                <th>Peleador 1</th>
                <th>Peso</th>
                <th>Equipo</th>
                <th>Peleador 2</th>
                <th>Peso</th>

                <th>DIF Peso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ronda1peleas as $ronda1pelea)
                <tr>
                    
                    <td>{{ $ronda1pelea->participante->equipo }}</td>
                    <td>{{ $ronda1pelea->participante->gallo1_anillo }}</td>
                    <td>{{ $ronda1pelea->participante->peso1 }}</td>
                    <td>{{ $ronda1pelea->clonparticipante->equipo }}</td>
                    <td>{{ $ronda1pelea->clonparticipante->gallo1_anillo }}</td>
                    <td>{{ $ronda1pelea->clonparticipante->peso1 }}</td>

                    <td>{{ $ronda1pelea->participante->peso1 - $ronda1pelea->clonparticipante->peso1  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>