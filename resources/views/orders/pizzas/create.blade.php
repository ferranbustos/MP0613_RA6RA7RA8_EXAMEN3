@extends('layouts.app')

@section('title', 'Create Order')

@section('content')
    <div class="pizza-form-background">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h2 class="h5 mb-0">Create a New Pizza Order</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="pizza_id">Choose a Pizza</label>
                                <select class="form-select" name="pizza_id" id="pizza_id" {{ $selectedPizza ? 'disabled' : '' }}>
                                    <option value="0" disabled {{ old('pizza_id', $selectedPizza?->id) ? '' : 'selected' }}>--- select a pizza ---</option>
                                    @foreach($pizzas as $pizza)
                                        <option value="{{ $pizza->id }}" {{ old('pizza_id', $selectedPizza?->id) == $pizza->id ? 'selected' : '' }}>
                                            {{ $pizza->name }} ({{ $pizza->type }}) - ${{ $pizza->price }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($selectedPizza)
                                    <input type="hidden" name="pizza_id" value="{{ $selectedPizza->id }}">
                                    <small class="text-muted d-block mt-2">Pizza pre-selected from catalog</small>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label d-block">Extra toppings</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="toppings[]" value="mushrooms" id="mushrooms" {{ in_array('mushrooms', old('toppings', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="mushrooms">Mushrooms</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="toppings[]" value="peppers" id="peppers" {{ in_array('peppers', old('toppings', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="peppers">Peppers</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="toppings[]" value="garlic" id="garlic" {{ in_array('garlic', old('toppings', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="garlic">Garlic</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="toppings[]" value="olives" id="olives" {{ in_array('olives', old('toppings', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="olives">Olives</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-paper-plane"></i> Order Pizza</button>
                                <a class="btn btn-light" href="{{ route('order.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3">
                    <a class="btn btn-link" href="{{ route('order.index') }}"><i class="fa-solid fa-arrow-left"></i> Back to orders</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
