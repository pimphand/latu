@extends('admin.app')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Base Horizontal Form With Icons -->
                    <div class="form-element py-30 vertical-form mb-30">
                        <h4 class="font-20 mb-30">Edit Slider</h4>
                        <!-- Form -->
                        <form action="{{ route('slider.update', ['slider' => $slider->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Form Group -->
                            <div class="form-group">
                                <img src="{{ asset('storage/slider/' . $slider->url) }}" width="400px" alt=""><br>
                                <label class="font-14 bold mb-2">Gambar</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="{{ asset('admin') }}/assets/img/svg/gallery.svg" alt="" class="svg">
                                        </div>
                                    </div>
                                    <input type="file" name="slider" class="form-control pl-1" value="{{ $slider->url }}">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="font-14 bold mb-2">Status</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="{{ asset('admin') }}/assets/img/svg/info.svg" alt="" class="svg">
                                        </div>
                                    </div>
                                    <select class="form-control pl-1" name="status" id="">
                                        <option value="0" selected>Aktif</option>
                                        <option value="1">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Form Group -->
                            <div class="form-row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn long">Edit</button>
                                    <a href="{{ route('slider.index') }}">
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
