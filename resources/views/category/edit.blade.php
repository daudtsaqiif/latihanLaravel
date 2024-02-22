@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <form action="{{ route('category.update', $category->id) }}" method="post">
            @csrf
            @method('PUT')

            <label for="">Name Category</label>
            <input type="text" value="{{ $category->name }}" class="form-control" name="name">

            <button type="submit" class="btn btn-warning">Update</button>
        
        </form>

    </div>
@endsection
