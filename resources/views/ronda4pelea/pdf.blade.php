<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Ronda 4</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Ronda 4</h2>
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
            @foreach ($ronda4peleas as $ronda4pelea)
                <tr>
                    
                <td>{{ $ronda4pelea->participante->equipo }}</td>
                <td>{{ $ronda4pelea->participante->gallo4_anillo }}</td>
                <td>{{ $ronda4pelea->participante->peso4 }}</td>
                <td>{{ $ronda4pelea->clonparticipante->equipo }}</td>
                <td>{{ $ronda4pelea->clonparticipante->gallo4_anillo }}</td>
                <td>{{ $ronda4pelea->clonparticipante->peso4 }}</td>

                <td>{{ $ronda4pelea->participante->peso4 - $ronda4pelea->clonparticipante->peso4  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>