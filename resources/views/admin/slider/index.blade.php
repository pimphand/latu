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
                            <h4 class="font-20 ">Gambar Slider</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="style--four table-striped  text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slider as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('storage/slider/' . $item->url) }}" width="200px"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                @if ($item->status == 0)
                                                    Aktif
                                                @else
                                                    Tidak Aktif
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('slider.edit', ['slider' => $item->id]) }}"
                                                    class="s_alert mb-5">
                                                    <button class="btn bg-info"> <i class="fa fa-pencil fa-1x"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('slider.destroy', ['slider' => $item->id]) }}"
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Form Group -->
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Gambar</label>
                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <div class="input-group-text black bold"><i class="fa fa-image"></i></div>
                            </div>
                            <input type="file" name="slider" id="addonEmail" class="form-control"
                                placeholder="Type your email here">
                        </div>
                    </div>
                    <div class="form-group mb-4 mr-3 ml-3">
                        <label for="addonEmail" class="mb-2 font-14 black bold">Status</label>

                        <div class="input-group addon">
                            <div class="input-group-prepend">
                                <div class="input-group-text black bold"><i class="fa fa-star"></i></div>
                            </div>
                            <select name="status" id="" class="form-control">
                                <option value="0">Aktif</option>
                                <option value="1">Tidak Aktif</option>
                            </select>
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
    <script>
        function myFunction() {
            if (!confirm("Apakah anda yakin menghapus data ini?"))
                event.preventDefault();
        }
    </script>
@endsection
