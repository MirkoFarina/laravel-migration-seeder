@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>
            Treni Disponibili
        </h1>
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4 my-2">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <span>
                                Codice Treno: {{ $train->trains_code }}
                            </span>
                            <span>
                                Orario di Partenza: {{$train->departure_time}}
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> Da: {{$train->departure_station}} </h5>
                            <h5 class="card-title"> A: {{$train->arrival_station}} </h5>
                            <p class="card-text">Arrivo previsto: {{ $train->arrival_time }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
