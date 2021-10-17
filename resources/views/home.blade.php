@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    @if(count($medicines) > 0)
        <div class="d-flex justify-content-around flex-wrap">
            @foreach ($medicines as $medicine)
                <div class="card border-info mb-2" style="width: 18rem;">
                    <div class="card-header"> {{ $medicine->name }}</div>

                    <div class="card-body text-info" style="padding-left: 5vw;">
                        <p class="card-text"> {{ $medicine->description }}</p>
                        <p class="card-text"> {{ $medicine->date }}</p>
                        <p class="card-text deadline">{{ $medicine->time }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="d-flex align-items justify-content-center">
            <h1>No medicines scheduled...</h1>
        </div>
    @endif
</div>
@endsection
