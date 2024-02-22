@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <form action="" method="post">
            @csrf
            @method('PUT')

            <label for="">Name Category</label>
            <input type="text" value="{{ $category->name }}" class="form-control">

            <button type="submit" class="btn btn-warning">Update</button>
        
        </form>

    </div>
@endsection
