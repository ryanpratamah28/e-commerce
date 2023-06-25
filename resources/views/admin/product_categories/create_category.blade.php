@extends('admin.layout.dashboard')

@section('dashboard')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Buat Kategori Produk</h5>
        </div>
        <div class="card-body">
            <form action="{{route('store.category')}}" method="POST">
                @csrf 

                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Nama Kategori</label>
                    <input type="text" class="form-control" placeholder="Gadget" name="category_name"/>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
