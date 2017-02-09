@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Restaurant
                </div>

                <div class="container">

                    @foreach ($users as $user)

                        <h2>{{ $user->name  }}</h2> <br>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
