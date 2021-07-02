@extends('admin.app')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Base Control -->
                    <div class="form-element base-control mb-30">
                        <h4 class="font-20 mb-4">Edit Berita</h4>

                        <!-- Form -->
                        <form action="{{ route('news.update', ['news' => $news->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <!-- Form Group -->
                            <div class="form-group mb-4">
                                <label for="email1" class="mb-2 black bold">Judul</label>
                                <input type="text" class="theme-input-style" name="title" placeholder="Judul bertia"
                                    value="{{ $news->title }}">
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="form-group mb-4">
                                <label for="password1" class="mb-2 black bold">Gambar</label>
                                <input type="file" class="theme-input-style" id="password1"
                                    placeholder="Enter your password" name="image" value="{{ $news->image }}">
                            </div>

                            <div class="form-group mb-4">
                                <label for="password1" class="mb-2 black bold">published</label>
                                <select class="theme-input-style" id="password1" placeholder="Enter your password"
                                    name="published">
                                    <option value="0">Ya</option>
                                    <option value="1">tidak</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group mb-4">
                                <label for="exampleTextarea1" class="mb-2 black bold d-block">Isi</label>
                                <textarea id="mytextarea" name="body" class="theme-input-style"
                                    placeholder="Type Here">{{ $news->body }}</textarea>
                            </div>
                            <!-- End Form Group -->

                            <!-- Button Group -->
                            <div class="button-group pt-1">
                                <button type="submit" class="btn long">Simpan</button>
                            </div>
                            <!-- End Button Group -->
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Base Control -->
                </div>
            </div>
        </div>
    </div>
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
