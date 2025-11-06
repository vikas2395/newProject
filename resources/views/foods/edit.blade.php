@extends('layouts.app')

@section('title','Edit Food')

@section('content')
<div class="card">
  <div class="card-header">Edit Food</div>
  <div class="card-body">
    <form action="{{ route('foods.update', $food) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label class="form-label">Name</label>
        <input name="name" value="{{ old('name', $food->name) }}" class="form-control" required>
        @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ old('description', $food->description) }}</textarea>
        @error('description')<div class="text-danger small">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Price</label>
        <input name="price" value="{{ old('price', $food->price) }}" class="form-control" required>
        @error('price')<div class="text-danger small">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Current Image</label>
        <div class="mb-2">
          @if($food->image)
            <img src="{{ asset('storage/'.$food->image) }}" style="height:90px;" alt="">
          @else
            -
          @endif
        </div>
        <label class="form-label">Replace Image (optional)</label>
        <input type="file" name="image" accept="image/*" class="form-control">
        @error('image')<div class="text-danger small">{{ $message }}</div>@enderror
      </div>

      <button class="btn btn-primary" type="submit">Update</button>
      <a href="{{ route('foods.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</div>
@endsection
