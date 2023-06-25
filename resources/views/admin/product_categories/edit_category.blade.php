@extends('admin.layout.dashboard')

@section('dashboard')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Category</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="/category/update/{{ $category['id'] }}">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Category Name</label>
                    <input type="text" class="form-control" placeholder="Toys" name="category_name" value="{{ $category['id']}} "/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('category')}}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
@endsection
