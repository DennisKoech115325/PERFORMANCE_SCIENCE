@extends('layouts.app')
@section('content')
<div class="container p-3">
    <div class="row justify-content-center">
        @if (count($statistics)>0)
            @foreach ($statistics as $item)
            <br>
                <div class="card" style="width: 100%">
                    <div class="card-header">
                        <a href="/statistics/{{$item->id}}" class="btn btn-primary">
                            This is a Statistic
                        </a>
                    </div>
                    <div class="card-body">
                        Grade 1:{{$item->G1}}
                        <br>
                        Grade 2:{{$item->G2}}
                        <br>
                        Reason:{{$item->reason}}
                        <br>
                        Internet:{{$item->internet}}
                        <br>
                    </div>
                    <div class="card-footer text-muted">
                        {{$item->created_at->diffForHumans()}}
                    </div>
                </div>
                <br>
            @endforeach
        @else
            <h2>There are no statistics</h2>
        @endif
    </div>
</div>
@endsection