@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <h1>beli buah</h1>
        <form action="{{ route('buah.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Kesehatan" name="name">
                <label for="floatingInput">Name Category</label>
                <input type="number" class="form-control" id="floatingInput" placeholder="Kesehatan" name="harga">
                <label for="floatingInput">harga</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Kesehatan" name="warna">
                <label for="floatingInput">warna</label>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>
@endsection
