@extends('layouts.app')

@section('title','Add Food')

@section('content')
<div class="card">
  <div class="card-header">Add Food</div>
  <div class="card-body">
    <form action="{{ route('foods.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input name="name" value="{{ old('name') }}" class="form-control" required>
        @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        @error('description')<div class="text-danger small">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Price</label>
        <input name="price" value="{{ old('price') }}" class="form-control" required>
        @error('price')<div class="text-danger small">{{ $message }}</div>@enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Image (optional)</label>
        <input type="file" name="image" accept="image/*" class="form-control">
        @error('image')<div class="text-danger small">{{ $message }}</div>@enderror
      </div>

      <button class="btn btn-primary" type="submit">Save</button>
      <a href="{{ route('foods.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</div>
@endsection
