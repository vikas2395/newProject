@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title">Admin Dashboard</h1>
                <p class="card-text">Welcome to <strong>{{ config('app.name','foodapp') }}</strong>. Manage food items from the Foods menu.</p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0">
                          <div class="card-body">
                            <h5>Foods</h5>
                            <p>View, add, edit and delete food items with images.</p>
                            @auth
                              <a href="{{ route('foods.index') }}" class="btn btn-primary">Manage Foods</a>
                            @else
                              <a href="{{ route('login') }}" class="btn btn-primary">Login to manage</a>
                            @endauth
                          </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <!-- simple stats: count of foods -->
                        @php
                          $foodCount = \App\Models\Food::count();
                        @endphp
                        <div class="card">
                          <div class="card-body">
                            <h5>Total foods</h5>
                            <h2>{{ $foodCount }}</h2>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
