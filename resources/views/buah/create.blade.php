@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <h1>beli buah</h1>
        <form action="{{ route('buah.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form mb-3">
                <input type="text" class="form-control m-4" id="floatingInput" placeholder="nama buah" name="name">
                <label for="floatingInput"></label>
                
                <input type="number" class="form-control  m-4" id="floatingInput" placeholder="harga" name="harga">
                <label for="floatingInput"></label>
                
                <input type="text" class="form-control  m-4" id="floatingInput" placeholder="warna" name="warna">
                <label for="floatingInput"></label>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>
@endsection
