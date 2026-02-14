@extends('layouts.app')

@section('title', 'Pizza Detail')

@section('content')
    <div class="pizza-detail-background">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex align-items-center justify-content-between">
                        <h2 class="h5 mb-0">Pizza <span class="text-danger">{{ $pizza->name }}</span></h2>
                        <span class="badge bg-light text-dark">#{{ $pizza->id }}</span>
                    </div>
                    <div class="card-body">
                        @if(!empty($pizza->image_url))
                            <div class="text-center mb-4">
                                <img class="img-fluid rounded" src="{{ $pizza->image_url }}" alt="Pizza image" style="width: 400px; height: 300px;">
                            </div>
                        @endif

                        <p class="text-muted">
                            {{ $pizza->description }}
                        </p>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded">
                                    <p class="mb-1"><strong>Type:</strong> {{ $pizza->type }}</p>
                                    <p class="mb-0"><strong>Base:</strong> {{ $pizza->base }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded">
                                    <p class="mb-1"><strong>Extra toppings:</strong></p>
                                    <ul class="mb-0">
                                        @foreach($pizza->toppings ?? [] as $topping)
                                            <li>{{ $topping }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 d-flex gap-2">
                            <a class="btn btn-success" href="{{ route('order.create') }}?pizza_id={{ $pizza->id }}"><i class="fa-solid fa-check"></i> Order</a>
                            <a class="btn btn-outline-secondary" href="{{ route('pizzas.index') }}">Back to all pizzas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
