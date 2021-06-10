@extends('admin.app')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <!-- Card -->
                    <div class="card mb-30 progress_1">
                        <div class="card-body">
                            <h4 class="progress-title">Registrations</h4>

                            <div class="ProgressBar-wrap position-relative mb-4">
                                <div class="ProgressBar ProgressBar_1" data-progress="75">
                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                        <!-- on défini le l'angle et le centre de rotation du cercle -->
                                        <circle transform="rotate(135, 100, 100)" class="ProgressBar-background" cx="100"
                                            cy="100" r="8" />
                                        <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle" cx="100"
                                            cy="100" r="85" />
                                    </svg>
                                    <span class="ProgressBar-percentage--text">
                                        Increase
                                    </span>
                                    <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap mb-2 progress-info">
                                <div>Users</div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-up.svg" alt="" class="svg"> 2.6k
                                </div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-down.svg" alt="" class="svg">568
                                </div>
                            </div>


                            <div class="d-flex flex-wrap progress-info">
                                <div>Disabled</div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-up.svg" alt="" class="svg">1.26k
                                </div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-down.svg" alt="" class="svg">25
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Card -->
                    <div class="card mb-30 progress_1">
                        <div class="card-body">
                            <h4 class="progress-title">Registrations</h4>

                            <div class="ProgressBar-wrap position-relative mb-4">
                                <div class="ProgressBar ProgressBar_1" data-progress="75">
                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                        <!-- on défini le l'angle et le centre de rotation du cercle -->
                                        <circle transform="rotate(135, 100, 100)" class="ProgressBar-background" cx="100"
                                            cy="100" r="8" />
                                        <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle" cx="100"
                                            cy="100" r="85" />
                                    </svg>
                                    <span class="ProgressBar-percentage--text">
                                        Increase
                                    </span>
                                    <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap mb-2 progress-info">
                                <div>Users</div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-up.svg" alt="" class="svg"> 2.6k
                                </div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-down.svg" alt="" class="svg">568
                                </div>
                            </div>


                            <div class="d-flex flex-wrap progress-info">
                                <div>Disabled</div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-up.svg" alt="" class="svg">1.26k
                                </div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-down.svg" alt="" class="svg">25
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Card -->
                    <div class="card mb-30 progress_1">
                        <div class="card-body">
                            <h4 class="progress-title">Registrations</h4>

                            <div class="ProgressBar-wrap position-relative mb-4">
                                <div class="ProgressBar ProgressBar_1" data-progress="75">
                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                        <!-- on défini le l'angle et le centre de rotation du cercle -->
                                        <circle transform="rotate(135, 100, 100)" class="ProgressBar-background" cx="100"
                                            cy="100" r="8" />
                                        <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle" cx="100"
                                            cy="100" r="85" />
                                    </svg>
                                    <span class="ProgressBar-percentage--text">
                                        Increase
                                    </span>
                                    <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap mb-2 progress-info">
                                <div>Users</div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-up.svg" alt="" class="svg"> 2.6k
                                </div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-down.svg" alt="" class="svg">568
                                </div>
                            </div>


                            <div class="d-flex flex-wrap progress-info">
                                <div>Disabled</div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-up.svg" alt="" class="svg">1.26k
                                </div>
                                <div><img src="{{ asset('admin') }}/assets/img/svg/caret-down.svg" alt="" class="svg">25
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
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
