<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Trains</title>
</head>

<body>

    <div class="container">

        <div class="main-title">
            <h1>Treni in partenza</h1>
        </div>

        <div class="row row-info">
            <div class="col col-info">azienda</div>
            <div class="col col-info">stazione di partenza</div>
            <div class="col col-info">stazione di arrivo</div>
            <div class="col col-info">orario di partenza</div>
            <div class="col col-info">orario di arrivo</div>
            <div class="col col-info">codice treno</div>
            <div class="col col-info">in orario</div>
            <div class="col col-info">cancellato</div>
        </div>

        @foreach ($trains as $el)
            <div class="row">
                <div class="col">{{ $el['azienda'] }}</div>
                <div class="col">{{ $el['stazione_di_partenza'] }}</div>
                <div class="col">{{ $el['stazione_di_arrivo'] }}</div>
                <div class="col">{{ $el['orario_di_partenza'] }}</div>
                <div class="col">{{ $el['orario_di_arrivo'] }}</div>
                <div class="col">{{ $el['codice_treno'] }}</div>
                <div class="col">{{ $el['in_orario'] }}</div>
                <div class="col">{{ $el['cancellato'] }}</div>
            </div>
        @endforeach

    </div>

</body>

</html>
