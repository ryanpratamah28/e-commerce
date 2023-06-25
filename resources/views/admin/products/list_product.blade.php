@extends('admin.layout.dashboard')

@section('dashboard')
    @foreach($products as $product)
    <div class="card">
        <h5 class="card-header">All Product List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['description'] }}</td>
                        <td>{{ $product['price'] }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <form method="POST" action="{{route('delete.product', $product['id'])}}">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/product/edit/{{ $product['id']}}"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i>
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
