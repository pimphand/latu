@extends('admin.app')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="#" class="s_alert mb-5" data-toggle="modal" data-target="#form">
                        <i class="fa fa-plus fa-2x mb-3"></i>
                    </a>
                    <div class="card mb-30">
                        <div class="card-body py-30 pb-0">
                            <h4 class="font-20 ">List Product</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="style--four table-striped  text-nowrap">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Kategori</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)
                                        <tr>
                                            <td style="width: 10%">{{ $loop->iteration }}</td>
                                            <td style="width: 20%">{{ $item->category->name }}</td>
                                            <td style="width: 20%">{{ $item->name }}</td>
                                            <td style="width: 30%" class="text-center">
                                                <img class="rounded" src="{{ asset('storage/produk/' . $item->image) }}"
                                                    width="400px" alt="">
                                            </td>
                                            <td style="width: 20%"> {{ $item->description }}
                                            </td>
                                            <td style="width: 10%"> {{ $item->price }}
                                            </td>
                                            <td style="width: 10%">
                                                <a href="{{ route('product.edit', ['product' => $item->id]) }}"
                                                    class="s_alert mb-5">
                                                    <button class="btn bg-info"> <i class="fa fa-pencil fa-1x"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('product.destroy', ['product' => $item->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn bg-danger"
                                                        onclick="return myFunction();"> <i class="fa fa-trash fa-1x"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Form Group -->
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Nama Product</label>
                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <div class="input-group-text black bold"><i class="fa fa-book"></i></div>
                            </div>
                            <input type="text" name="name" id="addonEmail" class="form-control"
                                placeholder="Masukan Nama Produk" required>
                        </div>
                    </div>
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Kategori</label>
                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <div class="input-group-text black bold"><i class="fa fa-star"></i></div>
                            </div>
                            <select name="id" id="" class="form-control" required>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Gambar</label>
                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <div class="input-group-text black bold"><i class="fa fa-image"></i></div>
                            </div>
                            <input type="file" name="image" id="addonEmail" class="form-control"
                                placeholder="Type your email here">
                        </div>
                    </div>
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Deskripsi</label>

                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <span>
                                    <span id="display_count" class="black">0</span>/
                                    <span id="word_left">200</span>
                                </span>
                            </div>
                            <textarea id="word_count" name="description" class="theme-input-style style--seven"
                                placeholder="Masukan Deskripsi" required></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Harga</label>
                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <div class="input-group-text black bold"><i class="fa fa-money"></i></div>
                            </div>
                            <input id="demo5" type="text" name="price" id="addonEmail" class="form-control"
                                placeholder="Masukan Harga" required>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Button Group -->
                    <div class="button-group pt-1 mb-4 mr-3 ml-3">
                        <button type="sumbit" class="btn long">Submit</button>
                    </div>
                    <!-- End Button Group -->
                </form>
            </div>
        </div>
    </div>
@endsection

@section('JS')
    <script src="{{ asset('admin') }}/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/bootstrap-touchspin/custom-touchspin.js"></script>
    <script>
        function myFunction() {
            if (!confirm("Apakah anda yakin menghapus data ini?"))
                event.preventDefault();
        }

    </script>
@endsection
