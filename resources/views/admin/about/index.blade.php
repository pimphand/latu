@extends('admin.app')

@section('content')
    <div class="main-content">

        <div class="container-fluid">

            <section class="snow-editor mb-30">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white border-0 py-3">
                                <h4>Tentang Kami</h4>
                            </div>
                            <form action="{{ route('about.update', ['about' => $about]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-content collapse show">
                                    <div class="card-body pt-0">
                                        <p>Tambah</p>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <textarea name="about" id="mytextarea">{{ $about->about }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <button class="btn btn-info">Simpan<button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
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
