@extends('admin.layout.dashboard')

@section('dashboard')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Buat Produk</h5>
        </div>
        <div class="card-body">
            <form action="{{route('store.product')}}" method="POST">
                @csrf 

                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Nama Produk</label>
                    <input type="text" class="form-control" placeholder="Chargeran Handphone" name="name"/>
                </div>
                {{-- <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="decription">
                      <option selected hidden>Select Category</option>
                      <option value="1">Toys</option>
                      <option value="2">Electronic</option>
                      <option value="3">Gadget</option>
                    </select>
                  </div> --}}
                <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Deskripsi</label>
                    <input type="text" class="form-control" placeholder="Ini adalah chargeran handphone kualitas terbaik" name="decription" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Harga</label>
                    <input type="number" class="form-control" placeholder="Rp. 250.000" name="price"/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
