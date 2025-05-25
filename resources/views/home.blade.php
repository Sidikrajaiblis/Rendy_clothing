<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - Rendy Clothing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts & Styles -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">
        @include('layouts.admin.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            @include('layouts.admin.navbar')

            <div id="content">
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                    <!-- Statistik Cards -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pekerja</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pekerja->count() }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kategori</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kategori->count() }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Produk</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $produk->count() }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pesan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pesan->count() }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aktivitas Terbaru</h6>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach ($aktivitas as $log)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $log['pesan'] }}
                                    <span class="badge badge-primary badge-pill">{{ $log['waktu'] }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <a href="{{ route('aktivitas.index') }}" class="btn btn-sm btn-link mt-2">Lihat semua aktivitas</a>
                    </div>


                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Rendy Clothing 2025</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>