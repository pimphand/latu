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
                        <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                    <input type="textarea" name="name" class="form-control pl-1"
                                        value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                @if (!$product->image)
                                    <p>Belum Ada Gambar</p>
                                @else
                                    <img src="{{ asset('storage/produk/' . $product->image) }}" width="400px" alt=""><br>
                                @endif
                                <label class="font-14 bold mb-2">Gambar</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="{{ asset('admin') }}/assets/img/svg/gallery.svg" alt="" class="svg">
                                        </div>
                                    </div>
                                    <input type="file" name="image" class="form-control pl-1"
                                        value="{{ $product->image }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-14 bold mb-2">Deskripsi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="{{ asset('admin') }}/assets/img/svg/gallery.svg" alt="" class="svg">
                                        </div>
                                    </div>
                                    <textarea id="mytextarea" name="description" class="theme-input-style"
                                        placeholder="Type Here">{{ $product->description }}</textarea>
                                </div>
                            </div>
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

@section('CSS')
    <script src="https://cdn.tiny.cloud/1/wwx0cl8afxdfv85dxbyv3dy0qaovbhaggsxpfqigxlxw8pjx/tinymce/5/tinymce.min.js"
        referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            height: 500,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullpage | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
@endsection
