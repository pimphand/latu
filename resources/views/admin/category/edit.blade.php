@extends('admin.app')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Base Horizontal Form With Icons -->
                    <div class="form-element py-30 vertical-form mb-30">
                        <h4 class="font-20 mb-30">Edit Produk</h4>
                        <!-- Form -->
                        <form action="{{ route('category-product.update', ['category_product' => $product_Category]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="font-14 bold mb-2">Nama Produk</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="{{ asset('admin') }}/assets/img/svg/gallery.svg" alt="" class="svg">
                                        </div>
                                    </div>
                                    <input type="textarea" name="name" class="form-control pl-1"
                                        value="{{ $product_Category->name }}">
                                </div>
                            </div>

                            <!-- End Form Group -->

                            <div class="form-row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn long">Edit</button>
                                    <a href="{{ route('product.index') }}">
                                        <button type="button" class="btn long bg-danger">Batal</button>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form Group -->
@endsection
