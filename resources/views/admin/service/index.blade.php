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
                                <h4 class="font-20">List Service</h4>
                                <a href="{{ route('service.create') }}">
                                    <button class="btn btn-info">Tambah</button></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap table-contextual dh-table">
                                <thead>
                                    <tr>
                                        <th># </th>
                                        <th>Nama</th>
                                        <th>Icon</th>
                                        <th>Deskripsi </th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($service as $n)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $n->name }}</td>
                                            <td>
                                                <a href="{{ asset('storage/service/' . $n->icon) }}" target="_blank">
                                                    <img src="{{ asset('storage/service/' . $n->icon) }}" alt=""
                                                        width="150">
                                                </a>
                                            </td>
                                            <td>{!! $n->description !!}</td>
                                            <td>
                                                <a href="{{ route('service.edit', ['service' => $n->id]) }}">
                                                    <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <form action="{{ route('service.destroy', ['service' => $n->id]) }}"
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
