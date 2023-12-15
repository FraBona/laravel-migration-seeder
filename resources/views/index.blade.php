<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        </head>

        <body>
          @foreach ($trains as $train)
              <h1>{{$train->agency}}</h1>
              <p>Stazione di Partenza: {{$train->departure_station}}</p>
              <p>Stazione di arrivo: {{$train->arrival_station}}</p>
              <p>Orario di partenza: {{$train->departure_time}}</p>
              <p>Orario di arrivo: {{$train->arrival_time}}</p>
              <p>Codice treno:{{$train->code_train}}</p>
              <p>Numero Carrozze: {{$train->number_carriages}}</p>
              <p>
                @if($train->in_time == 0)
                  In Orario: no
                @else
                  In Orario: si
                @endif
              </p>
              <p>
                @if($train->in_time == 0)
                  Cancellato: si
                @else
                  Cancellato: no
                @endif
              </p>
          @endforeach
        </body>
        
        </html>