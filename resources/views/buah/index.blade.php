@extends('admin.parent')

@section('content')

<h1>buah</h1>

<div class="container d-flex justify-content-end">
    <a href="{{ route('buah.create') }}" class="btn btn-success">Buat buah</a>
</div>

@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

@endsection