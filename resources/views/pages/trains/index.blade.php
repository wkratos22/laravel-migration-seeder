@extends('layouts.layout')

@section('content')

    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
    @foreach ($trains as $key => $train)              
        <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
    @endforeach
@endsection
