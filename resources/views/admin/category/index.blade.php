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
                                        <th>Nomor</th>
                                        <th>Nama Kategori</th>
                                        <th>Gambar</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $item)
                                        <tr>
                                            <td style="width: 10%">{{ $loop->iteration }}</td>
                                            <td style="width: 20%">{{ $item->name }}</td>
                                            <td style="width: 20%">
                                                <img class="rounded" src="{{ asset('storage/produk/' . $item->image) }}"
                                                    width="400px" alt="">
                                            </td>
                                            <td style="width: 20%">
                                                <a href="{{ route('category-product.edit', ['category_product' => $item->id]) }}"
                                                    class="s_alert mb-5">
                                                    <button class="btn bg-info"> <i class="fa fa-pencil fa-1x"></i>
                                                    </button>
                                                </a>
                                                <form
                                                    action="{{ route('category-product.destroy', ['category_product' => $item->id]) }}"
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
                <form action="{{ route('category-product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Form Group -->
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Nama Kategori</label>
                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <div class="input-group-text black bold"><i class="fa fa-book"></i></div>
                            </div>
                            <input type="text" name="name" id="addonEmail" class="form-control"
                                placeholder="Masukan Nama Kategori" required>
                        </div>
                    </div>
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Gambar Kategori</label>
                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <div class="input-group-text black bold"><i class="fa fa-picture-o"></i></div>
                            </div>
                            <input type="file" name="image" id="addonEmail" class="form-control"
                                placeholder="Masukan Nama Kategori" required>
                        </div>
                    </div>
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
    <script>
        function myFunction() {
            if (!confirm("Apakah anda yakin menghapus data ini?"))
                event.preventDefault();
        }

    </script>
@endsection
