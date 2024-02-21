@extends('admin.parent')

@section('content')
    <div class="card p-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1>Category Index</h1>

        <hr>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                <td>No</td>
                <td>Name</td>
                <td>Action</td>
                </th>
            </thead>
            <tbody>
                @foreach ($category as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>
                        <a href="{{ route('category.show', $row->id) }}" class="btn btn-info m-3">Show Category</a>
                        <form action="{{ route('category.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-3">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
