@extends('admin.admin')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end', 
                    icon: 'success',
                    title: @json(session('success')),
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            </script>
        @endif

        <div class="d-flex align-items-center mb-4">
            <h2 class="fw-bold text-primary mb-0">
                <i class="bi bi-box-seam"></i> Products
            </h2>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Add New Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.addProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="product_name" class="form-label fw-bold">Product Name</label>
                            <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                id="product_name" name="product_name" value="{{ old('product_name') }}"
                                placeholder="Enter product name">
                            @error('product_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="product_image" class="form-label fw-bold">Product Image</label>
                            <input type="file" class="form-control @error('product_image') is-invalid @enderror"
                                id="product_image" name="product_image">
                            @error('product_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            id="description" name="description" value="{{ old('description') }}"
                            placeholder="Enter product description">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="product_price" class="form-label fw-bold">Product Price (KES)</label>
                            <input type="number" class="form-control @error('product_price') is-invalid @enderror"
                                id="product_price" name="product_price" value="{{ old('product_price') }}" min="0"
                                placeholder="e.g. 1500">
                            @error('product_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="quantity" class="form-label fw-bold">Quantity</label>
                            <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                id="quantity" name="quantity" value="{{ old('quantity') }}" min="0"
                                placeholder="e.g. 20">
                            @error('quantity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success px-4">
                            <i class="fa-solid fa-plus"></i> Save Product
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
