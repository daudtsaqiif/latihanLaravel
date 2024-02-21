@extends('admin.parent')

@section('content')

<div class="card p-4">
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<h1>buah</h1>

<div class="container d-flex justify-content-end">
    <a href="{{ route('buah.create') }}" class="btn btn-success">Buat buah</a>
</div>

</div>

@endsection