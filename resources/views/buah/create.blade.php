@extends('admin.parent')

@section('content')
    <div class="card p-4">
        {{-- error alert --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>beli buah</h1>
        <form action="{{ route('buah.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-floating mb-3">
                <div class="row my-3">
                    <label for="floatingInput">Nama buah</label>
                    <input type="text" class="form-control" id="floatingInput" placeholder="nama buah" name="name">
                </div>
                <div class="row my-3">
                    <label for="floatingInput">Harga</label>
                    <input type="number" class="form-control" id="floatingInput" placeholder="harga" name="harga">
                </div>
                <div class="row my-3">
                    <label for="floatingInput">Warna</label>
                    <input type="text" class="form-control" id="floatingInput" placeholder="warna" name="warna">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>
@endsection
