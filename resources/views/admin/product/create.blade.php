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
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="font-14 bold mb-2">Kategori</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="{{ asset('admin') }}/assets/img/svg/info.svg" alt="" class="svg">
                                        </div>
                                    </div>
                                    <select class="form-control pl-1" name="id" id="">
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-14 bold mb-2">Nama Produk</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="{{ asset('admin') }}/assets/img/svg/gallery.svg" alt="" class="svg">
                                        </div>
                                    </div>
                                    <input type="textarea" name="name" class="form-control pl-1" required>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="font-14 bold mb-2">Gambar</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="{{ asset('admin') }}/assets/img/svg/gallery.svg" alt="" class="svg">
                                        </div>
                                    </div>
                                    <input type="file" name="image" class="form-control pl-1" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-14 bold mb-2">Deskripsi</label>
                                <div class="input-group">
                                    <div class="">

                                    </div>
                                    <textarea id="mytextarea" name="description" class="input-group-prepend"
                                        placeholder="Masukan Deskripsi"></textarea>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <div class="form-row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn long">Simpan</button>
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


@section('CSS')
    <script src="https://cdn.tiny.cloud/1/wwx0cl8afxdfv85dxbyv3dy0qaovbhaggsxpfqigxlxw8pjx/tinymce/5/tinymce.min.js"
        referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            height: 500,
            tinydrive_token_provider: 'wwx0cl8afxdfv85dxbyv3dy0qaovbhaggsxpfqigxlxw8pjx',
            tinydrive_google_drive_key: 'AIzaSyA0sjF655GvUSre6kpDvP0x7PcsRyoQ0vE',
            tinydrive_google_drive_client_id: '542157891624-3fecmn03u50el1fkje2m7aefuo4t6o3a.apps.googleusercontent.com',
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help', 'image media link tinydrive code imagetools'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullpage | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons | insertfile image link | code'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        });
    </script>
@endsection
