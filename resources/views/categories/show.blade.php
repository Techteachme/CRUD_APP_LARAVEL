@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Details</h1>

    <div class="card">
        <div class="card-body">
            <h5><strong>ID:</strong> {{ $category->id }}</h5>
            <h5><strong>Description:</strong> {{ $category->description }}</h5>
            <h5><strong>Status:</strong> {{ $category->status ? 'Active' : 'Inactive' }}</h5>
        </div>
    </div>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
