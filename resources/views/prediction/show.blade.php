@extends('layouts.app')
@section('content')
    @include('inc.messages')
    {{-- <h3>Your G3 prediction is {{$response['prediction'][0]}}</h3> --}}
    <div class="container">
        <div class="row justify-content-center" style="padding: 0.25cm">
            <div class="col-3">
                <div class="col font-weight-bold">Initiated by:</div><div class="col">{{$initiator->name}}</div>
                <div class="col font-weight-bold">Performed on:</div><div class="col"> {{$receiver->name}}</div>
            </div>
            <div class="col">
                <div class="row justify-content-start">
                        {!!Form::open(['action'=>'PredictionController@prediction','method'=>'GET','enctype'=>'multipart/formdata','class'=>'form-row align-items-center'])!!}
                        {{Form::hidden('initiator',$initiator->id)}}
                        {{Form::hidden('receiver',$receiver->id)}}
                        {{-- {{Form::hidden('statistic',$statistic->id)}} --}}
                        <div class="form-check">
                            {{Form::radio('grade','default',true)}} {{Form::label('default','Use default grades.',['class'=>'form-check-label'])}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('grade','userdef')}} {{Form::label('userdef','Use set grades.',['class'=>'form-check-label'])}}
                        </div>
                        {{Form::submit('Initiate Prediction',['class'=>'font-weight-bold btn btn-outline-success','style'=>'margin: 0.2cm'])}}
                    {!!Form::close()!!}
                </div>
                <div class="row justify-content-center">
                    <canvas id="myChart">

                    </canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
    </script>
@endsection