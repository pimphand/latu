@extends('admin.app')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body">
                            @if ($message = Session::get('danger'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h4 class="font-20">List Berita</h4>
                                <a href="{{ route('news.create') }}">
                                    <button class="btn btn-info">Tambah</button></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap table-contextual dh-table">
                                <thead>
                                    <tr>
                                        <th># </th>
                                        <th>Judul </th>
                                        <th>Isi</th>
                                        <th>Gambar </th>
                                        <th>Status </th>
                                        <th>Tanggal</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($news as $n)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $n->title }}</td>
                                            <td>{!! $n->body !!}</td>
                                            <td>
                                                <a href="{{ asset('storage/news/' . $n->image) }}" target="_blank">
                                                    <img src="{{ asset('storage/news/' . $n->image) }}" alt=""
                                                        width="150">
                                                </a>
                                            </td>
                                            <td>
                                                @if ($n->published === 0)
                                                    <form action="{{ route('unPublish', $n->id) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="status-btn un_paid">sudah
                                                            dipublish</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('Publish', $n->id) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="status-btn btn-info">belum di
                                                            published</button>
                                                    </form>
                                                @endif
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($n->created_at)->format('d M Y') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('news.edit', ['news' => $n->id]) }}">
                                                    <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <form action="{{ route('news.destroy', ['news' => $n->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger bg-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Belum ada berita
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('JS')
<!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
<script src="{{ asset('admin') }}/assets/plugins/apex/apexcharts.min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/apex/custom-apexcharts.js"></script>
<!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
@endsection
