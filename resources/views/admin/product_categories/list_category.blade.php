@extends('admin.layout.dashboard')

@section('dashboard')
    @foreach($categories as $category)
        <div class="card">
            <h5 class="card-header">List Category</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category['category_name']}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>

                                    <form method="POST" action="{{route('delete.category', $category['id'])}}">
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/category/edit/{{ $category['id']}}"><i class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i>
                                                Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
@endsection
