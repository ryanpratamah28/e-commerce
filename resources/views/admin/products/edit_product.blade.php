@extends('admin.layout.dashboard')

@section('dashboard')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Product</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Product Name</label>
                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                      <option selected hidden>Select Category</option>
                      <option value="1">Toys</option>
                      <option value="2">Electronic</option>
                      <option value="3">Gadget</option>
                    </select>
                  </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Description</label>
                    <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Price</label>
                    <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
