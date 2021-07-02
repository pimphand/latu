@extends('admin.app')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h4 class="font-20">Pesan Terbaru</h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap table-contextual dh-table">
                                <thead>
                                    <tr>
                                        <th># </th>
                                        <th>Nama </th>
                                        <th>Nomor Telepon </th>
                                        <th>Pesan </th>
                                        <th>Status </th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($message as $m)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $m->name }}</td>
                                            <td>{{ $m->phone }}</td>
                                            <td>{{ $m->messages }}</td>
                                            <td>
                                                @if ($m->status == 1)
                                                    <span style="color: green">sudah dibaca</span>
                                                @else
                                                    <form action="{{ route('inbox.update', $m->id) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="status-btn un_paid">baca</button>
                                                    </form>

                                                @endif
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($m->created_at)->format('d M Y') }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Belum ada pesan baru
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
