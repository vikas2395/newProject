@extends('layouts.app')

@section('title','Foods')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Foods</h2>
    <a href="{{ route('foods.create') }}" class="btn btn-success">Add Food</a>
</div>

@if($foods->count())
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($foods as $food)
        <tr>
            <td>{{ $loop->iteration + ($foods->currentPage()-1) * $foods->perPage() }}</td>
            <td>
                @if($food->image)
                    <img src="{{ asset('storage/'.$food->image) }}" alt="" style="height:60px;">
                @else
                    -
                @endif
            </td>
            <td>{{ $food->name }}</td>
            <td>₹ {{ number_format($food->price, 2) }}</td>
            <td>{{ $food->created_at->format('d M Y') }}</td>
            <td>
                <a href="{{ route('foods.edit', $food) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('foods.destroy', $food) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this item?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form>
                <a href="{{ route('foods.show', $food) }}" class="btn btn-sm btn-secondary">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $foods->links() }}

@else
<div class="alert alert-info">No food items yet. <a href="{{ route('foods.create') }}">Create one</a>.</div>
@endif
@endsection
