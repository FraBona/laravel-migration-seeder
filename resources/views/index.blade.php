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
              <p>{{$train->departure_station}}</p>
              <p>{{$train->arrival_station}}</p>
              <p>{{$train->departure_time}}</p>
              <p>{{$train->arrival_time}}</p>
              <p>{{$train->code_train}}</p>
              <p>{{$train->number_carriages}}</p>
              <p>{{$train->in_time}}</p>
              <p>{{$train->deleted}}</p>
          @endforeach
        </body>
        
        </html>