@extends('layouts.app')

@section('title','View Food')

@section('content')
<div class="card">
  <div class="card-header">{{ $food->name }}</div>
  <div class="card-body">
    @if($food->image)
      <img src="{{ asset('storage/'.$food->image) }}" style="max-height:200px;" alt="">
    @endif

    <p class="mt-3"><strong>Price:</strong> ₹ {{ number_format($food->price,2) }}</p>
    <p><strong>Description:</strong></p>
    <p>{{ $food->description }}</p>

    <a href="{{ route('foods.edit', $food) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('foods.index') }}" class="btn btn-secondary">Back</a>
  </div>
</div>
@endsection
