@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (count($users)>0)
            @foreach ($users as $item)
            <br>
                <div class="card" style="width: 100%">
                    <div class="card-header">
                        <a href="/users/{{$item->id}}" class="btn btn-primary">
                            <h5 class="card-title">{{$item->name}}</h5>
                        </a>
                    </div>
                    <div class="card-body">
                        <?php echo $item->email?>
                       
                    </div>
                    <div class="card-footer text-muted">
                        {{$item->created_at->diffForHumans()}}
                    </div>
                </div>
                <br>
            @endforeach
        @else
            <h2>There are no posts</h2>
        @endif
    </div>
   
</div>
@endsection