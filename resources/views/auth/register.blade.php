@extends('layouts.app')

@section('title','Register')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">Register</div>
      <div class="card-body">
        <form method="POST" action="{{ route('register.post') }}">
          @csrf

          <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" value="{{ old('name') }}" class="form-control" required>
            @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email" value="{{ old('email') }}" class="form-control" type="email" required>
            @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" class="form-control" type="password" required>
            @error('password')<div class="text-danger small">{{ $message }}</div>@enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input name="password_confirmation" class="form-control" type="password" required>
          </div>

          <button class="btn btn-primary" type="submit">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
