@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
        <div class="card-body text-center">
            <h3 class="card-title mb-3">Welcome, {{ auth()->user()->name }}!</h3>
            <p class="card-text mb-4">You are logged in.</p>
            <a href="{{ route('products.index') }}" class="btn btn-outline-primary mb-3 w-100">Go to Products</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger w-100">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection 